<?php

namespace src\Controllers;

use src\Models\User;
use src\Models\Database;
use src\Services\Reponse;


class UserController
{
    public function user()
    {
        Reponse::render('user');
    }
}

