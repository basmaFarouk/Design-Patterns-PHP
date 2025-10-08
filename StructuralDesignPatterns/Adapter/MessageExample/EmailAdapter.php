<?php 

namespace StructuralDesignPatterns\Adapter\MessageExample;

class EmailAdapter implements MessageSender {
    private $emailService;

    public function __construct(CustomEmailService $emailService) {
        $this->emailService = $emailService;
    }

    public function send(string $recipient, string $message): bool {
        // Adapt to email service by providing a default subject
        return $this->emailService->dispatchEmail($recipient, "Notification", $message);
    }
}