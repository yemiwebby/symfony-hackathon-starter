<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class FoursquareController
 * @package App\Controller
 */
class FoursquareController extends AbstractController
{
    /**
     * @Route("/foursquare", name="foursquare")
     */
    public function index()
    {
        return $this->render('api/foursquare/index.html.twig', [
            'controller_name' => 'FoursquareController',
        ]);
    }
}
