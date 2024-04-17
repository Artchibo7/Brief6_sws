<?php

namespace src\Controllers;

require_once __DIR__ . '/../Repositories/UserRepository.php';

use src\Repositories\UserRepository;

class UserController{

    public function create(){
        $userRepository = new UserRepository(); // Créer une instance de UserRepository
        
        $request = file_get_contents('php://input');
        if($request){
            $decodedRequest = json_decode($request);
            if($decodedRequest){

                $data = [
                    'nom' => htmlspecialchars($decodedRequest->nom),
                    'prenom' => htmlspecialchars($decodedRequest->prenom),
                    'email' => htmlspecialchars($decodedRequest->email)
                ];
            
                $hashedMail = password_hash($data['email'], PASSWORD_DEFAULT);
                
                $userRepository->create($data);

                $this->sendMail($data['email'], 'Confirmation de votre inscription', 'Merci pour votre inscription.');

                include_once __DIR__ . '/../Views/API/Homepage.php';
            }
        }
    }

    private function sendMail($to, $subject, $message) {
        // Utiliser la fonction mail() de PHP pour envoyer l'e-mail
        // Notez que cette méthode ne fonctionnera que si votre serveur est configuré pour envoyer des e-mails
        mail($to, $subject, $message);
    }

}