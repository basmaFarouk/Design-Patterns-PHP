<?php 

namespace StructuralDesignPatterns\Flyweight;


// EXAMPLE USAGE - Demonstrating Flyweight Pattern
echo "=== Flyweight Pattern Demo ===\n\n";

// Create weapons
$rifle = new Weapon("Rifle", 10);
$shotgun = new Weapon("Shotgun", 15);
$sniper = new Weapon("Sniper", 25);

// First requests - Creates new instances
echo "=== First Requests (Creating instances) ===\n";
$player1 = PlayersFactory::getPlayer(PlayerType::MAIN_PLAYER);
$enemy1 = PlayersFactory::getPlayer(PlayerType::WEAK_ENEMY);
$enemy2 = PlayersFactory::getPlayer(PlayerType::STRONG_ENEMY);

echo "Cache size: " . PlayersFactory::getCacheSize() . "\n\n";

// Assign weapons and attack
echo "=== Attacks with default weapons ===\n";
$player1->assignWeapon($rifle);
$player1->attack();

$enemy1->assignWeapon($shotgun);
$enemy1->attack();

$enemy2->assignWeapon($sniper);
$enemy2->attack();

echo "\n=== Second Requests (Using cached instances) ===\n";
// Second requests - Uses cached instances (Flyweight magic!)
$player2 = PlayersFactory::getPlayer(PlayerType::MAIN_PLAYER);
$enemy3 = PlayersFactory::getPlayer(PlayerType::WEAK_ENEMY);
$enemy4 = PlayersFactory::getPlayer(PlayerType::STRONG_ENEMY);

echo "Cache size: " . PlayersFactory::getCacheSize() . " (No new objects created!)\n\n";

// These are the SAME objects, so weapon changes affect all references
echo "=== Changing weapon on cached objects ===\n";
$player2->assignWeapon($sniper);  // This changes weapon for player1 too!
$player2->attack();  // Same player object

$enemy3->assignWeapon($rifle);   // Changes weapon for enemy1 too!
$enemy3->attack();   // Same enemy object

echo "\n=== Original references also changed ===\n";
$player1->attack();  // Shows sniper now!
$enemy1->attack();   // Shows rifle now!

echo "\n=== Game Stats ===\n";
echo "Main Player - Attack: " . $player1->getAttackPower() . ", Health: " . $player1->getHealthBar() . "\n";
echo "Weak Enemy - Attack: " . $enemy1->getAttackPower() . ", Health: " . $enemy1->getHealthBar() . "\n";
echo "Strong Enemy - Attack: " . $enemy2->getAttackPower() . ", Health: " . $enemy2->getHealthBar() . "\n";
echo "Total unique player objects in cache: " . PlayersFactory::getCacheSize() . "\n";