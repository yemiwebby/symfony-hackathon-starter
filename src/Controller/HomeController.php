<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/account", name="account")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function accountPage()
    {
        return $this->render('user/account.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactPage()
    {
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/api", name="api")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function apiPage()
    {
        return $this->render('home/api.html.twig');
    }
}
