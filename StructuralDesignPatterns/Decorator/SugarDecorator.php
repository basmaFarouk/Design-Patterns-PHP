<?php 

namespace StructuralDesignPatterns\Decorator;

class SugarDecorator extends CondimentDecorator {
    public function prepare() {
        return parent::prepare() . " with sugar";
    }
}