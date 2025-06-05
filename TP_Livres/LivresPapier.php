<?php

require_once 'Livres.php';

class LivresPapier extends Livres {
    private $nombrePages;
    private $emprunte = false;

    public function __construct($titre, $auteur, $anneePublication, $nombrePages) {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->nombrePages = $nombrePages;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "Nombre de pages : {$this->nombrePages}\n";
        echo "Statut : " . ($this->emprunte ? "Déjà pris" : "Dispo") . "\n";
    }

    public function emprunter() {
        if ($this->emprunte) {
            echo "Ce livre papier est déjà pris\n";
        } else {
            $this->emprunte = true;
            echo "Livre papier emprunté avec succès\n";
        }
    }
}
