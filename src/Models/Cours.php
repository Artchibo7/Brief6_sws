<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class Cours
{
    private $coursID;
    private $nomCours;
    private $heureDebut;
    private $heureFin;
    private $promotionID;

    use Hydratation;

    public function getCoursID(): int
    {
        return $this->coursID;
    }
    public function setCoursID(int $coursID)
    {
        $this->coursID = $coursID;
    }

    public function getNomCours(): string
    {
        return $this->nomCours;
    }
    public function setNomCours(string $nomCours)
    {
        $this->nomCours = $nomCours;
    }

    public function getHeureDebut(): DateTime
    {
        return $this->heureDebut;
    }
    public function setHeureDebut(DateTime $heureDebut)
    {
        $this->heureDebut = $heureDebut;
    }

    public function getHeureFin(): DateTime
    {
        return $this->heureFin;
    }
    public function setHeureFin(DateTime $heureFin)
    {
        $this->heureFin = $heureFin;
    }

    public function getPromotionID(): int
    {
        return $this->promotionID;
    }
    public function setPromotionID(int $promotionID)
    {
        $this->promotionID = $promotionID;
    }

}