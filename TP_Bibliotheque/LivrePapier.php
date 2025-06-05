<?php

require_once 'Livre.php';

class LivrePapier extends Livre {
    private $nombrePages;
    private $emprunte = false;

    public function __construct($titre, $auteur, $anneePublication, $nombrePages) {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->nombrePages = $nombrePages;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "Nombre de pages : {$this->nombrePages}\n";
        echo "Statut : " . ($this->emprunte ? "Déjà emprunté" : "Dispo") . "\n";
    }

    public function emprunter() {
        if ($this->emprunte) {
            echo "Ce livre papier est déjà emprunté.\n";
        } else {
            $this->emprunte = true;
            echo "Livre papier emprunté avec succès.\n";
        }
    }
}
