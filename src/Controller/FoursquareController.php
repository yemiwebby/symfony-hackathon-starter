<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FoursquareController extends AbstractController
{
    /**
     * @Route("/foursquare", name="foursquare")
     */
    public function index()
    {
        return $this->render('foursquare/index.html.twig', [
            'controller_name' => 'FoursquareController',
        ]);
    }
}
