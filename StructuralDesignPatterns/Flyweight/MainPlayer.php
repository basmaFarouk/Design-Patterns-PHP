<?php 

namespace StructuralDesignPatterns\Flyweight;

class MainPlayer implements Player {
    private string $displayName;
    private int $attackPower = 5;
    private int $healthBar = 100;
    private ?Weapon $weapon = null;

    public function __construct(string $displayName) {
        echo "Creating Main Player...\n";
        $this->displayName = $displayName;
    }

    public function getDisplayName(): string {
        return $this->displayName;
    }

    public function getAttackPower(): int {
        return $this->attackPower;
    }

    public function getHealthBar(): int {
        return $this->healthBar;
    }

    public function getWeapon(): ?Weapon {
        return $this->weapon;
    }

    public function setWeapon(Weapon $weapon): void {
        $this->weapon = $weapon;
    }

    public function attack(): void {
        if ($this->weapon === null) {
            echo "Player: " . $this->displayName . " has no weapon!\n";
            return;
        }
        echo "Player: " . $this->displayName . " is attacking with weapon: "
            . $this->weapon->getName() . " with base attack damage: " . $this->attackPower . "\n";
    }

    public function assignWeapon(Weapon $weapon): void {
        $this->weapon = $weapon;
    }
}