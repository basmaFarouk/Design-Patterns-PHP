<?php
namespace BehavioralDesignPatterns\Observer;

class ShippingCompany implements Subscriber {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function notify(string $message): void {
        echo "{$this->name} is receiving notification about: {$message}\n";
    }
}