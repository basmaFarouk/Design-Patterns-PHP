<?php 

namespace StructuralDesignPatterns\Proxy;

// Interface equivalent to DummyJsonApi
interface DummyJsonApi {
    public function getAllProducts(): string;
    public function getAllRecipes(): string;
}