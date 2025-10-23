<?php 

namespace StructuralDesignPatterns\Facade;

// VisaCard class implementing PaymentMethod
class VisaCard implements PaymentMethod {
    public function getType(): string {
        return "Visa";
    }
}