<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class SpotifyController
 * @package App\Controller
 */
class SpotifyController extends AbstractController
{
    /**
     * @Route("/spotify", name="spotify")
     */
    public function index()
    {
        return $this->render('api/spotify/index.html.twig', [
            'controller_name' => 'SpotifyController',
        ]);
    }
}
