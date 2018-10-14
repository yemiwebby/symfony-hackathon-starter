<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 14/10/2018
 * Time: 6:21 AM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact/submit", name="submit_contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function submitForm(Request $request, \Swift_Mailer $mailer)
    {
        $name = $request->get('name');
        $email = $request->get('email');

        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('yemiwebby@gmail.com')
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig',
                    array('name' => $name)
                ),
                'text/html'
            )
        ;
        $mailer->send($message);

        $this->addFlash('notice', 'Form submitted successfully');
        return $this->redirectToRoute('contact');
    }

}