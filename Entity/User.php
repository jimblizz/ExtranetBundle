<?php
namespace JimBlizz\ExtranetBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface {

    protected $id;

    protected $key;

    protected $email;

    protected $enabled;

    protected $salt;

    protected $passwordHash;

    protected $roles;

    public function __construct()
    {
        $this->roles = array();
    }

    public function getUsername() : string
    {
        return $this->getEmail();
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getPassword() : string
    {
        return $this->passwordHash;
    }

    public function getSalt() : string
    {
        return $this->salt;
    }

    public function getRoles() : array
    {
        return $this->roles;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}