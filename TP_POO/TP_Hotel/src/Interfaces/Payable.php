<?php
namespace App\Interfaces;

interface Payable {
    public function calculerMontant(): float;
}
