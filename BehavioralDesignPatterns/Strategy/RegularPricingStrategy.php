<?php
namespace BehavioralDesignPatterns\Strategy;

class RegularPricingStrategy implements PricingStrategy {
    public function calculatePrice(float $price): float {
        return $price;
    }
}