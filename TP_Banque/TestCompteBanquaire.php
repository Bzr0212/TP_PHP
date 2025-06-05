<?php

require_once 'CompteBancaire.php';

$compte = new CompteBancaire("Alice Dupont", 500);

echo "Titulaire du compte : " . $compte->getTitulaire() . "\n";

$compte->afficherSolde();

$compte->depot(200);

$compte->retrait(100);

$compte->retrait(1000);

$compte->depot(-50);

$compte->afficherSolde();

$compte->calculerInterets(2.5); // Exemple de taux 2.5%
