<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des Chiens</title>
</head>
<body>
    <h1>liste chiens</h1>

    <form method="GET">
        <input type="text" name="recherche" placeholder="Rechercher un nom">
        <button type="submit">Rechercher</button>
    </form>

    <ul>
        <?php foreach ($chiens as $index => $chien): ?>
            <li>
                <?= $chien->getDetails() ?> —
                <a href="?action=details&index=<?= $index ?>">Voir</a> |
                <a href="?action=supprimer&index=<?= $index ?>" onclick="return confirm('Supprimer ce chien ?')">supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>➕ Ajouter un nouveau chien</h2>
    <form method="POST">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="number" name="age" placeholder="Âge" required>
        <input type="text" name="race" placeholder="Race" required>
        <input type="text" name="couleur" placeholder="Couleur" required>
        <select name="sexe">
            <option value="Mâle">Mâle</option>
            <option value="Femelle">Femelle</option>
        </select>
        <input type="number" step="0.1" name="poids" placeholder="Poids (kg)" required>
        <button type="submit">Ajouter chien</button>
    </form>
</body>
</html>
