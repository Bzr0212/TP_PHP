<?php
session_start();
require_once 'TacheController.php';
require_once 'TacheVue.php';

$controller = new TacheController();
$vue = new TacheVue();

// Actions
if (isset($_POST['ajouter'])) {
    $controller->ajouterTache($_POST['nom'], $_POST['description']);
    header('Location: index.php'); // pour éviter le resubmit
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'supprimer' && isset($_GET['id'])) {
    $controller->supprimerTache($_GET['id']);
    header('Location: index.php');
    exit;
}

// Affichage
$vue->afficherFormulaire();
$vue->afficherTaches($controller->getTaches());
