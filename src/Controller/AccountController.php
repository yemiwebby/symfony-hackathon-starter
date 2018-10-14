<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 14/10/2018
 * Time: 4:40 AM
 */

namespace App\Controller;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $userRepository;

    /**
     * AccountController constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $entityManager->getRepository('App:User');
    }

    /**
     * @Route("/update/profile", name="profile_update")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateAccount(Request $request)
    {
        $user = $this->userRepository->find($this->getUser()->getId());

        $this->updateUser($request, $user);

        $this->addFlash('notice', 'Your account has been updated successfully');
        return $this->redirectToRoute('account');
    }

    /**
     * @Route("/account/delete", name="delete_account")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAccount(Request $request)
    {
        $user = $this->userRepository->find($this->getUser()->getId());
        $this->removeObject($user);

        $session = new Session();
        $session->clear();

        return $this->redirect('/');
    }

    function updateUser(Request $request, User $user) {

        $user->setEmail($request->get('email'));
        $user->setFirstName($request->get('first_name'));
        $user->setLastName($request->get('last_name'));
        $user->setLocation($request->get('location'));
        $user->setWebsite($request->get('website'));
        $this->persistObject($user);

    }

    function persistObject($object) {
        $this->entityManager->persist($object);
        $this->entityManager->flush();
    }

    function removeObject($object) {
        $this->entityManager->remove($object);
        $this->entityManager->flush();
    }
}