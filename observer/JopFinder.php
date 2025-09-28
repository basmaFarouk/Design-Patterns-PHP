<?php
namespace observer;

class JobFinder implements Subscriber {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function notify(string $message): void {
        echo "{$this->name} is receiving a notification about job finding: {$message}\n";
    }
}