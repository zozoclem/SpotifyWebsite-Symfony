<?php

namespace App\Factory;

use App\Entity\Album;
class AlbumFactory
{

    public function createMultipleFromSpotifyData(array $data): array
    {
        $albums = [];

        foreach ($data as $item) {
            $albums[] = $this->createSimpleFromSpotifyData($item);
        }

        return $albums;
    }


    public static function createSimpleFromSpotifyData(array $data): Album
    {
        return new Album(
            $data['album_type'],
            $data['total_tracks'],
            $data['available_markets'],
            $data['external_urls'],
            $data['href'],
            $data['id'],
            $data['images'],
            $data['name'],
            $data['release_date'],
            $data['release_date_precision'],
            $data['type'],
            $data['uri'],
            $data['artists'],
            $data['album_group']
        );
    }
}