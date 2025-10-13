<?php
namespace BehavioralDesignPatterns\Command;

class VoiceAssistant {
    private array $commands;

    public function __construct() {
        $this->commands = [];
    }

    public function setCommand(string $talkingCommand, Command $command): void {
        $this->commands[$talkingCommand] = $command;
    }

    public function say(string $talkingCommand): void {
        if (isset($this->commands[$talkingCommand])) {
            $this->commands[$talkingCommand]->execute();
        }
    }
}