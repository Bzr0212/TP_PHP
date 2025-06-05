<?php
namespace App\Entities;

use DateTime;

class Project {
    private int $id;
    private string $name;
    private string $clientName;
    private DateTime $startDate;
    private ?DateTime $endDate;
    private array $tasks = [];

    public function __construct(int $id, string $name, string $clientName, DateTime $startDate, ?DateTime $endDate = null) {
        $this->id = $id;
        $this->name = $name;
        $this->clientName = $clientName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function addTask(Task $task): void {
        $this->tasks[] = $task;
    }

    public function getProgress(): float {
        $total = count($this->tasks);
        if ($total === 0) return 0.0;
        $completed = count(array_filter($this->tasks, fn($task) => $task->isCompleted()));
        return ($completed / $total) * 100;
    }
}
