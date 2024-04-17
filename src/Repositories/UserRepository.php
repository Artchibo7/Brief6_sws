<?php

namespace src\Repositories;

use src\Models\Database;

class UserRepository {

    public function create($userId, $fistname, $lastname, $password, $email, $activation, $roleId) {
        try {
            $database = new Database();

            $query = $database->getDb()->prepare('
                INSERT INTO utilisateur (userId, firstname, lastname, password, email, activation, roleId) 
                VALUES (:userId, :firstname, :lastname, :password, :email, :activation, :roleId)
            ');

            $query->execute([
                'userId' => $userId,
                'firstname' => $fistname,
                'lastname' => $lastname,
                'password' => $password,
                'email' => $email,
                'activation' => $activation,
                'roleId' => $roleId
            ]);
        } catch (\PDOException $e) {
            echo "Une erreur de base de données est survenue : " . $e->getMessage();
        }
    }

}
