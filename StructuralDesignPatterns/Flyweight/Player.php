<?php 

namespace StructuralDesignPatterns\Flyweight;

interface Player {
    public function attack(): void;
    public function assignWeapon(Weapon $weapon): void;
}