<?php
session_start();

class TacheController {
    public function __construct() {
        if (!isset($_SESSION['taches'])) {
            $_SESSION['taches'] = [];
        }
    }

    public function ajouterTache($nom, $description) {
        $id = uniqid();
        $_SESSION['taches'][$id] = [
            'id' => $id,
            'nom' => htmlspecialchars($nom),
            'description' => htmlspecialchars($description)
        ];
    }

    public function getTaches() {
        return $_SESSION['taches'];
    }

    public function supprimerTache($id) {
        if (isset($_SESSION['taches'][$id])) {
            unset($_SESSION['taches'][$id]);
        }
    }
}
