<?php
namespace Command;

class Light {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function turnOn(): void {
        echo "Turning on light....\n";
    }

    public function turnOff(): void {
        echo "Turning off light....\n";
    }

    public function getName(): string {
        return $this->name;
    }
}