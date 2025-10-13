<?php
namespace BehavioralDesignPatterns\Command;

class SmartHomeMobileApplication {
    public function execute(Command $command): void {
        $command->execute();
    }
}