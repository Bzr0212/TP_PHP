<?php

require_once 'Livres.php';

class Ebooks extends Livres {
    private $format;
    private $emprunte = false;

    public function __construct($titre, $auteur, $anneePublication, $format) {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->format = $format;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo "Format de l'eBook : {$this->format}\n";
        echo "Statut : " . ($this->emprunte ? "Déjà pris" : "Dispo"). "\n";
    }

    public function emprunter() {
        if ($this->emprunte) {
            echo "Cet eBook est deja pris\n";
        } else {
            $this->emprunte = true;
            echo "eBook emprunté avec succès\n";
        }
    }
}
