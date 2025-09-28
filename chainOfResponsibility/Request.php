<?php
namespace chainOfResponsibility;

class Request {
    private string $type;
    private bool $isAuthenticated;
    private bool $isAuthorized;
    private bool $hasPassedSecurityChecks;

    public function __construct(string $type, bool $isAuthenticated, bool $isAuthorized, bool $hasPassedSecurityChecks) {
        $this->type = $type;
        $this->isAuthenticated = $isAuthenticated;
        $this->isAuthorized = $isAuthorized;
        $this->hasPassedSecurityChecks = $hasPassedSecurityChecks;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    public function isAuthenticated(): bool {
        return $this->isAuthenticated;
    }

    public function isAuthorized(): bool {
        return $this->isAuthorized;
    }

    public function hasPassedSecurityChecks(): bool {
        return $this->hasPassedSecurityChecks;
    }
}