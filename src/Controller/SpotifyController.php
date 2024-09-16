<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class SpotifyController extends AbstractController
{

    private $client;
    private $logger;

    public function __construct(HttpClientInterface $client, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->logger = $logger;
    }
    

    public function getToken(): string {
        $client_id = '5692f21600ed4f74844bc02d0fdb124a';
        $client_secret = '8461c479b2d14464a501b46f240edc66';
        $auth = base64_encode($client_id . ':' . $client_secret);
    
        $response = $this->client->request(
            'POST',
            'https://accounts.spotify.com/api/token',
            [
                'headers' => [
                    'Authorization' => 'Basic ' . $auth,
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => [
                    'grant_type' => 'client_credentials',
                ],
            ]
        );
    
        $data = $response->toArray();
        $access_token = $data['access_token'];

        return $access_token;
    } 

    public function getSpotifyArtist(string $id): array
    {

            $response = $this->client->request(
            'GET',
            'https://api.spotify.com/v1/artists/' . $id,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->getToken(),
                ],
            ]
        );

        $this->logger->info('Spotify API response', ['response' => $response->toArray()]);


        return $response->toArray();
    }
    

    public function getSpotifyArtistAlbums(string $id): array
    {

            $response = $this->client->request(
            'GET',
            'https://api.spotify.com/v1/artists/' . $id . '/albums',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->getToken(),
                ],
            ]
        );

        $this->logger->info('Spotify API response', ['response' => $response->toArray()]);


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
