<?php

class Produit {
    private $nom;
    private $prix;
    private $quantite;

    public function __construct($nom, $prix) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = 0; 
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getQuantite() {
        return $this->quantite;
    }

    public function ajouterAuPanier($quantite) {
        if ($quantite > 0) {
            $this->quantite += $quantite;
        }
    }

    public function afficherProduit() {
        echo "Produit : {$this->nom} | Prix unitaire : {$this->prix} € | Quantité : {$this->quantite}\n";
    }

    public function getPrixTotal() {
        return $this->prix * $this->quantite;
    }
}
