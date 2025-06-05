<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Entities\Client;
use App\Entities\Chambre;
use App\Entities\Reservation;
use App\Exceptions\ChambreIndisponibleException;

$client1 = new Client(1, "Alice Dupont", "alice@mail.com");
$client2 = new Client(2, "goerge Martin", "goerge@mail.com");

$chambre101 = new Chambre(1, 101, "simple", 80.0);
$chambre102 = new Chambre(2, 102, "double", 120.0);

try {
    $reservation1 = new Reservation(1, $client1, $chambre101, new DateTime("2025-06-10"), new DateTime("2025-06-15"));
    $reservation2 = new Reservation(2, $client2, $chambre102, new DateTime("2025-06-12"), new DateTime("2025-06-14"));

    echo "Client : " . $reservation1->getClient()->getNom() . "\n";
    echo "Chambre : " . $reservation1->getChambre()->getNumero() . "\n";
    echo "Montant total : " . $reservation1->calculerMontant() . " €\n";

    echo "\nClient : " . $reservation2->getClient()->getNom() . "\n";
    echo "Chambre : " . $reservation2->getChambre()->getNumero() . "\n";
    echo "Montant total : " . $reservation2->calculerMontant() . " €\n";

} catch (ChambreIndisponibleException $e) {
    echo "Erreur : " . $e->getMessage();
}
