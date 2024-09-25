<?php

namespace App\Factory;

use App\Entity\Track;

function MapToTrack($maps)
{
    $tracks = [];
    foreach ($maps as $map) {
        $track = new Track($map['disc_number'], $map['duration_ms'], $map['explicit'], $map['external_ids']['isrc'], $map['external_urls']['spotify'], $map['href'], $map['id'], $map['is_local'], $map['name'], $map['popularity'], $map['preview_url'], $map['track_number'], $map['type'], $map['uri'], $map['album']['images'][0]['url']);

        $tracks[] = $track;
    }
    return $tracks;
}