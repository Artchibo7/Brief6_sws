<?php

use src\Controllers\HomeController;
use src\Repositories\UserRepository;
use src\Services\Routing;

require_once 'autoload.php';

$userRepository = new UserRepository();
$homeController = new HomeController($userRepository);

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];
$routeComposee = Routing::routeComposee($route);


switch ($route) {
    case HOME_URL:
        if ($methode == 'POST') {
            $homeController->auth();
        } else {
            $homeController->index();
        }
        break;

    case HOME_URL . 'dashboard':
        if (isset($_SESSION['connecté'])) {
            $homeController->showDashboard();
            echo "salut";
        }
        break;

    case HOME_URL . 'deconnexion':
        $homeController->quit();
        break;

    default:
        $homeController->page404();
        break;
}

