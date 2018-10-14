<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class FlickrController
 * @package App\Controller
 */
class FlickrController extends AbstractController
{
    /**
     * @Route("/flickr", name="flickr")
     */
    public function index()
    {
        return $this->render('api/flickr/index.html.twig', [
            'controller_name' => 'FlickrController',
        ]);
    }
}
