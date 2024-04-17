<?php

namespace src\Controllers;

use src\Repositories\UserRepository;
use src\Services\Reponse;

class HomeController {

  use Reponse;

  private $userRepository;

  public function __construct(UserRepository $userRepository) {
    $this->userRepository = $userRepository;
  }

  public function index(): void {
    $erreur = $_GET['erreur'] ?? '';
    $this->render("accueil", ["erreur" => $erreur]);
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
          // var_dump($_SESSION['connecté']);

          include_once __DIR__ . '/../Views/dashboard.php';
          
        } else {
          exit();
        }
  }
}
}

public function showDashboard(){
  include_once __DIR__ . '/../Views/dashboard.php';
}

  public function quit() {
    session_destroy();
    header('location: ' . HOME_URL);
    die();
  }

  public function page404(): void {
    header("HTTP/1.1 404 Not Found");
    $this->render('404');
  }
}


