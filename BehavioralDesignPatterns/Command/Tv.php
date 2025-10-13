<?php
namespace BehavioralDesignPatterns\Command;
class Tv {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function turnOn(): void {
        echo "Turning on TV\n";
    }

    public function turnOff(): void {
        echo "Turning off TV\n";
    }

    public function getName(): string {
        return $this->name;
    }
}