<?php 

namespace StructuralDesignPatterns\Adapter\MessageExample;

class SMSAdapter implements MessageSender {
    private $twilioService;
    private $fromNumber;

    public function __construct(TwilioSMSService $twilioService, string $fromNumber = "+1234567890") {
        $this->twilioService = $twilioService;
        $this->fromNumber = $fromNumber;
    }

    public function send(string $recipient, string $message): bool {
        $result = $this->twilioService->sendSMS($recipient, $message, $this->fromNumber);
        return strpos($result, "SMS_SENT_") === 0;
    }
}