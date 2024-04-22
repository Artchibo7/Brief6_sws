<?php

namespace src\Repositories;

use PDO;
use PDOException;
use src\Models\Promotion;
use src\Models\Database;

class PromoRepository
{


    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.php';
    }


    public function insertPromo($nomPromotion, $dateDebut, $dateFin, $placeDisponible)
    {

        $database = new Database();

        $query = $database->getDB()->prepare('
            INSERT INTO ' . PREFIXE . 'Promotion (NomPromotion, Date_Debut, Date_Fin, Place_Disponible) 
            VALUES (:nomPromotion, :dateDebut, :dateFin, :placeDisponible )
        ');

        $query->execute([
            'promoNom' => $nomPromotion,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin,
            'placeDispo' => $placeDisponible,
        ]);
    }


    public function getAllPromotions()
    {
        try {
            $query = $this->DB->query('SELECT * FROM ' . PREFIXE . 'Promotion');
            $promotions = $query->fetchAll(PDO::FETCH_ASSOC);

            $promoObjects = [];
            foreach ($promotions as $promotion) {
                $promo = new Promotion();
                $promo->ID_Promotion = $promotion['ID_Promotion'];
                $promo->NomPromotion = $promotion['Nom'];
                $promo->dateDebut = $promotion['Date_Debut'];
                $promo->dateFin = $promotion['Date_Fin'];
                $promo->placeDisponible = $promotion['Place_Disponible'];
                $promoObjects[] = $promo;
            }

            return $promoObjects;
        } catch (PDOException $e) {
            return [];
        }
    }


    public function getThisPromo(): array
    {
        $promoData = array();
    
        $requestPayload = json_decode(file_get_contents('php://input'));
    
        if ($requestPayload && isset($requestPayload->idThisPromo)) {
            $idThisPromo = htmlspecialchars($requestPayload->idThisPromo);
    
            $query = $this->DB->prepare('SELECT * FROM '. PREFIXE .'Promotion WHERE promotionID = :idThisPromo');
    
            $query->bindParam(':idThisPromo', $idThisPromo, PDO::PARAM_INT);
    
            $query->execute();
    
            $promo = $query->fetch(PDO::FETCH_ASSOC);
            
            if ($promo) {
                $promoData['promotionID'] = $promo['promotionID'];
                $promoData['promotionNom'] = $promo['promotionNom'];
                $promoData['DateDebut'] = $promo['DateDebut'];
                $promoData['DateFin'] = $promo['DateFin'];
                $promoData['PlaceDisponible'] = $promo['PlaceDisponible'];
            }
        }
    
        return $promoData;
    }
  

public function deletePromotion($idThisPromo)
{
    $database = new Database();

    $query = $database->getDB()->prepare('
        DELETE FROM ' . PREFIXE . 'Promotion WHERE promotionID = :promotionID
    ');

    $query->execute(['promotionID' => $idThisPromo]);
}





}
