<?php
namespace BehavioralDesignPatterns\Command;
class TurnLightOffCommand implements Command {
    private Light $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute(): void {
        $this->light->turnOff();
    }
}