<?php  
namespace BehavioralDesignPatterns\Mediator;

// Example Usage
$mediator = new ChatManagement();

// Create users
$user1 = new User("Alice", $mediator);
$user2 = new User("Bob", $mediator);
$user3 = new User("Charlie", $mediator);

// Register users to a group
$mediator->registerUserToGroup($user1, "DevTeam");
$mediator->registerUserToGroup($user2, "DevTeam");
$mediator->registerUserToGroup($user3, "DevTeam");

// Direct message
$user1->sendDirectMessage("Hi Bob, how's the project?", $user2);
echo "---" . PHP_EOL;

// Group message
$user2->sendGroupMessage("Team, meeting at 3 PM!", "DevTeam");
