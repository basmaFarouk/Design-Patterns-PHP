<?php 

namespace StructuralDesignPatterns\Decorator;

class Tea implements Beverage {
    public function prepare() {
        return "Tea with Tea Leaves";
    }
}
