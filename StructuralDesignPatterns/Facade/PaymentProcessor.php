<?php 

namespace StructuralDesignPatterns\Facade;

// PaymentProcessor class
class PaymentProcessor {
    public function processPayment(float $amount, PaymentMethod $paymentMethod): void {
        echo "Processing the overall payment with amount: $amount using: " . $paymentMethod->getType() . PHP_EOL;
    }
}