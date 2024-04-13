<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    #[Route(path: '/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @return Response
     */
    #[Route(path: '/account', name: 'account')]
    public function accountPage(): Response
    {
        return $this->render('user/account.html.twig');
    }

    /**
     * @return Response
     */
    #[Route(path: '/contact', name: 'contact')]
    public function contactPage(): Response
    {
        return $this->render('contact.html.twig');
    }

}
