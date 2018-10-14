<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpotifyController extends AbstractController
{
    /**
     * @Route("/spotify", name="spotify")
     */
    public function index()
    {
        return $this->render('spotify/index.html.twig', [
            'controller_name' => 'SpotifyController',
        ]);
    }
}
