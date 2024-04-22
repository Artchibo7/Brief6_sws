<?php

namespace src\Controllers;

use src\Repositories\UserRepository;
use src\Repositories\PromotionRepository;

class HomeController {

  // use Reponse;

  public function index(): void {

    include_once __DIR__ . "/../Views/connexion.php";
  }

  public function auth() {

    $request = file_get_contents('php://input');

    if ($request) {
      $decodedRequest = json_decode($request);

      if ($decodedRequest) {
        $email = htmlspecialchars($decodedRequest->email);
        $password = htmlspecialchars($decodedRequest->password);
        if ($email === 'formateur@mail.fr' && $password === 'admin') {
          $_SESSION['connected'] = true;
          $_SESSION['role'] = 'formateur';

          var_dump($_SESSION['role']);

          include_once __DIR__ . '/../Views/dashboard.php';
        } else {
          exit();
        }
      }
    }
  }

  public function showDashboard() {
    include_once __DIR__ . '/../Views/dashboard.php';
  }

  public function quit() {
    session_destroy();
    $_SESSION["connecté"] = false;
    include_once __DIR__ . "/../Views/connexion.php";
  }

  public function page404(): void {
    header("HTTP/1.1 404 Not Found");
    include_once __DIR__ . "/../Views/404.php";
  }
}
