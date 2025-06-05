<?php
namespace App\Interfaces;

interface Billable {
    public function calculateCost(): float;
}
