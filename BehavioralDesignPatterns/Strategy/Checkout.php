<?php
namespace BehavioralDesignPatterns\Strategy;

class Checkout {
    private PaymentStrategy $paymentStrategy;

    public function __construct(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function processPayment(float $amount): void {
        $this->paymentStrategy->processPayment($amount);
    }
}