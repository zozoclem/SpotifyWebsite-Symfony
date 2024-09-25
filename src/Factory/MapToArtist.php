<?php

namespace App\Factory;

use App\Entity\Artist;

function MapToArtist($maps)
{
    $artists = [];
    foreach ($maps as $map) {
        $artist = new Artist($map['external_urls'], $map['followers'], $map['genres'], $map['href'], $map['id'], $map['images'], $map['name'], $map['popularity'], $map['type'], $map['uri']);

        $artists[] = $artist;
    }
    return $artists;
}