<?php
namespace App\Entities;

class Client {
    private int $id;
    private string $nom;
    private string $email;

    public function __construct(int $id, string $nom, string $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getEmail(): string {
        return $this->email;
    }
}
