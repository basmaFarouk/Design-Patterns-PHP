<?php
namespace Command;

class LockDoorCommand implements Command {
    private Door $door;

    public function __construct(Door $door) {
        $this->door = $door;
    }

    public function execute(): void {
        $this->door->lock();
    }
}