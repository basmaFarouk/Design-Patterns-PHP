<?php 

namespace StructuralDesignPatterns\Proxy;

use Exception;

// Example usage
try {
    $proxy = new DummyJsonCachingProxy();
    
    // First call - will fetch from API
    echo "First products call:\n";
    $products = $proxy->getAllProducts();
    echo "Received " . strlen($products) . " bytes of product data\n\n";
    
    // Second call - should use cache
    echo "Second products call:\n";
    $products = $proxy->getAllProducts();
    echo "Received " . strlen($products) . " bytes of product data\n\n";
    
    // First call for recipes - will fetch from API
    echo "First recipes call:\n";
    $recipes = $proxy->getAllRecipes();
    echo "Received " . strlen($recipes) . " bytes of recipe data\n\n";
    
    // Second call for recipes - should use cache
    echo "Second recipes call:\n";
    $recipes = $proxy->getAllRecipes();
    echo "Received " . strlen($recipes) . " bytes of recipe data\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}