<?php
namespace observer;

class Customer implements Subscriber {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function notify(string $message): void {
        echo "Notifying user: {$this->name} about: {$message}\n";
    }
}