<?php

require_once 'FormeGeometrique.php';

class Losange extends FormeGeometrique {
    private $diagonale1;
    private $diagonale2;

    public function __construct($d1, $d2) {
        $this->diagonale1 = $d1;
        $this->diagonale2 = $d2;
    }

    public function calculerAire() {
        return ($this->diagonale1 * $this->diagonale2) / 2;
    }
}
