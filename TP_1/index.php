<?php

require_once 'Produit.php';

$produit1 = new Produit("T-shirt", 20);
$produit2 = new Produit("Jeans", 45);
$produit3 = new Produit("Chaussures", 60);

$produit1->ajouterAuPanier(2);
$produit2->ajouterAuPanier(1);
$produit3->ajouterAuPanier(3);

$panier = [$produit1, $produit2, $produit3];

echo "=== Contenu du panier ===\n";
$total = 0;

foreach ($panier as $produit) {
    $produit->afficherProduit();
    $total += $produit->getPrixTotal();
}

echo "--------------------------\n";
echo "Total du panier : " . number_format($total, 2) . " €\n";
