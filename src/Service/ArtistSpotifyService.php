<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Factory\ArtistFactory;
use App\Factory\AlbumFactory;
use App\Entity\Artist;
class ArtistSpotifyService {

    private HttpClientInterface $httpClient;
    private ArtistFactory $artistFactory;
    private AlbumFactory $albumFactory;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->artistFactory = new ArtistFactory();
        $this->albumFactory = new AlbumFactory();
    }

    public function searchArtist(string $token, string $search): array
    {
        $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/search', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
            'query' => [
                'q' => $search,
                'type' => 'artist',
                'limit' => 12,
            ],
        ]);

        $data = $response->toArray();
        return $this->artistFactory->createMultipleFromSpotifyData($data['artists']['items'] ?? []);

    }

    public function getArtist(string $token, string $id): Artist
    {
        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/artists/' . $id,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
            ]
        );

        $data = $response->toArray();
        return $this->artistFactory->createSimpleFromSpotifyData($data ?? []);
    }

    public function getAlbums(string $token, string $id): array
    {
        $response = $this->httpClient->request(
            'GET',
            'https://api.spotify.com/v1/artists/' . $id . '/albums',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'limit' => 6,
                ],
            ]
        );

        $data = $response->toArray();
        return $this->albumFactory->createMultipleFromSpotifyData($data['items'] ?? []);
    }
}