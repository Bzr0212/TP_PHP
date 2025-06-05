<?php

class TacheVue {
    public function afficherTaches($taches) {
        echo "<h1>Ma To-Do List</h1>";
        echo "<ul>";
        foreach ($taches as $tache) {
            echo "<li>
                <strong>{$tache['nom']}</strong> - {$tache['description']}
                <a href='?action=supprimer&id={$tache['id']}' style='color:red;'>[Supprimer]</a>
            </li>";
        }
        echo "</ul>";
    }

    public function afficherFormulaire() {
        echo '
        <form method="POST" action="">
            <input type="text" name="nom" placeholder="Nom de la tâche" required>
            <input type="text" name="description" placeholder="Description" required>
            <button type="submit" name="ajouter">Ajouter</button>
        </form>
        ';
    }
}
