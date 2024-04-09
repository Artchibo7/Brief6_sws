<?php

require_once __DIR__ . './Views/autoload.php';

use src\Controllers\HomeController;
use src\Controllers\UserController;
use src\Services\Routing;

$route = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$routeComposee = Routing::routeComposee($route);

switch($route){
    case HOME_URL:
        $HomeController = new HomeController;
        $HomeController->index();
        break;
    case HOME_URL . 'utilisateurs':
        $UserController = new UserController;
        $UserController->index();
        break;
    default:
        include_once __DIR__ . './../public/assets/js/script.js';
        die;
}
