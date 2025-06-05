<?php
require_once '../controllers/ChienController.php';

$controller = new ChienController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->ajouterChien($_POST);
}

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'details':
            $controller->afficherChien((int)$_GET['index']);
            break;
        case 'supprimer':
            $controller->supprimerChien((int)$_GET['index']);
            break;
        case 'rechercher':
        case (isset($_GET['recherche']) && $_GET['recherche'] !== ''):
            $controller->rechercher($_GET['recherche']);
            break;
        default:
            $controller->listeChiens();
    }
} else {
    $controller->listeChiens();
}
