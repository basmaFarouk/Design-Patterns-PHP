<?php
namespace observer;

interface Subscriber {
    public function notify(string $message): void;
}