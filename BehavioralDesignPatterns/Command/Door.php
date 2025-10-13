<?php
namespace BehavioralDesignPatterns\Command;

class Door {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function lock(): void {
        echo "Locking door...\n";
    }

    public function unlock(): void {
        echo "Unlocking door...\n";
    }

    public function getName(): string {
        return $this->name;
    }
}