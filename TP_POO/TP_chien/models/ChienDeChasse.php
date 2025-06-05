<?php
require_once 'Chien.php';

class ChienDeChasse extends Chien {
    public function crier(): string {
        return "WOUUUAF je suis un chien de chasse";
    }
}
