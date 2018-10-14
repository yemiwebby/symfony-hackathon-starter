<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GithubController extends AbstractController
{
    /**
     * @Route("/github", name="github")
     */
    public function index()
    {
        return $this->render('github/index.html.twig', [
            'controller_name' => 'GithubController',
        ]);
    }
}
