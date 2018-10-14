<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class TwitterController
 * @package App\Controller
 *
 */
class TwitterController extends AbstractController
{
    /**
     * @Route("/twitter", name="twitter")
     */
    public function index()
    {
        return $this->render('api/twitter/index.html.twig', [
            'controller_name' => 'TwitterController',
        ]);
    }
}
