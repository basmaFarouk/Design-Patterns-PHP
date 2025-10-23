<?php 

namespace StructuralDesignPatterns\Facade;

// Enum-like class for PaymentMethodOptions (PHP doesn't have native enums until 8.1, so using a class)
class PaymentMethodOptions {
    const VISA = 'VISA';
    const MASTER_CARD = 'MASTER_CARD';
    const PAYPAL = 'PAYPAL';
}