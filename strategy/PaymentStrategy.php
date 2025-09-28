<?php
namespace strategy;

interface PaymentStrategy {
    public function processPayment(float $amount): void;
}
