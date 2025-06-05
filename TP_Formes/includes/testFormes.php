<?php

require_once 'Cercle.php';
require_once 'Rectangle.php';
require_once 'Triangle.php';
require_once 'Carre.php';
require_once 'Losange.php';
require_once 'CalculateurAire.php';

$formes = [
    new Cercle(3),
    new Rectangle(5, 4),
    new Triangle(3, 4, 5),
    new Carre(6),
    new Losange(5, 8)
];

echo "Aires individuelles des formes :\n\n";
foreach ($formes as $forme) {
    $classe = get_class($forme);
    $aire = number_format($forme->calculerAire(), 2);
    echo "- $classe : $aire m²\n";
}

$calculateur = new CalculateurAire();
$total = $calculateur->calculerAireTotale($formes);

echo "\nAire totale : " . number_format($total, 2) . " m²\n";
