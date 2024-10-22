<?php

namespace App\Controller;

use App\Factory\TrackFactory;
use App\Service\TrackSpotifyService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SearchMusicType;
use App\Service\AuthSpotifyService;
use App\Repository\TrackRepository;
use Doctrine\ORM\EntityManagerInterface;

class TrackController extends AbstractController
{
    private string $token;
    private TrackFactory $trackFactory;

    public function __construct(
         private readonly AuthSpotifyService $authSpotifyService,
         private readonly TrackSpotifyService $TrackSpotifyService,
        TrackFactory $trackFactory
    ) {
        $this->token = $this->authSpotifyService->auth();
        $this->trackFactory = $trackFactory;
    }

    #[Route(path: '/music/{id}', name: 'music_info')]
    public function getMusicInfo(string $id): Response
    {
        $track = $this->TrackSpotifyService->getTrack($this->token, $id);
        $recommendations = $this->TrackSpotifyService->getRecommendations($this->token, $id);

        return $this->render('spotify/music.html.twig', [
            'track' => $track,
            'recommendations' => $recommendations,
        ]);
    }

    #[Route(path: '/search-music', name: 'search_music', methods: ['GET', 'POST'])]
    public function searchMusic(Request $request): Response
    {
        $form = $this->createForm(SearchMusicType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $musicName = $data['searchValue'];
            $tracks = $this->TrackSpotifyService->searchMusic($this->token, $musicName);

            return $this->render('spotify/search-music.html.twig', [
                'form' => $form->createView(),
                'tracks' => $tracks,
            ]);
        }

        return $this->render('spotify/search-music.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route(path: '/favorite/track/add', name: 'favorite_track_add', methods: ['POST'])]
    public function addFavoriteTrack(Request $request, TrackRepository $trackRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $trackId = $request->request->get('track_id');
        $track = $trackRepository->findOneByTrackID($trackId);

        if (!$track) {
            $track = $this->TrackSpotifyService->getTrack($this->token, $trackId);
            $em->persist($track);
        }

        $user->addTrack($track);
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('app_spotify');
    }

    #[Route(path: '/favorite/track/remove', name: 'favorite_track_remove', methods: ['POST'])]
    public function removeFavoriteTrack(Request $request, TrackRepository $trackRepository, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $trackId = $request->request->get('track_id');
        $track = $trackRepository->findOneByTrackID($trackId);

        if ($track && $user->getTracks()->contains($track)) {
            $user->removeTrack($track);
            $em->persist($user);
            $em->flush();
        }

        return $this->redirectToRoute('app_spotify');
    }

}
