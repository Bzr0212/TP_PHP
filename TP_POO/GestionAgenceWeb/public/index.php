<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Entities\Developer;
use App\Entities\Project;
use App\Entities\DevelopmentTask;
use App\Entities\DesignTask;

// Créer des développeurs
$dev1 = new Developer(1, "Alice", ["PHP", "Symfony"]);
$dev2 = new Developer(2, "george", ["JS", "UX"]);

// Créer des projets
$project1 = new Project(1, "Site vitrine", "Client A", new DateTime("2025-06-01"));
$project2 = new Project(2, "E-commerce", "Client B", new DateTime("2025-06-01"));

// Créer des tâches
$task1 = new DevelopmentTask(1, "Backend API", $dev1, 20);
$task2 = new DevelopmentTask(2, "Frontend", $dev2, 15);
$task3 = new DesignTask(3, "UI Design", $dev2, "Figma");

// Assigner les tâches
$project1->addTask($task1);
$project1->addTask($task3);
$project2->addTask($task2);

// Terminer quelques tâches
$task1->completeTask();
$task3->completeTask();

echo "Progression projet 1 : " . $project1->getProgress() . "%\n";
echo "Coût de la tâche Backend : " . $task1->calculateCost() . "€\n";
echo "Tâches en cours pour goerge : " . $dev2->getWorkload() . "\n";

// a mette dans le terminal : composer dump-autoload et php public/index.php
