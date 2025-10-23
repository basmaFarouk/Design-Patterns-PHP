<?php 

namespace StructuralDesignPatterns\Facade;

use Exception;

// PaymentMethodFactory class
class PaymentMethodFactory {
    public function createPaymentMethodOf(string $paymentMethod): PaymentMethod {
        if (strcasecmp($paymentMethod, PaymentMethodOptions::VISA) === 0) {
            return new VisaCard();
        }
        if (strcasecmp($paymentMethod, PaymentMethodOptions::MASTER_CARD) === 0) {
            return new MasterCard();
        }
        if (strcasecmp($paymentMethod, PaymentMethodOptions::PAYPAL) === 0) {
            return new Paypal();
        }
        throw new Exception("Card type is not supported");
    }
}