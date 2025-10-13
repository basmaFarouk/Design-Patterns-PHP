<?php
namespace BehavioralDesignPatterns\Strategy;

interface PricingStrategy {
    public function calculatePrice(float $price): float;
}