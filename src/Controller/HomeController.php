<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path: '/home', name: 'home')]
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[Route(path: '/account', name: 'account')]
    public function accountPage(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('user/account.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[Route(path: '/contact', name: 'contact')]
    public function contactPage(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('contact.html.twig');
    }

}
