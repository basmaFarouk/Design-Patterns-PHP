<?php
namespace BehavioralDesignPatterns\Strategy;

class VisaCardPaymentStrategy implements PaymentStrategy {
    public function processPayment(float $amount): void {
        echo "Processing payment of visa cards...\n";
        echo "Calculating fees of the amount {$amount} for visa cards...\n";
    }
}
