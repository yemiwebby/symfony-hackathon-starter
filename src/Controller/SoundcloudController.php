<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SoundcloudController extends AbstractController
{
    /**
     * @Route("/soundcloud", name="soundcloud")
     */
    public function index()
    {
        return $this->render('soundcloud/index.html.twig', [
            'controller_name' => 'SoundcloudController',
        ]);
    }
}
