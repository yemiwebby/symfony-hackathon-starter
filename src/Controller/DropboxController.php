<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DropboxController extends AbstractController
{
    /**
     * @Route("/dropbox", name="dropbox")
     */
    public function index()
    {
        return $this->render('api/dropbox/index.html.twig', [
            'controller_name' => 'DropboxController',
        ]);
    }
}
