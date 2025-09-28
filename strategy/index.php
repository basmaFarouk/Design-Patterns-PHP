<?php
namespace strategy;

$regularProduct = new Product("Laptop", 1000.00, new RegularPricingStrategy()); //client
$premiumProduct = new Product("Smartphone", 800.00, new PremiumPricingStrategy());

echo "Regular product price: " . $regularProduct->calculatePrice() . "\n"; // 1000.00
echo "Premium product price: " . $premiumProduct->calculatePrice() . "\n"; // 640.00 (20% discount)

$visaCheckout = new Checkout(new VisaCardPaymentStrategy());
$paypalCheckout = new Checkout(new PaypalPaymentStrategy());

$visaCheckout->processPayment($regularProduct->calculatePrice());
$paypalCheckout->processPayment($premiumProduct->calculatePrice());