<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpotifyController extends AbstractController
{
    #[Route(path: '/spotify', name: 'app_spotify')]
    public function index(): Response
    {
        $user = $this->getUser();
        $userTrackFavorites = $user ? $user->getTracks() : [];
        $userArtistFavorites = $user ? $user->getArtists() : [];

        return $this->render('spotify/index.html.twig', [
            'user_favorites_tracks' => $userTrackFavorites,
            'user_favorites_artists' => $userArtistFavorites,
        ]);
    }
}
