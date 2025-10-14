<?php 

namespace StructuralDesignPatterns\Decorator;

class CondimentDecorator implements Beverage {
    protected $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function prepare() {
        return $this->beverage->prepare();
    }
}