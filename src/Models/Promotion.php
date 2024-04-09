<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class Promotion
{
    private $promotionID;
    private $dateDebut;
    private $dateFin;
    private $placeDisponible;

    use Hydratation;

    public function getPromotionID(): int
    {
        return $this->promotionID;
    }
    public function setPromotionID(int $promotionID)
    {
        $this->promotionID = $promotionID;
    }

    public function getDateDebut(): DateTime
    {
        return $this->dateDebut;
    }
    public function setDateDebut(DateTime $dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin(): DateTime
    {
        return $this->dateFin;
    }
    public function setDateFin(DateTime $dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function getPlaceDisponible(): int
    {
        return $this->placeDisponible;
    }
    public function setPlaceDisponible(int $placeDisponible)
    {
        $this->placeDisponible = $placeDisponible;
    }

}