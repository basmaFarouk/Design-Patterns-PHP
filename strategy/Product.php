<?php
namespace strategy;

class Product {
    private string $name;
    private float $price;
    private PricingStrategy $pricingStrategy;

    public function __construct(string $name, float $price, PricingStrategy $pricingStrategy) {
        $this->name = $name;
        $this->price = $price;
        $this->pricingStrategy = $pricingStrategy;
    }

    public function calculatePrice(): float {
        return $this->pricingStrategy->calculatePrice($this->price);
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }
}