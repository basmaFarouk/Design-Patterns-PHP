<?php
namespace strategy;

class PremiumPricingStrategy implements PricingStrategy {
    public function calculatePrice(float $price): float {
        return $price * 0.8; // 20% discount
    }
}