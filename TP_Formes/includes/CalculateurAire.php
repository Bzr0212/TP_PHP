<?php

class CalculateurAire {
    public function calculerAireTotale(array $formes) {
        $total = 0;
        foreach ($formes as $forme) {
            $total += $forme->calculerAire();
        }
        return $total;
    }
}
