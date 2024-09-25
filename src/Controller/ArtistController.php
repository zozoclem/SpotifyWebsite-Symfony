<?php
namespace App\Controller;

use App\Service\AuthSpotifyService;
use App\Form\SearchType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use function App\Factory\MapToArtist;

class ArtistController extends AbstractController
{
    private string $token;

    public function __construct(
        private readonly AuthSpotifyService $authSpotifyService,
        private readonly HttpClientInterface $httpClient
    ) {
        $this->token = $this->authSpotifyService->auth();
    }

    #[Route(path: '/search-artist', name: 'search_artist', methods: ['GET', 'POST'])]
    public function searchArtist(Request $request): Response
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $artistName = $data['artistName'];

            $response = $this->httpClient->request('GET', 'https://api.spotify.com/v1/search', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                ],
                'query' => [
                    'q' => $artistName,
                    'type' => 'artist',
                    'limit' => 12,
                ],
            ]);

            $data = $response->toArray();
            $artists = MapToArtist($data['artists']['items'] ?? []);

            return $this->render('spotify/artist.html.twig', [
                'form' => $form->createView(),
                'artists' => $artists,
            ]);}

        return $this->render('spotify/artist.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}