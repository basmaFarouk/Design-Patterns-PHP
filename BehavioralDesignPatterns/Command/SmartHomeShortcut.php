<?php
namespace BehavioralDesignPatterns\Command;

class SmartHomeShortcut {
    private array $commands;

    public function __construct() {
        $this->commands = [];
    }

    public function setCommand(string $shortcutCommand, Command $command): void {
        $this->commands[$shortcutCommand] = $command;
    }

    public function openShortcut(string $shortcutCommand): void {
        if (isset($this->commands[$shortcutCommand])) {
            $this->commands[$shortcutCommand]->execute();
        }
    }
}