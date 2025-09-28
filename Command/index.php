<?php  
namespace Command;

$tv = new Tv("Living Room TV");
$door = new Door("Front Door"); // Assuming Door is available

$turnTvOn = new TurnTvOnCommand($tv);
$turnTvOff = new TurnTvOffCommand($tv);
$unlockDoor = new UnlockDoorCommand($door);

$voice = new VoiceAssistant(); //client
$voice->setCommand("turn on tv", $turnTvOn);
$voice->setCommand("turn off tv", $turnTvOff);
$voice->setCommand("unlock door", $unlockDoor);

// Test the commands
$voice->say("turn on tv");      // Outputs: Turning on TV
$voice->say("turn off tv");     // Outputs: Turning off TV
$voice->say("unlock door");

// Example usage:
$light = new Light("Living Room");
$door = new Door("Front Door");

$turnLightOn = new TurnLightOnCommand($light);
$turnLightOff = new TurnLightOffCommand($light);
$lockDoor = new LockDoorCommand($door);

$shortcut = new SmartHomeShortcut();
$shortcut->setCommand("light_on", $turnLightOn);
$shortcut->setCommand("light_off", $turnLightOff);
$shortcut->setCommand("lock_door", $lockDoor);

$app = new SmartHomeMobileApplication();

// Test the commands
$shortcut->openShortcut("light_on");    // Outputs: Turning on light....
$shortcut->openShortcut("light_off");   // Outputs: Turning off light....
$shortcut->openShortcut("lock_door");   // Outputs: Locking door...
$app->execute($turnLightOn);