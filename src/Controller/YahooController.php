<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class YahooController extends AbstractController
{
    /**
     * @Route("/yahoo", name="yahoo")
     */
    public function index()
    {
        return $this->render('yahoo/index.html.twig', [
            'controller_name' => 'YahooController',
        ]);
    }
}
