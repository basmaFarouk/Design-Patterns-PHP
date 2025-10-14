<?php 

namespace StructuralDesignPatterns\Decorator;

class MilkDecorator extends CondimentDecorator {
    public function prepare() {
        return parent::prepare() . " with Milk";
    }
}

