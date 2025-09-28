<?php
namespace State;

class ShippedOrderState implements OrderState {
    private $orderManagement;

    public function __construct($orderManagement) {
        $this->orderManagement = $orderManagement;
    }

    public function processOrder($orderManagement) {
        echo "Cannot process the order at the current state" . PHP_EOL;
    }

    public function shipOrder($orderManagement) {
        echo "The order is currently being shipped!" . PHP_EOL;
    }

    public function deliverOrder($orderManagement) {
        echo "Delivering order now..." . PHP_EOL;
        $orderManagement->changeState(new DeliveredOrderState($orderManagement));
    }

    public function cancelOrder($orderManagement) {
        echo "Cannot cancel the order at the current state" . PHP_EOL;
    }
}