<?php 

namespace StructuralDesignPatterns\Flyweight;

// Character.php - Interface defining the flyweight behavior
interface Character {
    public function attack(): void;
    public function setPosition(int $x, int $y): void;
    public function getAttackPower(): int;
    public function getHealthBar(): int;
}

// Weapon.php - Simple class for extrinsic state
class Weapon {
    private string $name;
    private int $bonusAttackDamage;

    public function __construct(string $name, int $bonusAttackDamage) {
        $this->name = $name;
        $this->bonusAttackDamage = $bonusAttackDamage;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBonusAttackDamage(): int {
        return $this->bonusAttackDamage;
    }
}

// CharacterFlyweight.php - Concrete flyweight with intrinsic state
class CharacterFlyweight implements Character {
    private string $type;
    private int $baseAttackPower;
    private int $baseHealthBar;
    private ?Weapon $weapon = null;
    private int $x = 0;
    private int $y = 0;

    public function __construct(string $type, int $baseAttackPower, int $baseHealthBar) {
        $this->type = $type;
        $this->baseAttackPower = $baseAttackPower;
        $this->baseHealthBar = $baseHealthBar;
        echo "Creating flyweight for $type...\n";
    }

    public function attack(): void {
        $totalDamage = $this->baseAttackPower + ($this->weapon ? $this->weapon->getBonusAttackDamage() : 0);
        echo "Character $this->type at ($this->x, $this->y) attacks with total damage: $totalDamage\n";
    }

    public function setPosition(int $x, int $y): void {
        $this->x = $x;
        $this->y = $y;
    }

    public function getAttackPower(): int {
        return $this->baseAttackPower + ($this->weapon ? $this->weapon->getBonusAttackDamage() : 0);
    }

    public function getHealthBar(): int {
        return $this->baseHealthBar;
    }

    public function setWeapon(Weapon $weapon): void {
        $this->weapon = $weapon;
    }
}

// CharacterFactory.php - Flyweight Factory
class CharacterFactory {
    private static array $flyweights = [];

    public static function getCharacter(string $type, int $baseAttackPower, int $baseHealthBar): Character {
        $key = "$type-$baseAttackPower-$baseHealthBar";
        if (!isset(self::$flyweights[$key])) {
            self::$flyweights[$key] = new CharacterFlyweight($type, $baseAttackPower, $baseHealthBar);
        } else {
            echo "Reusing existing flyweight for $type...\n";
        }
        return self::$flyweights[$key];
    }

    public static function getFlyweightCount(): int {
        return count(self::$flyweights);
    }
}

// Example Usage - Simulating a game with multiple characters
echo "=== Flyweight Pattern in Game Demo ===\n\n";

// Create some weapons
$rifle = new Weapon("Rifle", 10);
$shotgun = new Weapon("Shotgun", 15);

// First set of characters (creates new flyweights)
echo "=== Creating initial characters ===\n";
$zombie1 = CharacterFactory::getCharacter("Zombie", 5, 20);
$zombie1->setPosition(10, 20);
$zombie1->setWeapon($rifle);
$zombie1->attack();

$soldier1 = CharacterFactory::getCharacter("Soldier", 10, 50);
$soldier1->setPosition(30, 40);
$soldier1->setWeapon($shotgun);
$soldier1->attack();

echo "Flyweight count: " . CharacterFactory::getFlyweightCount() . "\n\n";

// Second set of characters (reuses flyweights)
echo "=== Creating more characters (reusing flyweights) ===\n";
$zombie2 = CharacterFactory::getCharacter("Zombie", 5, 20);
$zombie2->setPosition(15, 25);
$zombie2->setWeapon($rifle);
$zombie2->attack();

$soldier2 = CharacterFactory::getCharacter("Soldier", 10, 50);
$soldier2->setPosition(35, 45);
$soldier2->setWeapon($shotgun);
$soldier2->attack();

echo "Flyweight count: " . CharacterFactory::getFlyweightCount() . " (No new flyweights created!)\n";



/*  

CharacterFlyweight: Represents the flyweight object with intrinsic state (type, baseAttackPower, baseHealthBar) 
and extrinsic state (position, weapon). The intrinsic state is shared, while the extrinsic state is set per instance.
CharacterFactory: Manages a pool of flyweight objects, creating a new one only if the combination of type, 
baseAttackPower, and baseHealthBar hasn’t been seen before. Subsequent requests reuse existing flyweights.
Real-World Application: In a game, instead of creating thousands of unique Zombie or Soldier objects, 
you create one flyweight per unique type and configuration. Each on-screen character (e.g., a zombie at position (10, 20) 
or (15, 25)) reuses the same flyweight, updating only its position and weapon.
Memory Efficiency: With thousands of zombies, only one Zombie flyweight is created, 
reducing memory usage significantly. The extrinsic state (position, weapon) is managed by the game engine per instance.
Scalability: As the game grows with more character types or configurations, the factory ensures efficient reuse, 
keeping memory usage manageable.

Benefits in This Context
Memory Savings: Instead of thousands of Zombie objects (e.g., 10 KB each), 
you store one flyweight (10 KB) and manage extrinsic state separately, saving megabytes or gigabytes in large games.
Performance: Instantiating fewer objects improves game performance, especially on low-end devices.
Flexibility: New character types or configurations can be added by updating the factory, without changing existing code.

This example demonstrates how the Flyweight pattern is ideal for real-world applications like games, 
where numerous similar entities need to be managed efficiently. It’s also applicable in UI frameworks (e.g., reusing button styles), 
text editors (e.g., sharing character styles), or any system with repetitive object creation.