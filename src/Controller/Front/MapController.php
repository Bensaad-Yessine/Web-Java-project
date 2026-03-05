<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapController extends AbstractController
{
    #[Route('/front/map', name: 'front_campus_map')]
    public function mapPage(): Response
    {
        // coordinates derived from plus codes earlier; kept here for convenience
        $mapData = [
            'A' => 'V5XR+M36, Cebalat Ben Ammar',
            'B' => 'V5XR+M36, Cebalat Ben Ammar',
            'C' => 'V5XR+M36, Cebalat Ben Ammar',
            'D' => 'V5XQ+9VW, Cebalat Ben Ammar',
            'E' => 'V5XQ+RWW, ESPRIT, Cebalat Ben Ammar',
            'G' => 'B.P. 160, pôle Technologique, Z.I. Chotrana II, 2083',
            'H' => 'V5WV+R98',
            'I' => 'W52R+C3H, Cebalat Ben Ammar',
            'J' => 'W52R+C3H, Cebalat Ben Ammar',
            'K' => 'W52R+C3H, Cebalat Ben Ammar',
        ];

        // read API key from environment (configure GOOGLE_MAPS_API_KEY in .env)
        $apiKey = $_ENV['GOOGLE_MAPS_API_KEY'] ?? null;

        return $this->render('front/map/index.html.twig', [
            'mapData' => $mapData,
            'googleApiKey' => $apiKey,
        ]);
    }
}
