<?php
namespace StructuralDesignPatterns\Adapter\MessageExample;


// Include all necessary classes (use autoloader in a real project)
require_once 'MessageSender.php';
require_once 'TwilioSMSService.php';
require_once 'CustomEmailService.php';
require_once 'SMSAdapter.php';
require_once 'EmailAdapter.php';

// Create adaptees
$twilioService = new TwilioSMSService();
$emailService = new CustomEmailService();

// Create adapters
$smsAdapter = new SMSAdapter($twilioService);
$emailAdapter = new EmailAdapter($emailService);

// Send notifications using the unified interface
$recipient = "user@example.com";
$message = "Hello, this is a test notification!";

echo "Sending via SMS:\n";
$success = $smsAdapter->send("+1234567890", $message);
echo "SMS sent successfully: " . ($success ? "Yes" : "No") . "\n\n";

echo "Sending via Email:\n";
$success = $emailAdapter->send($recipient, $message);
echo "Email sent successfully: " . ($success ? "Yes" : "No") . "\n";

