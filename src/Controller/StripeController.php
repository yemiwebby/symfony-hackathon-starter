<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 * Class StripeController
 * @package App\Controller
 */
class StripeController extends AbstractController
{
    /**
     * @Route("/stripe", name="stripe")
     */
    public function index()
    {
        return $this->render('api/stripe/index.html.twig', [
            'controller_name' => 'StripeController',
        ]);
    }
}
