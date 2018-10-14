<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LinkedinController extends AbstractController
{
    /**
     * @Route("/linkedin", name="linkedin")
     */
    public function index()
    {
        return $this->render('linkedin/index.html.twig', [
            'controller_name' => 'LinkedinController',
        ]);
    }
}
