<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class SlackController
 * @package App\Controller
 */
class SlackController extends AbstractController
{
    /**
     * @Route("/slack", name="slack")
     */
    public function index()
    {
        return $this->render('api/slack/index.html.twig', [
            'controller_name' => 'SlackController',
        ]);
    }
}
