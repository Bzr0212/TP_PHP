<?php

require_once 'Etudiant.php';
require_once 'Classe.php';

$classe = new Classe();

$etudiant1 = new Etudiant("Lebron", "James");
$etudiant2 = new Etudiant("Mbappe", "Kyllian");
$etudiant3 = new Etudiant("Guinet", "Emma");

$etudiant1->ajouterNote(15);
$etudiant1->ajouterNote(18);
$etudiant1->ajouterNote(12);

$etudiant2->ajouterNote(10);
$etudiant2->ajouterNote(14);

$etudiant3->ajouterNote(17);
$etudiant3->ajouterNote(19);
$etudiant3->ajouterNote(16);
$etudiant3->ajouterNote(18);

$classe->ajouterEtudiant($etudiant1);
$classe->ajouterEtudiant($etudiant2);
$classe->ajouterEtudiant($etudiant3);

$classe->afficherEtudiants();
// $classe->supprimerEtudiant("James Lebron");
