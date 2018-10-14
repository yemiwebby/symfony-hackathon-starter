<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class GithubController
 * @package App\Controller
 */
class GithubController extends AbstractController
{
    /**
     * @Route("/github", name="github")
     */
    public function index()
    {
        return $this->render('api/github/index.html.twig', [
            'controller_name' => 'GithubController',
        ]);
    }
}
