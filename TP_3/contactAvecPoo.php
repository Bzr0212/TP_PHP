<?php

require_once 'Contact.php';

$contact1 = new Contact("Dupont", "Alice", "alice@example.com");
$contact2 = new Contact("Martin", "Bob", "bob@example.com");

$listeContacts = [$contact1, $contact2];

echo "=== Liste des contacts (avec POO) ===\n";
foreach ($listeContacts as $contact) {
    echo "Nom : " . $contact->getNom() . "\n";
    echo "Prénom : " . $contact->getPrenom() . "\n";
    echo "Email : " . $contact->getEmail() . "\n";
    echo "-----------------------------\n";
}
