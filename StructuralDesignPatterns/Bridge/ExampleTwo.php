<?php 

namespace StructuralDesignPatterns\Bridge;

// Implementor: Interface for delivery channels
interface Channel {
    public function deliver(string $message): string;
}

// Concrete Implementor: Email delivery channel
class EmailChannel implements Channel {
    public function deliver(string $message): string {
        return "Delivering via Email: $message";
    }
}

// Concrete Implementor: SMS delivery channel
class SMSChannel implements Channel {
    public function deliver(string $message): string {
        return "Delivering via SMS: $message";
    }
}

// Concrete Implementor: Push notification delivery channel
class PushChannel implements Channel {
    public function deliver(string $message): string {
        return "Delivering via Push Notification: $message";
    }
}

// Abstraction: Notification base class
abstract class Notification {
    protected Channel $channel;

    public function __construct(Channel $channel) {
        $this->channel = $channel;
    }

    abstract public function send(string $message): string;
}

// Refined Abstraction: PlainText notification
class PlainTextNotification extends Notification {
    public function send(string $message): string {
        $formattedMessage = "Plain Text Message: $message";
        return $this->channel->deliver($formattedMessage);
    }
}

// Refined Abstraction: HTML notification
class HTMLNotification extends Notification {
    public function send(string $message): string {
        $formattedMessage = "<html><body><p>$message</p></body></html>";
        return $this->channel->deliver($formattedMessage);
    }
}

// Example Usage
// Create channels
$emailChannel = new EmailChannel();
$smsChannel = new SMSChannel();
$pushChannel = new PushChannel();

// Create notifications with different formats and channels
$plainTextEmail = new PlainTextNotification($emailChannel);
$plainTextSMS = new PlainTextNotification($smsChannel);
$htmlPush = new HTMLNotification($pushChannel);

// Send notifications
echo $plainTextEmail->send("Hello, this is a test!") . "\n";
echo $plainTextSMS->send("Hello, this is a test!") . "\n";
echo $htmlPush->send("Hello, this is a test!") . "\n";

