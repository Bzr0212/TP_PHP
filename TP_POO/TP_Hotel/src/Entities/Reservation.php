<?php
namespace App\Entities;

use DateTime;
use App\Interfaces\Payable;
use App\Exceptions\ChambreIndisponibleException;

class Reservation implements Payable {
    private int $id;
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateDebut;
    private DateTime $dateFin;
    private bool $estPayee = false;

    public function __construct(int $id, Client $client, Chambre $chambre, DateTime $dateDebut, DateTime $dateFin) {
        if (!$chambre->estDisponible()) {
            throw new ChambreIndisponibleException("La chambre {$chambre->getNumero()} n’est pas disponible.");
        }

        $this->id = $id;
        $this->client = $client;
        $this->chambre = $chambre;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $chambre->marquerIndisponible();
    }

    public function payer(): void {
        $this->estPayee = true;
    }

    public function getDuree(): int {
        return $this->dateDebut->diff($this->dateFin)->days;
    }

    public function calculerMontant(): float {
        return $this->getDuree() * $this->chambre->getPrixParNuit();
    }

    public function getClient(): Client {
        return $this->client;
    }

    public function getChambre(): Chambre {
        return $this->chambre;
    }
}
