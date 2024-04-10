<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email', 'username'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column(nullable: true)]
    private ?string $password = null;

    #[ORM\Column(nullable: true)]
    private ?string $username;

    #[ORM\Column(nullable: true)]
    private ?string $firstName;

    #[ORM\Column(nullable: true)]
    private ?string $lastName;

    #[ORM\Column(nullable: true)]
    private ?string $phoneNumber;

    #[ORM\Column(nullable: true)]
    private ?string $location;

    #[ORM\Column(nullable: true)]
    private ?string $website;

    #[ORM\Column(nullable: true)]
    private ?string $providerId;

    public function getId()
    : ?int {

        return $this->id;
    }

    public function setEmail(string $email)
    : static {

        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier()
    : string {

        if (!is_null($this->username)) {
            return $this->username;
        }

        return (string)$this->email;
    }

    /**
     * @return list<string>
     * @see UserInterface
     *
     */
    public function getRoles()
    : array {

        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles)
    : static {

        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    : void {

        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword()
    : string {

        return $this->password;
    }

    public function setPassword(string $password)
    : static {

        $this->password = $password;

        return $this;
    }
}
