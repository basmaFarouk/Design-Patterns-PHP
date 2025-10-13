<?php
namespace BehavioralDesignPatterns\Strategy;

interface PaymentStrategy {
    public function processPayment(float $amount): void;
}
