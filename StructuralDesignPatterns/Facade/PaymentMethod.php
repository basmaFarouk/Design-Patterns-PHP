<?php 

namespace StructuralDesignPatterns\Facade;

// Defining the PaymentMethod interface
interface PaymentMethod {
    public function getType(): string;
}