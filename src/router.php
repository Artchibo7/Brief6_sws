<?php

require_once __DIR__ . '/../vendor/autoload.php';

use src\Router;
use src\Controllers\HomeController;
use src\Controllers\UserController;
use src\Controllers\PromotionController;
use src\Controllers\RoleController;
use src\Controllers\CoursController;
use src\Services\Routing;

$router = new Router();
$router->get('/', [HomeController::class, 'home']);
$router->get('/user', [UserController::class, 'user']);
$router->get('/promotion', [PromotionController::class, 'promotion']);
$router->get('/role', [RoleController::class, 'role']);
$router->get('/cours', [CoursController::class, 'cours']);
$router->run();

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$routeComposee = Routing::routeComposee($route);

if (isset($routeComposee)) {
    $controller = $routeComposee[0];
    $method = $routeComposee[1];
    $controller::$method();
}

switch ($route) {
    case HOME_URL:
        if (isset($_SESSION['connecté'])) {
            header('location: ' . HOME_URL . 'dashboard');
            die;
        }
        if ($method === 'POST') {
            $UtilisateurController->traitementUtilisateur();
        } else {
            $HomeController->index();
        }
        break;

    case HOME_URL . 'admin':
        if (isset($_SESSION['connecté'])) {
            header('location: /dashboard');
            die;
        } else {
            if ($method === 'POST') {
                $HomeController->authAdmin($_POST['motDePasseAdmin']);
            } else {
                $HomeController->indexAdmin();
            }
        }
        break;

    case HOME_URL . 'connexion':
        if (isset($_SESSION['connecté'])) {
            header('location: /dashboard');
            die;
        } else {
            if ($method === 'POST') {
                $UtilisateurController->connexionUtilisateur();
                die;
            } else {
                $HomeController->indexConnexion();
            }
        }
        break;

    case HOME_URL . "createReservation":
        if ($method === 'POST') {
            $ReservationController->stockerLaReservation();
            $PassController->stockerLePass();
            $NuiteeController->stockerLaNuitee();
            $OptionsController->stockerLesOptions();
            $Reservation_passController->stockerLeJour();  
            // Redirection après traitement du POST
            header("Location: " . HOME_URL . "dashboard");
            exit;
        } else {
            $UtilisateurController->createReservation();
        }
        break;

    case HOME_URL . 'dashboard':
        $UtilisateurController->showDashboard();
        break;

    case HOME_URL . 'deconnexion':
        $HomeController->quit();
        break;

    case $routeComposee[0] == "dashboard":
        if (isset($_SESSION["connecté"])) {
            switch ($routeComposee[1]) {
                case "compte":
                    if ($method === "POST") {
                        $UtilisateurController->supprimerUtilisateur();
                        // $utilisateurID = $_SESSION['utilisateur'];
                    }
                    if (isset($_SESSION["connecté"])) {
                        $UtilisateurController->afficherCompte();
                    }
                    break;
                case "reservation":
                    $UtilisateurController->afficherReservation();
                    break;
                case 'deconnexion':
                    $HomeController->quit();
                    break;
                default:
                    if (isset($_SESSION["connecté"])) {
                        $UtilisateurController->showDashboard();
                    }
                    break;
            }
        } else {
            header("location: " . HOME_URL);
            die;
        }
        break;

    default:
        $HomeController->page404();
        break;
}
?>