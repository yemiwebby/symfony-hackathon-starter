<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 08/10/2018
 * Time: 6:16 AM
 */

namespace App\Security;


use App\Entity\User;
use FOS\UserBundle\Model\UserManagerInterface;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider;

class MyFOSUBProvider extends FOSUBUserProvider
{
    private $doctrine;

    public function __construct(UserManagerInterface $userManager, array $properties, $doctrine)
    {
        parent::__construct($userManager, $properties);

        $this->doctrine = $doctrine;
    }

    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $username = $response->getUsername();

        $user = $this->userManager->findUserBy(array($this->getProperty($response) => $username));

        $email = $response->getEmail();
        // check if we already have this user
        $existing = $this->userManager->findUserBy(array('email' => $email));
        if ($existing instanceof User) {

            $existing->setProviderId($username);
            $this->userManager->updateUser($existing);

            return $existing;
        }

        // if we don't know the user, create it
        if (null === $user || null === $username) {
            /** @var User $user */
            $user = $this->userManager->createUser();
            $nick = $this->getUsernameForUser($response->getRealName());

            $user->setLastLogin(new \DateTime());
            $user->setEnabled(true);
            $user->setUsername($nick);
            $user->setUsernameCanonical($nick);
            $user->setPassword(sha1(uniqid()));
            $user->addRole('ROLE_USER');
            $user->setProviderId($username);
        }

        $user->setEmail($response->getEmail());
        $user->setName($response->getRealName());
        $this->userManager->updateUser($user);

        return $user;
    }

    function getUsernameForUser($name)
    {
        $arr = explode(' ',trim($name));
        return $arr[0].rand(5, 150);
    }
}