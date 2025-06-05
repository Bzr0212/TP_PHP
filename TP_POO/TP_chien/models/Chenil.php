<?php
require_once 'Chien.php';
require_once 'ChienDeChasse.php';

class Chenil {
    private array $chiens = [];

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['chiens'])) {
            $_SESSION['chiens'] = [];
        }
        $this->chiens = &$_SESSION['chiens'];
    }

    public function ajouterChien(Chien $chien): void {
        $this->chiens[] = $chien;
    }

    public function getChiens(): array {
        return $this->chiens;
    }

    public function getChien(int $index): ?Chien {
        return $this->chiens[$index] ?? null;
    }

    public function supprimerChien(int $index): void {
        unset($this->chiens[$index]);
        $this->chiens = array_values($this->chiens);
    }

    public function modifierChien(int $index, Chien $chien): void {
        $this->chiens[$index] = $chien;
    }

    public function rechercherParNom(string $nom): array {
        return array_filter($this->chiens, fn($c) => stripos($c->getNom(), $nom) !== false);
    }
}
