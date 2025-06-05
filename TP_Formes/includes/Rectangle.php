<?php

require_once 'FormeGeometrique.php';

class Rectangle extends FormeGeometrique {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerAire() {
        return $this->longueur * $this->largeur;
    }
}
