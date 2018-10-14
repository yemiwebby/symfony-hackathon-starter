<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class DropboxController
 * @package App\Controller
 */
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
