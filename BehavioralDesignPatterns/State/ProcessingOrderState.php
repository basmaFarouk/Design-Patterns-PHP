<?php
namespace BehavioralDesignPatterns\State;

class ProcessingOrderState implements OrderState {
    private $orderManagement;

    public function __construct($orderManagement) {
        $this->orderManagement = $orderManagement;
    }

    public function processOrder($orderManagement) {
        echo "The order is currently being processed!" . PHP_EOL;
    }

    public function shipOrder($orderManagement) {
        echo "Shipping the order..." . PHP_EOL;
        $orderManagement->changeState(new ShippedOrderState($orderManagement));
    }

    public function deliverOrder($orderManagement) {
        echo "The order cannot be delivered at the current state" . PHP_EOL;
    }

    public function cancelOrder($orderManagement) {
        echo "The order is being cancelled now..." . PHP_EOL;
        $orderManagement->changeState(new CancelledOrderState($orderManagement));
    }
}