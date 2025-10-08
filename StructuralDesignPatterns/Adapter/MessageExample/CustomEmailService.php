<?php  

namespace StructuralDesignPatterns\Adapter\MessageExample;

// Adaptee: Custom email service
class CustomEmailService {
    public function dispatchEmail(string $to, string $subject, string $body): bool {
        echo "Sending email to $to with subject '$subject': $body\n";
        return true;
    }
}