<?php 

namespace StructuralDesignPatterns\Facade;

// MasterCard class implementing PaymentMethod
class MasterCard implements PaymentMethod {
    public function getType(): string {
        return "MasterCard";
    }
}