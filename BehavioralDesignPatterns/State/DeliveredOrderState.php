<?php
namespace BehavioralDesignPatterns\State;

class DeliveredOrderState implements OrderState {
    private $orderManagement;

    public function __construct($orderManagement) {
        $this->orderManagement = $orderManagement;
    }

    public function processOrder($orderManagement) {
        echo "Order cannot be processed because it's already delivered" . PHP_EOL;
    }

    public function shipOrder($orderManagement) {
        echo "Order cannot be shipped because it's already delivered" . PHP_EOL;
    }

    public function deliverOrder($orderManagement) {
        echo "Order is already delivered!" . PHP_EOL;
    }

    public function cancelOrder($orderManagement) {
        echo "Order cannot be cancelled because it's already delivered" . PHP_EOL;
    }
}