<?php
namespace observer;

class Offer {
    private string $message;

    public function __construct(string $message) {
        $this->message = $message;
    }

    public function getMessage(): string {
        return $this->message;
    }
}