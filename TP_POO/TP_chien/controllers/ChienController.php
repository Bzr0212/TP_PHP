<?php
require_once __DIR__ . '/../models/Chenil.php';

class ChienController {
    private Chenil $chenil;

    public function __construct() {
        $this->chenil = new Chenil();
    }

    public function listeChiens(): void {
        $chiens = $this->chenil->getChiens();
        require __DIR__ . '/../views/listeChiensView.php';
    }

    public function afficherChien(int $index): void {
        $chien = $this->chenil->getChien($index);
        require __DIR__ . '/../views/chienView.php';
    }

    public function ajouterChien(array $data): void {
        $chien = new Chien(
            $data['nom'], (int)$data['age'], $data['race'],
            $data['couleur'], $data['sexe'], (float)$data['poids']
        );
        $this->chenil->ajouterChien($chien);
        header('Location: index.php');
        exit;
    }

    public function supprimerChien(int $index): void {
        $this->chenil->supprimerChien($index);
        header('Location: index.php');
        exit;
    }

    public function rechercher(string $nom): void {
        $chiens = $this->chenil->rechercherParNom($nom);
        require __DIR__ . '/../views/listeChiensView.php';
    }
}
