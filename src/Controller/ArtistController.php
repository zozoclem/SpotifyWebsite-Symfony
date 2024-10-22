<?php

namespace App\Controller;

use App\Factory\ArtistFactory;
use App\Factory\AlbumFactory;
use App\Service\ArtistSpotifyService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SearchArtistType;
use App\Service\AuthSpotifyService;
use App\Repository\ArtistRepository;
use Doctrine\ORM\EntityManagerInterface;

class ArtistController extends AbstractController
{
    private string $token;
    private ArtistFactory $artistFactory;
    private AlbumFactory $albumFactory;

    public function __construct(
        private readonly ArtistSpotifyService $ArtistSpotifyService,
        private readonly AuthSpotifyService $authSpotifyService,
        ArtistFactory $artistFactory,
        AlbumFactory $albumFactory
    ) {
        $this->token = $this->authSpotifyService->auth();
        $this->artistFactory = $artistFactory;
        $this->albumFactory = $albumFactory;
    }

    #[Route(path: '/artist/{id}', name: 'artist_info')]
    //Récupére les informations d'un artiste (avec ses albums)
    public function getArtistInfo(string $id): Response
    {
        $artist = $this->ArtistSpotifyService->getArtist($this->token, $id);
        $albums = $this->ArtistSpotifyService->getAlbums($this->token, $id);

        return $this->render('spotify/artist.html.twig', [
            'artist' => $artist,
            'albums' => $albums,
        ]);
    }

    #[Route(path: '/search-artist', name: 'search_artist', methods: ['GET', 'POST'])]
    //Recherche un artiste
    public function searchArtist(Request $request): Response
    {
        $form = $this->createForm(SearchArtistType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $artistName = $data['searchValue'];

            $artists = $this->ArtistSpotifyService->searchArtist($this->token, $artistName);

            return $this->render('spotify/search-artist.html.twig', [
                'form' => $form->createView(),
                'artists' => $artists,
            ]);
        }

        return $this->render('spotify/search-artist.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    //Ajoute un artiste aux favoris
    #[Route(path: '/favorite/artist/add', name: 'favorite_artist_add', methods: ['POST'])]
    public function addFavoriteArtist(Request $request, ArtistRepository $artistRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $artistId = $request->request->get('artist_id');
        $artist = $artistRepository->findOneByArtistID($artistId);

        if (!$artist) {
            $artist = $this->ArtistSpotifyService->getArtist($this->token, $artistId);
            $em->persist($artist);
        }

        $user->addArtist($artist);
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('app_spotify');
    }

    #[Route(path: '/favorite/artist/remove', name: 'favorite_artist_remove', methods: ['POST'])]
    //Supprime un artiste des favoris
    public function removeFavoriteArtist(Request $request, ArtistRepository $artistRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $artistId = $request->request->get('artist_id');
        $artist = $artistRepository->findOneByArtistID($artistId);

        if ($artist && $user->getArtists()->contains($artist)) {
            $user->removeArtist($artist);
            $em->persist($user);
            $em->flush();
        }

        return $this->redirectToRoute('app_spotify');
    }
}
