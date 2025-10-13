<?php 
namespace BehavioralDesignPatterns\Mediator;

class User { //Colleague
    private $name;
    private $chatMediator;

    public function __construct(string $name, ChatMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function sendDirectMessage(string $message, User $toUser) {
        $this->chatMediator->sendDirectMessage($message, $toUser, $this);
    }

    public function receiveDirectMessage(string $message, User $fromUser) {
        echo $this->name . " is receiving message: " . $message . " from user: " . $fromUser->getName() . PHP_EOL;
    }

    public function sendGroupMessage(string $message, string $groupName) {
        $this->chatMediator->sendGroupMessage($message, $this, $groupName);
    }

    public function receiveGroupMessage(string $message, User $fromUser, string $groupName) {
        echo $this->name . " is receiving message: " . $message . " from group: " . $groupName . " and from user: " . $fromUser->getName() . PHP_EOL;
    }

    public function getName(): string {
        return $this->name;
    }
}