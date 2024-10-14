<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Entity\Track;
use App\Factory\ArtistFactory;
use App\Factory\TrackFactory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\AuthSpotifyService;
use App\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;



class SpotifyController extends AbstractController
{

    private TrackFactory $trackFactory;
    private ArtistFactory $artistFactory;
    private string $token;
    public function __construct(
        private readonly AuthSpotifyService $authSpotifyService,
        private readonly HttpClientInterface $httpClient,
        TrackFactory $trackFactory,
        ArtistFactory $artistFactory,
    ) {
        $this->token = $this->authSpotifyService->auth();
        $this->trackFactory = $trackFactory;
        $this->artistFactory = $artistFactory;
    }


    public function getSpotifyArtist(string $id): Artist
    {

        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/artists/' . $id,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
            ]
        );

        $data = $response->toArray();
        $artistFactory = new ArtistFactory();
        $artist = $artistFactory->createSimpleFromSpotifyData($data['artists'] ?? []);

        return $artist;
    }

    public function getAlbum(string $id): array
    {

        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/albums/' . $id,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
            ]
        );


        return $response->toArray();
    }


    public function getSpotifyArtistAlbums(string $id): array
    {

        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/artists/' . $id . '/albums',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
            ]
        );

        return $response->toArray();
    }


    public function getSpotifyMusic(string $id): Track
    {

        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/tracks/' . $id,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
            ]
        );

        $data = $response->toArray();

        $track = $this->trackFactory->createSimpleFromSpotifyData(spotifyData: $data ?? []);

        return $track;
    }

    public function getSpotifyMusicRecommendations(string $id): array
    {

        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/recommendations',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
                'query' => [
                    'seed_tracks' => $id,
                    'limit' => 6,
                ],
            ]
        );

        $data = $response->toArray();
        $tracks = $this->trackFactory->createMultipleFromSpotifyData($data['tracks'] ?? []);

        return $tracks;
    }

    #[Route(path: '/search-music', name: 'search_music', methods: ['GET', 'POST'])]

    public function searchMusic(Request $request): Response
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $musicName = $data['searchValue'];

            $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/search', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
                'query' => [
                    'q' => $musicName,
                    'type' => 'track',
                    'limit' => 12,
                ],
            ]);

            $data = $response->toArray();
            $tracks = $this->trackFactory->createMultipleFromSpotifyData($data['tracks']['items'] ?? []);

            return $this->render('spotify/search-music.html.twig', [
                'form' => $form->createView(),
                'tracks' => $tracks,
            ]);
        }

        return $this->render('spotify/search-music.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route(path: '/search-artist', name: 'search_artist', methods: ['GET', 'POST'])]
    
    public function searchArtist(Request $request): Response
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $artistName = $data['searchValue'];

            $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/search', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
                'query' => [
                    'q' => $artistName,
                    'type' => 'artist',
                    'limit' => 12,
                ],
            ]);

            $data = $response->toArray();
            $artists = $this->artistFactory->createMultipleFromSpotifyData($data['artists']['items'] ?? []);

            return $this->render('spotify/search-artist.html.twig', [
                'form' => $form->createView(),
                'artists' => $artists,
            ]);
        }

        return $this->render('spotify/search-artist.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route(path: '/music/{id}', name: 'music_info')]


    public function getMusicInfo(string $id): Response
    {
        return $this->render('spotify/music.html.twig', [
            'track' => $this->getSpotifyMusic($id),
            'recommendations' => $this->getSpotifyMusicRecommendations($id),
        ]);
    }


    #[Route(path: '/artist/{id}', name: 'artist_info')]


    public function getArtistInfo(string $id): Response
    {
        return $this->render('spotify/artist.html.twig', [
            'artist' => $this->getSpotifyArtist($id),
            'albums' => $this->getSpotifyArtistAlbums($id),
        ]);
    }

    #[Route(path: '/spotify', name: 'app_spotify')]

    public function index(): Response
    {
        return $this->render('spotify/index.html.twig');
        /*return $this->render('spotify/index.html.twig', [
            'artist' => $this->getSpotifyArtist("0TnOYISbd1XYRBk9myaseg"),
            'albums' => $this->getSpotifyArtistAlbums("0TnOYISbd1XYRBk9myaseg"),
        ]);*/
    }

}

