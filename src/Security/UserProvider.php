<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthAwareUserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface as TUser;
use Symfony\Component\Security\Core\User\UserProviderInterface;

readonly class UserProvider implements UserProviderInterface, OAuthAwareUserProviderInterface {

    public function __construct(
        private UserRepository $userRepository,
    ) {
    }

    public function refreshUser(TUser $user)
    : TUser {
        throw new \Exception('We\'re lost at the moment');
        // TODO: Implement refreshUser() method.
    }

    public function supportsClass(string $class)
    : bool {

        return User::class === $class || is_subclass_of($class, User::class);
    }

    public function loadUserByIdentifier(string $identifier)
    : TUser {

        return $this->userRepository->loadUserByIdentifier($identifier);
    }

    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    : void {

        throw new \Exception('We\'re lost at the moment');
        //        $userName = $response->getUsername();
        //        if (!is_null($userName)){
        //
        //        }
    }
}