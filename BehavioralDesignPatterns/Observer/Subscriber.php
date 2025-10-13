<?php
namespace BehavioralDesignPatterns\Observer;

interface Subscriber {
    public function notify(string $message): void;
}