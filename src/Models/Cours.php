<?php

namespace src\Models;

class Cours{

    public $coursID;
    public $nomCours;
    public $heureDebut;
    public $heureFin;
    public $promotionID;

    public function __construct($coursID, $nomCours, $heureDebut, $heureFin, $promotionID){
        $this->coursID = $coursID;
        $this->nomCours = $nomCours;
        $this->heureDebut = $heureDebut;
        $this->heureFin = $heureFin;
        $this->promotionID = $promotionID;
    }

    public function getCoursID(): int
    {
        return $this->coursID;
    }

    public function getNomCours(): string
    {
        return $this->nomCours;
    }

    public function getHeureDebut(): string
    {
        return $this->heureDebut;
    }

    public function getHeureFin(): string
    {
        return $this->heureFin;
    }

    public function getPromotionID(): int
    {
        return $this->promotionID;
    }
}