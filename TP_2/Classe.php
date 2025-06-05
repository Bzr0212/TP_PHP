<?php

require_once 'Etudiant.php';

class Classe {
    private $etudiants = [];

    public function ajouterEtudiant(Etudiant $etudiant) {
        $this->etudiants[] = $etudiant;
    }

    public function supprimerEtudiant($nomComplet) {
        foreach ($this->etudiants as $index => $etudiant) {
            if ($etudiant->getNomComplet() === $nomComplet) {
                unset($this->etudiants[$index]);
                echo "Étudiant \"$nomComplet\" supprimé\n";
                return;
            }
        }
        echo "Étudiant \"$nomComplet\" introuvable\n";
    }

    public function afficherEtudiants() {
        echo "=== Liste des étudiants ===\n";
        foreach ($this->etudiants as $etudiant) {
            $etudiant->afficherInformations();
        }
    }
}
