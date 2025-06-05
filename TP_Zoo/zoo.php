<?php

require_once 'Chien.php';
require_once 'Chat.php';
require_once 'Oiseau.php';

$animaux = [
    new Chien("Rex", 4, "Labrador"),
    new Chien("Bella", 2, "Berger Belge"),
    new Chat("Minette", 3, "Noir"),
    new Chat("Grisou", 5, "Gris tigré"),
    new Oiseau("Coco", 1, "Perruche"),
    new Oiseau("Titi", 2, "Canari"),
    new Chien("Max", 6, "Golden Retriever"),
    new Chat("Luna", 1, "Blanche"),
    new Oiseau("Zazu", 3, "Toucan")
];

foreach ($animaux as $animal) {
    echo $animal->decrire() . "\n";
    echo "Cri : " . $animal->crier() . "\n";
    echo "---------------------------\n";
}
