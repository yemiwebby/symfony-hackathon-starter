<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FacebookController extends AbstractController
{
    /**
     * @Route("/facebook", name="facebook")
     */
    public function index()
    {
        return $this->render('api/facebook/index.html.twig', [
            'controller_name' => 'FacebookController',
        ]);
    }
}
