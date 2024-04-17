<?php

namespace src\Models;

class Promotion{

    private $promotionID;
    private $nomPromotion;
    private $dateDebut;
    private $dateFin;
    private $placeDisponilbe;

    public function getPromotionID(): int
    {
        return $this->promotionID;
    }

    public function getNomPromotion(): string
    {
        return $this->nomPromotion;
    }
    public function setNomPromotion(string $nomPromotion)
    {
        $this->nomPromotion = $nomPromotion;
    }

    public function getDateDebut(): string
    {
        return $this->dateDebut;
    }
    public function setDateDebut(string $dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin(): string
    {
        return $this->dateFin;
    }
    public function setDateFin(string $dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function getPlaceDisponilbe(): int
    {
        return $this->placeDisponilbe;
    }
    public function setPlaceDisponilbe(int $placeDisponilbe)
    {
        $this->placeDisponilbe = $placeDisponilbe;
    }
}