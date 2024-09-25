<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\AuthSpotifyService;

class SpotifyHomeController extends AbstractController
{

    private string $token;
    public function __construct(
        private readonly AuthSpotifyService $authSpotifyService,
        private readonly HttpClientInterface $httpClient,
    ) {
        $this->token = $this->authSpotifyService->auth();
    }


    public function getSpotifyArtist(string $id): array
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

        return $response->toArray();
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


    #[Route(path: '/spotify', name: 'app_spotify')]


    public function index(): Response
    {
        return $this->render('spotify/index.html.twig', [
            'artist' => $this->getSpotifyArtist("0TnOYISbd1XYRBk9myaseg"),
            'albums' => $this->getSpotifyArtistAlbums("0TnOYISbd1XYRBk9myaseg"),
        ]);
    }

}

