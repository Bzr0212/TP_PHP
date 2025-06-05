<?php

require_once 'PaiementCB.php';
require_once 'PaiementPaypal.php';
require_once 'PaiementVirement.php';

$paiements = [
    new PaiementCB(49.99),
    new PaiementPaypal(120.50),
    new PaiementVirement(300.00),
    new PaiementCB(15.00),
    new PaiementPaypal(9.99)
];

foreach ($paiements as $paiement) {
    $paiement->afficherMontant();
    $paiement->effectuerPaiement();
    echo "---------------------------\n";
}
