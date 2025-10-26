<?php 

namespace StructuralDesignPatterns\Flyweight;

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

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getBonusAttackDamage(): int {
        return $this->bonusAttackDamage;
    }

    public function setBonusAttackDamage(int $bonusAttackDamage): void {
        $this->bonusAttackDamage = $bonusAttackDamage;
    }
}