<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'includes/Cercle.php';
require_once 'includes/Rectangle.php';
require_once 'includes/Triangle.php';
require_once 'includes/Carre.php';
require_once 'includes/Losange.php';
require_once 'includes/CalculateurAire.php';

$formes = [];
$resultats = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
    $type = $_POST['forme'];
    $dimensions = $_POST;

    switch ($type) {
        case 'cercle':
            $forme = new Cercle($dimensions['rayon']);
            
            break;
        case 'rectangle':
            $forme = new Rectangle($dimensions['longueur'], $dimensions['largeur']);
            break;
        case 'triangle':
            $forme = new Triangle($dimensions['a'], $dimensions['b'], $dimensions['c']);
            break;
        case 'carre':
            $forme = new Carre($dimensions['cote']);
            break;
        case 'losange':
            $forme = new Losange($dimensions['d1'], $dimensions['d2']);
            break;
        default:
            $forme = null;
    }

    if ($forme) {
        $formes[] = $forme;
        $resultats[] = [
            'type' => ucfirst($type),
            'aire' => number_format($forme->calculerAire(), 2)
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculateur d'Aires</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f5f5f5; }
        h1 { color: #333; }
        label { display: block; margin-top: 10px; }
        input, select, button { padding: 5px; margin-top: 5px; }
        .form-section { background: white; padding: 20px; border-radius: 8px; max-width: 400px; }
        table { margin-top: 30px; border-collapse: collapse; width: 100%; max-width: 500px; }
        th, td { border: 1px solid #aaa; padding: 10px; text-align: center; }
    </style>
    <script>
        function afficherChamps() {
            const type = document.getElementById('forme').value;
            document.querySelectorAll('.dimensions').forEach(el => {
                el.style.display = 'none';
                el.querySelectorAll('input').forEach(input => input.disabled = true);
            });
            document.querySelectorAll('.dim-' + type).forEach(el => {
                el.style.display = 'block';
                el.querySelectorAll('input').forEach(input => input.disabled = false);
            });
        }
    </script>
</head>
<body>
    <h1>Calculateur d'Aires</h1>

    <form method="post" class="form-section">
        <label for="forme">Choisir une forme :</label>
        <select name="forme" id="forme" onchange="afficherChamps()" required>
            <option value="">-- Sélectionner --</option>
            <option value="cercle">Cercle</option>
            <option value="rectangle">Rectangle</option>
            <option value="triangle">Triangle</option>
            <option value="carre">Carré</option>
            <option value="losange">Losange</option>
        </select>

        <div class="dimensions dim-cercle" style="display:none">
            <label>Rayon : <input type="number" name="rayon" step="any" required></label>
        </div>

        <div class="dimensions dim-rectangle" style="display:none">
            <label>Longueur : <input type="number" name="longueur" step="any" required></label>
            <label>Largeur : <input type="number" name="largeur" step="any" required></label>
        </div>

        <div class="dimensions dim-triangle" style="display:none">
            <label>Côté A : <input type="number" name="a" step="any" required></label>
            <label>Côté B : <input type="number" name="b" step="any" required></label>
            <label>Côté C : <input type="number" name="c" step="any" required></label>
        </div>

        <div class="dimensions dim-carre" style="display:none">
            <label>Côté : <input type="number" name="cote" step="any" required></label>
        </div>

        <div class="dimensions dim-losange" style="display:none">
            <label>Diagonale 1 : <input type="number" name="d1" step="any" required></label>
            <label>Diagonale 2 : <input type="number" name="d2" step="any" required></label>
        </div>

        <br>
        <button type="submit">Calculer l'aire</button>
    </form>

    <?php if (!empty($resultats)) : ?>
        <h2>Résultat :</h2>
        <table>
            <thead>
                <tr>
                    <th>Forme</th>
                    <th>Aire (m²)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultats as $res) : ?>
                    <tr>
                        <td><?= $res['type'] ?></td>
                        <td><?= $res['aire'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <script>afficherChamps();</script>
</body>
</html>
