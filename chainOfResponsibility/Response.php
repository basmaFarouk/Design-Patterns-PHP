<?php 
namespace chainOfResponsibility;

class Response {
    private string $reason;
    private bool $isSucceeded;

    public function __construct(string $reason, bool $isSucceeded) {
        $this->reason = $reason;
        $this->isSucceeded = $isSucceeded;
    }

    public function getReason(): string {
        return $this->reason;
    }

    public function isSucceeded(): bool {
        return $this->isSucceeded;
    }
}
