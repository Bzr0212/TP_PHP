<?php

require_once 'LivresPapier.php';
require_once 'Ebooks.php';

$livresPapier = new LivresPapier("Le Petit Prince", "Antoine de Saint-Exupéry", 1943, 96);
$ebooks = new Ebooks("Clean Code", "Robert C. Martin", 2008, "EPUB");

echo "=== Livre Papier ===\n";
$livresPapier->afficherDetails();

echo "\n=== eBook ===\n";
$ebooks->afficherDetails();

echo "\nTentative emprunt livre papier :\n";
$livresPapier->emprunter();
$livresPapier->emprunter(); 

echo "\nTentative emprunt eBook :\n";
$ebooks->emprunter();
$ebooks->emprunter();
