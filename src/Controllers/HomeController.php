<?php

namespace src\Controllers;

use src\Services\Reponse;

class HomeController {

    use Reponse;

    public function idex(): void {
        if (isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);
        } else {
            $erreur = '';
        }
        $this->render('accueil', ['erreur' => $erreur]);
    }

    public function connexion(): void {
        if (isset($_GET['erreur'])) {
            $erreur = htmlspecialchars($_GET['erreur']);
        } else {
            $erreur = '';
        }
        $this->render('connexion', ['erreur' => $erreur]);
    }

    public function indexAdmin(): void {
        $erreur = isset($_GET['erreur']) ? htmlspecialchars($_GET['erreur']) : 'error';
}
