<?php

namespace src\Controllers;

use src\Repositories\PromotionRepository;
use src\Services\Reponse;

class PromoController
{

use Reponse;

  public function createPromotion()
  {
    $request = file_get_contents('php://input');

    if ($request) {
      $decodedRequest = json_decode($request);

      if ($decodedRequest) {
        $promotionNom = htmlspecialchars($decodedRequest->promotionNom);
        $dateDebut = htmlspecialchars($decodedRequest->dateDebut);
        $dateFin = htmlspecialchars($decodedRequest->dateFin);
        $placeDisponible = htmlspecialchars($decodedRequest->placeDisponible);

        $promoRepository = new PromotionRepository();
        $promoRepository->insertPromotion($promotionNom, $dateDebut, $dateFin, $placeDisponible);

        $promotions = $promoRepository->getAllPromotions();

        include_once __DIR__ . '/../Views/Includes/ToutesLesPromotions.php';

      }
    }
  }
  public function deleteThisPromo()
  {
    $request = file_get_contents('php://input');

    if ($request) {
      $decodedRequest = json_decode($request);

      if ($decodedRequest) {
        $idThisPromo = htmlspecialchars($decodedRequest->idThisPromo);

        $promoRepository = new PromotionRepository();
        $promoRepository->deletePromotion($idThisPromo);
        $promotions = $promoRepository->getAllPromotions();
        include_once __DIR__ . '/../Views/Includes/ToutesLesPromotions.php';


      }
    } else {
      echo "Invalid request";
    }
  }
}
