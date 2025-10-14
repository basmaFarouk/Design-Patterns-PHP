<?php  

namespace StructuralDesignPatterns\Decorator;

class MintDecorator extends CondimentDecorator {
    public function prepare() {
        return parent::prepare() . " with Mint";
    }
}