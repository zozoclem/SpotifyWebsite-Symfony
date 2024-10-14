<?php

namespace App\Factory;

use App\Entity\Artist;

class ArtistFactory {

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
                $spotifyData['external_urls']['spotify'],
                $spotifyData['followers']['total'],
                $spotifyData['genres'],
                $spotifyData['href'],
                $spotifyData['id'],
                $spotifyData['images'][0]['url'] ?? null,
                $spotifyData['name'],
                $spotifyData['popularity'],
                $spotifyData['type'],
                $spotifyData['uri']
            );

        return $artist;
    }

}