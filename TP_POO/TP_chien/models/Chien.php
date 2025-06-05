<?php
require_once 'Animal.php';

class Chien implements Animal {
    private string $nom;
    private int $age;
    private string $race;
    private string $couleur;
    private string $sexe;
    private float $poids;

    public function __construct($nom, $age, $race, $couleur, $sexe, $poids) {
        $this->nom = $nom;
        $this->age = $age;
        $this->race = $race;
        $this->couleur = $couleur;
        $this->sexe = $sexe;
        $this->poids = $poids;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getDetails(): string {
        return "{$this->nom}, {$this->age} ans, {$this->race}, {$this->couleur}, {$this->sexe}, {$this->poids} kg";
    }

    public function ageHumain(): int {
        return $this->age * 7;
    }

    public function aboyer(): string {
        return "Wouf Je suis {$this->nom} ";
    }

    public function estEnSurpoids(): bool {
        return $this->poids > 20;
    }

    public function crier(): string {
        return $this->aboyer();
    }
}
