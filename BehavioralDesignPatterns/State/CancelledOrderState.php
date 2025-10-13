<?php
namespace BehavioralDesignPatterns\State;

class CancelledOrderState implements OrderState {
    private $orderManagement;

    public function __construct($orderManagement) {
        $this->orderManagement = $orderManagement;
    }

    public function processOrder($orderManagement) {
        echo "Cannot process the order at the current state..." . PHP_EOL;
    }

    public function shipOrder($orderManagement) {
        echo "Cannot ship the order at the current state..." . PHP_EOL;
    }

    public function deliverOrder($orderManagement) {
        echo "Cannot deliver the order at the current state..." . PHP_EOL;
    }

    public function cancelOrder($orderManagement) {
        echo "Order is already cancelled!" . PHP_EOL;
    }
}