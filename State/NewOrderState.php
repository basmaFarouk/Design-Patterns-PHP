<?php
namespace State;

class NewOrderState implements OrderState {
    private $orderManagement;

    public function __construct($orderManagement) {
        $this->orderManagement = $orderManagement;
    }

    public function processOrder($orderManagement) {
        echo "Order: " . $orderManagement->getOrder()->getName() . " is being processed now..." . PHP_EOL;
        $orderManagement->changeState(new ProcessingOrderState($orderManagement));
    }

    public function shipOrder($orderManagement) {
        echo "Cannot ship the order: " . $orderManagement->getOrder()->getName() . " at the current state..." . PHP_EOL;
    }

    public function deliverOrder($orderManagement) {
        echo "Cannot deliver the order: " . $orderManagement->getOrder()->getName() . " at the current state..." . PHP_EOL;
    }

    public function cancelOrder($orderManagement) {
        echo "Cancelling order: " . $orderManagement->getOrder()->getName() . PHP_EOL;
        $orderManagement->changeState(new CancelledOrderState($orderManagement));
    }
}