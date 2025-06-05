<?php

require_once 'Livre.php';

class Ebook extends Livre {
    private $format;
    private $emprunte = false;

    public function __construct($titre, $auteur, $anneePublication, $format) {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->format = $format;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "Format de l'eBook : {$this->format}\n";
        echo "Statut : " . ($this->emprunte ? "Déjà emprunter" : "Dispo") . "\n";
    }

    public function emprunter() {
        if ($this->emprunte) {
            echo "Cet eBook est déjà emprunté.\n";
        } else {
            $this->emprunte = true;
            echo "eBook emprunté.\n";
        }
    }
}
