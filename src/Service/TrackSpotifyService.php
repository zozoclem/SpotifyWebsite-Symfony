<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Factory\TrackFactory;
use App\Entity\Track;

class TrackSpotifyService
{

    private HttpClientInterface $httpClient;
    private TrackFactory $trackFactory;


    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->trackFactory = new TrackFactory();
    }

    public function getTrack(string $token, string $id): Track
    {
        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/tracks/' . $id,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
            ]
        );

        $data = $response->toArray();

        return $this->trackFactory->createSimpleFromSpotifyData($data ?? []);
        ;
    }

    public function getRecommendations(string $token, string $id): array
    {
        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/recommendations',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'seed_tracks' => $id,
                    'limit' => 6,
                ],
            ]
        );
        

        $data = $response->toArray();

        return $this->trackFactory->createMultipleFromSpotifyData($data['tracks'] ?? []);
    }

    public function searchMusic(string $token, string $search): array
    {
        $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/search', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
            'query' => [
                'q' => $search,
                'type' => 'track',
                'limit' => 12,
            ],
        ]);


        $data = $response->toArray();

        return $this->trackFactory->createMultipleFromSpotifyData($data['tracks']['items'] ?? []);
    }
}