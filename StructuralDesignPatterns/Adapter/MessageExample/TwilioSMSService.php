<?php  

namespace StructuralDesignPatterns\Adapter\MessageExample;

class TwilioSMSService {
    public function sendSMS(string $phoneNumber, string $text, string $fromNumber): string {
        echo "Sending SMS to $phoneNumber: $text via Twilio from $fromNumber\n";
        return "SMS_SENT_" . rand(1000, 9999);
    }
}