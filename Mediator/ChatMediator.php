<?php 
namespace Mediator;

interface ChatMediator {
    public function sendDirectMessage(string $message, User $toUser, User $fromUser);
    public function sendGroupMessage(string $message, User $fromUser, string $toGroup);
    public function registerUserToGroup(User $user, string $groupName);
}