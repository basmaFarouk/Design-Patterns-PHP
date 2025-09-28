<?php  
namespace State;

// OrderManagement (Context)
class OrderManagement {
    private $order;
    private $orderState;

    public function __construct($order) {
        $this->order = $order;
        $this->orderState = new NewOrderState($this);
    }

    public function changeState($changedOrderState) {
        $this->orderState = $changedOrderState;
    }

    public function processOrder() {
        $this->orderState->processOrder($this);
    }

    public function shipOrder() {
        $this->orderState->shipOrder($this);
    }

    public function deliverOrder() {
        $this->orderState->deliverOrder($this);
    }

    public function cancelOrder() {
        $this->orderState->cancelOrder($this);
    }

    public function getOrder() {
        return $this->order;
    }
}