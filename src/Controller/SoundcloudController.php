<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class SoundcloudController
 * @package App\Controller
 */
class SoundcloudController extends AbstractController
{
    /**
     * @Route("/soundcloud", name="soundcloud")
     */
    public function index()
    {
        return $this->render('api/soundcloud/index.html.twig', [
            'controller_name' => 'SoundcloudController',
        ]);
    }
}
