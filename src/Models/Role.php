<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class Role{

    private $roleID;
    private $nomRole;

    use Hydratation;

    public function getRoleID(): int
    {
        return $this->roleID;
    }
    public function setRoleID(int $roleID)
    {
        $this->roleID = $roleID;
    }

    public function getNomRole(): string
    {
        return $this->nomRole;
    }
    public function setNomRole(string $nomRole)
    {
        $this->nomRole = $nomRole;
    }
}