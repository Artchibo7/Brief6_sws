<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class User
{
    private $userID;
    private  $firstname;
    private $lastname;
    private $password;
    private $activation;
    private $email;
    private $role;

    use Hydratation;

    public function getUserID(): int
    {
        return $this->userID;
    }
    public function setUserID(int $userID)
    {
        $this->userID = $userID;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getActivation(): string
    {
        return $this->activation;
    }
    public function setActivation(string $activation)
    {
        $this->activation = $activation;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getRole(): string
    {
        return $this->role;
    }
    public function setRole(string $role)
    {
        $this->role = $role;
    }
}