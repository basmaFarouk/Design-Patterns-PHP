<?php 
namespace Mediator;

class ChatManagement implements ChatMediator {
    private $groups = [];

    public function __construct() {
        $this->groups = [];
    }

    public function sendDirectMessage(string $message, User $toUser, User $fromUser) {
        echo $fromUser->getName() . " is sending message: " . $message . " to user: " . $toUser->getName() . PHP_EOL;
        $toUser->receiveDirectMessage($message, $fromUser);
    }

    public function sendGroupMessage(string $message, User $fromUser, string $toGroup) {
        echo $fromUser->getName() . " is sending message: " . $message . " to group: " . $toGroup . PHP_EOL;
        if (isset($this->groups[$toGroup])) {
            foreach ($this->groups[$toGroup] as $user) {
                $user->receiveGroupMessage($message, $fromUser, $toGroup);
            }
        }
    }

    public function registerUserToGroup(User $user, string $groupName) {
        if (!isset($this->groups[$groupName])) {
            $this->groups[$groupName] = [];
        }
        $this->groups[$groupName][] = $user;
    }
}