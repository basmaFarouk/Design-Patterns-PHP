<?php
namespace BehavioralDesignPatterns\State;

interface OrderState {
    public function processOrder($orderManagement);
    public function shipOrder($orderManagement);
    public function deliverOrder($orderManagement);
    public function cancelOrder($orderManagement);
}