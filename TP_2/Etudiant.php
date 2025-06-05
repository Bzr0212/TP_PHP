<?php

class Etudiant {
    private $nom;
    private $prenom;
    private $notes = [];

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function ajouterNote($note) {
        if (is_numeric($note) && $note >= 0 && $note <= 20) {
            $this->notes[] = $note;
        } else {
            echo "Note invalide (doit être entre 0 et 20).\n";
        }
    }

    public function getNotes() {
        return $this->notes;
    }

    public function calculerMoyenne() {
        if (count($this->notes) === 0) {
            return 0;
        }
        return array_sum($this->notes) / count($this->notes);
    }

    public function afficherInformations() {
        echo "Nom : {$this->nom}\n";
        echo "Prénom : {$this->prenom}\n";
        echo "Notes : " . implode(", ", $this->notes) . "\n";
        echo "Moyenne : " . number_format($this->calculerMoyenne(), 2) . "\n";
        echo "---------------------------\n";
    }

    public function getNomComplet() {
        return "{$this->prenom} {$this->nom}";
    }
}
