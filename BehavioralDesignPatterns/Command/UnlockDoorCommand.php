<?php
namespace BehavioralDesignPatterns\Command;

class UnlockDoorCommand implements Command {
    private Door $door;

    public function __construct(Door $door) {
        $this->door = $door;
    }

    public function execute(): void {
        $this->door->unlock();
    }
}