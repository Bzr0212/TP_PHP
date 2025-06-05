<?php

class CompteBancaire {
    private $solde;
    private $titulaire;

    public function __construct($titulaire, $soldeInitial = 0) {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
    }

    public function depot($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "depot de {$montant} € effectué\n";
        } else {
            echo "le montant du depot doit être positif\n";
        }
    }

    public function retrait($montant) {
        if ($montant > 0) {
            if ($montant <= $this->solde) {
                $this->solde -= $montant;
                echo "retrait de {$montant} € effectué\n";
            } else {
                echo "solde insuffisant pour un retrait de {$montant} €.\n";
            }
        } else {
            echo "le montant du retrait doit être positif\n";
        }
    }

    public function afficherSolde() {
        echo "solde actuel : " . number_format($this->solde, 2) . " €\n";
    }

    public function getTitulaire() {
        return $this->titulaire;
    }

    public function calculerInterets($tauxAnnuel) {
        if ($tauxAnnuel > 0) {
            $interets = $this->solde * ($tauxAnnuel / 100);
            echo "intérêt à " . $tauxAnnuel . "% : " . number_format($interets, 2) . " €\n";
        } else {
            echo "e taux d'intérêt doit être positif.\n";
        }
    }
}
