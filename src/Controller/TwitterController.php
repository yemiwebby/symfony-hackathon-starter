<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TwitterController extends AbstractController
{
    /**
     * @Route("/twitter", name="twitter")
     */
    public function index()
    {
        return $this->render('twitter/index.html.twig', [
            'controller_name' => 'TwitterController',
        ]);
    }
}
