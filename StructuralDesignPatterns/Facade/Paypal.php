<?php 

namespace StructuralDesignPatterns\Facade;

// Paypal class implementing PaymentMethod
class Paypal implements PaymentMethod {
    public function getType(): string {
        return "Paypal";
    }
}

