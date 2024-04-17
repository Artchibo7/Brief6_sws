<?php

namespace src\Repositories;

use src\Models\Database;

class PromotionRepository {

    public function create($promotionId, $nomPromotion, $dateDebut, $dateFin, $placeDisponilbe) {
        try {
            $database = new Database();

            $query = $database->getDb()->prepare('
                INSERT INTO promotion (promotionId, nomPromotion, dateDebut, dateFin, placeDisponilbe) 
                VALUES (:id, :nomPromotion, :dateDebut, :dateFin, :placeDisponilbe)
            ');

            $query->execute([
                'promotionId' => $promotionId,
                'nomPromotion' => $nomPromotion,
                'dateDebut' => $dateDebut,
                'dateFin' => $dateFin,
                'placeDisponilbe' => $placeDisponilbe
            ]);
        } catch (\PDOException $e) {
            echo "Une erreur de base de données est survenue : " . $e->getMessage();
        }
    }

}