<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaypalController extends AbstractController
{
    /**
     * @Route("/paypal", name="paypal")
     */
    public function index()
    {
        return $this->render('paypal/index.html.twig', [
            'controller_name' => 'PaypalController',
        ]);
    }
}
