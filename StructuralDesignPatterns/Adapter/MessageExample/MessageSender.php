<?php 

namespace StructuralDesignPatterns\Adapter\MessageExample;

interface MessageSender {
    public function send(string $recipient, string $message): bool;
}