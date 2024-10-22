<?php

namespace App\Factory;

use App\Entity\Artist;

class ArtistFactory
{
    public function createMultipleFromSpotifyData(array $spotifyData): array
    {
        $artists = [];

        foreach ($spotifyData as $item) {
            $artists[] = $this->createSimpleFromSpotifyData($item);
        }

        return $artists;
    }

    public function createSimpleFromSpotifyData(array $spotifyData): Artist
    {
        $artist = new Artist(
            $spotifyData['id'],
            $spotifyData['external_urls']['spotify'],
            $spotifyData['followers']['total'], 
            $spotifyData['genres'],
            $spotifyData['href'],
            $spotifyData['images'][0]['url'] ?? '',
            $spotifyData['name'],
            $spotifyData['popularity'],
            $spotifyData['type'],
            $spotifyData['uri']
        );

        return $artist;
    }
}