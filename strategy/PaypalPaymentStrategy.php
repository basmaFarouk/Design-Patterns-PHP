<?php
namespace strategy;

class PaypalPaymentStrategy implements PaymentStrategy {
    public function processPayment(float $amount): void {
        echo "Processing payment of paypal...\n";
        echo "Calculating fees of the amount {$amount} for paypal...\n";
    }
}