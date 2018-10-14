<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SlackController extends AbstractController
{
    /**
     * @Route("/slack", name="slack")
     */
    public function index()
    {
        return $this->render('slack/index.html.twig', [
            'controller_name' => 'SlackController',
        ]);
    }
}
