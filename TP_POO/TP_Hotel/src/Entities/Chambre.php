<?php
namespace App\Entities;

class Chambre {
    private int $id;
    private int $numero;
    private string $type;
    private float $prixParNuit;
    private bool $estDisponible;

    public function __construct(int $id, int $numero, string $type, float $prixParNuit) {
        $this->id = $id;
        $this->numero = $numero;
        $this->type = $type;
        $this->prixParNuit = $prixParNuit;
        $this->estDisponible = true;
    }

    public function estDisponible(): bool {
        return $this->estDisponible;
    }

    public function marquerIndisponible(): void {
        $this->estDisponible = false;
    }

    public function marquerDisponible(): void {
        $this->estDisponible = true;
    }

    public function getPrixParNuit(): float {
        return $this->prixParNuit;
    }

    public function getNumero(): int {
        return $this->numero;
    }
}
