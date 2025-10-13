<?php
namespace BehavioralDesignPatterns\Command;

class TurnTvOnCommand implements Command {
    private Tv $tv;

    public function __construct(Tv $tv) {
        $this->tv = $tv;
    }

    public function execute(): void {
        $this->tv->turnOn();
    }
}