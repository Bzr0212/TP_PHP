<?php

$contact1 = [
    "nom" => "Lebron",
    "prenom" => "James",
    "email" => "james.lebron@example.com"
];

$contact2 = [
    "nom" => "Trump",
    "prenom" => "Donald",
    "email" => "donald.trump@example.com"
];

$listeContacts = [$contact1, $contact2];

echo "=== Liste des contacts (sans POO) ===\n";
foreach ($listeContacts as $contact) {
    echo "Nom : " . $contact["nom"] . "\n";
    echo "Prénom : " . $contact["prenom"] . "\n";
    echo "Email : " . $contact["email"] . "\n";
    echo "-----------------------------\n";
}
