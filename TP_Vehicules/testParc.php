<?php

require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Camion.php';

echo "=== VOITURE ===\n";
$voiture = new Voiture("Peugeot", "208", 2020, 45000, 5);
$voiture->afficherInfos();
$voiture->programmerEntretien("10/04/2024");
$voiture->afficherProchainEntretien();

echo "\n=== MOTO ===\n";
$moto = new Moto("Dugatti", "MT-07", 2021, 18000, 689);
$moto->afficherInfos();
$moto->programmerEntretien("05/03/2024");
$moto->afficherProchainEntretien();

echo "\n=== CAMION ===\n";
$camion = new Camion("Renault", "T High", 2019, 120000, 20000);
$camion->afficherInfos();
$camion->programmerEntretien("01/02/2024");
$camion->afficherProchainEntretien();

echo "\nChargement du camion :\n";
$camion->charger(5000);
$camion->charger(10000);
$camion->charger(6000); 
