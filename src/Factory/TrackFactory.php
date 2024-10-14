<?php

namespace App\Factory;

use App\Entity\Track;

class TrackFactory {

public function createMultipleFromSpotifyData(array $spotifyData): array
    {
        $tracks = [];

        foreach ($spotifyData as $item) {
            $track = $this->createSimpleFromSpotifyData($item);
            $tracks[] = $track;
        }

        return $tracks;
    }

    public function createSimpleFromSpotifyData(array $spotifyData): Track
    {

        $track = new Track(
            $spotifyData['disc_number'],
            $spotifyData['duration_ms'],
            $spotifyData['explicit'],
            $spotifyData['external_ids']['isrc'],
            $spotifyData['external_urls']['spotify'],
            $spotifyData['href'],
            $spotifyData['id'],
            $spotifyData['is_local'],
            $spotifyData['name'],
            $spotifyData['popularity'],
            $spotifyData['preview_url'] ?? null,
            $spotifyData['track_number'],
            $spotifyData['type'],
            $spotifyData['uri'],
            $spotifyData['album']['images'][0]['url'] ?? null,
            $spotifyData['album']['id'] ?? null,
            $spotifyData['album']['name'] ?? null,
            $spotifyData['album']['type'] ?? null,
            $spotifyData['artists']
        );

        return $track;
    }

}