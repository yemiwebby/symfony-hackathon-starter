<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class YahooController
 * @package App\Controller
 */
class YahooController extends AbstractController
{
    /**
     * @Route("/yahoo", name="yahoo")
     */
    public function index()
    {
        return $this->render('api/yahoo/index.html.twig', [
            'controller_name' => 'YahooController',
        ]);
    }
}
