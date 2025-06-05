<?php

require_once 'Vehicule.php';

class Camion extends Vehicule {
    private $poidsMax;
    private $chargeActuelle;

    public function __construct($marque, $modele, $annee, $kilometrage, $poidsMax) {
        parent::__construct($marque, $modele, $annee, $kilometrage);
        $this->poidsMax = $poidsMax;
        $this->chargeActuelle = 0;
    }

    public function afficherInfos() {
        parent::afficherInfos();
        echo "Poids max : {$this->poidsMax} kg\n";
        echo "Charge actuelle : {$this->chargeActuelle} kg\n";
    }

    public function charger($poids) {
        if ($this->chargeActuelle + $poids > $this->poidsMax) {
            echo "Impossible de charger {$poids} kg : dépassement de capacité \n";
        } else {
            $this->chargeActuelle += $poids;
            echo "Chargement réussi. Nouvelle charge : {$this->chargeActuelle} kg\n";
        }
    }
}
