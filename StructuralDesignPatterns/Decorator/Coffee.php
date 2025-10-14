<?php 

namespace StructuralDesignPatterns\Decorator;

class Coffee implements Beverage {
    public function prepare() {
        return "Coffee with Coffee Beans";
    }
}