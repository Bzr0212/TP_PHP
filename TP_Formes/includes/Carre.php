<?php

require_once 'FormeGeometrique.php';

class Carre extends FormeGeometrique {
    private $cote;

    public function __construct($cote) {
        $this->cote = $cote;
    }

    public function calculerAire() {
        return $this->cote * $this->cote;
    }
}
