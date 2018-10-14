<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InstagramController extends AbstractController
{
    /**
     * @Route("/instagram", name="instagram")
     */
    public function index()
    {
        return $this->render('instagram/index.html.twig', [
            'controller_name' => 'InstagramController',
        ]);
    }
}
