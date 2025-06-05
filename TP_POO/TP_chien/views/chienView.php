<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Détails chien</title>
</head>
<body>
    <h1>detail u chien</h1>
    <?php if ($chien): ?>
        <p><strong>Nom :</strong> <?= $chien->getNom() ?></p>
        <p><?= $chien->getDetails() ?></p>
        <p><strong>Âge humain :</strong> <?= $chien->ageHumain() ?> ans</p>
        <p><strong>Aboiement :</strong> <?= $chien->crier() ?></p>
        <p><strong>Surpoids ?</strong> <?= $chien->estEnSurpoids() ? "Oui" : "Non" ?></p>
    <?php else: ?>
        <p>introuvalble</p>
    <?php endif; ?>

    <a href="index.php">Retour</a>
</body>
</html>
