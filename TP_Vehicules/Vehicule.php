<?php

class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    protected $kilometrage;
    protected $dernierEntretien;

    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
    }

    public function afficherInfos() {
        echo "Marque : {$this->marque}\n";
        echo "Modèle : {$this->modele}\n";
        echo "Année : {$this->annee}\n";
        echo "Kilométrage : {$this->kilometrage} km\n";
        echo "Dernier entretien : " . ($this->dernierEntretien ?? "Non programmé") . "\n";
    }

    public function programmerEntretien($date) {
        $this->dernierEntretien = $date;
    }

    public function afficherProchainEntretien() {
        echo "Prochain entretien prévu après 10 000 km ou 1 an suivant le {$this->dernierEntretien}.\n";
    }
}
