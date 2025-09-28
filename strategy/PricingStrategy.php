<?php
namespace strategy;

interface PricingStrategy {
    public function calculatePrice(float $price): float;
}