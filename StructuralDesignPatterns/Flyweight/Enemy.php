<?php 

namespace StructuralDesignPatterns\Flyweight;

class Enemy implements Player {
    private string $displayName = "Enemy Bot";
    private int $attackPower;
    private int $healthBar;
    private Weapon $weapon;

    public function __construct(int $attackPower, int $healthBar) {
        echo "Creating Enemy...\n";
        $this->attackPower = $attackPower;
        $this->healthBar = $healthBar;
        $this->weapon = new Weapon("Rifle", 0);
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

    public function getWeapon(): Weapon {
        return $this->weapon;
    }

    public function setWeapon(Weapon $weapon): void {
        $this->weapon = $weapon;
    }

    public function attack(): void {
        echo "Player: " . $this->displayName . " is attacking with weapon: "
            . $this->weapon->getName() . " with base attack damage: " . $this->attackPower . "\n";
    }

    public function assignWeapon(Weapon $weapon): void {
        $this->weapon = $weapon;
    }
}