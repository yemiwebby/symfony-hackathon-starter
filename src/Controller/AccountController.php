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
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $userRepository;

    /**
     * AccountController constructor.
     */
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
        $this->userRepository = $this->entityManager->getRepository('App:User');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[Route(path: '/update/profile', name: 'profile_update')]
    public function updateAccount(Request $request): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $user = $this->userRepository->find($this->getUser()->getId());

        $this->updateUser($request, $user);

        $this->addFlash('notice', 'Your account has been updated successfully');
        return $this->redirectToRoute('account');
    }

    /**
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     */
    #[Route(path: '/account/password', name: 'change_password')]
    public function changePassword(Request $request, UserPasswordEncoderInterface $encoder): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $user = $this->userRepository->find($this->getUser()->getId());
        $encoded = $encoder->encodePassword($user, $request->get('password'));

        $user->setPassword($encoded);
        $this->persistObject($user);

        $this->addFlash('password', 'Your password has been changed successfully');
        return $this->redirectToRoute('account');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    #[Route(path: '/account/delete', name: 'delete_account')]
    public function deleteAccount(): \Symfony\Component\HttpFoundation\RedirectResponse
    {
        $user = $this->userRepository->find($this->getUser()->getId());
        $this->removeObject($user);
        $session = new Session();
        $session->clear();
        return $this->redirect('/');
    }

    /**
     * Update users' profile
     */
    public function updateUser(Request $request, User $user): void
    {

        $user->setEmail($request->get('email'));
        $user->setFirstName($request->get('first_name'));
        $user->setLastName($request->get('last_name'));
        $user->setLocation($request->get('location'));
        $user->setWebsite($request->get('website'));
        $this->persistObject($user);
    }

    /**
     * Update the database
     * @param $object
     */
    public function persistObject($object): void
    {
        $this->entityManager->persist($object);
        $this->entityManager->flush();
    }

    /**
     * Delete object from the database
     * @param $object
     */
    public function removeObject($object): void
    {
        $this->entityManager->remove($object);
        $this->entityManager->flush();
    }
}