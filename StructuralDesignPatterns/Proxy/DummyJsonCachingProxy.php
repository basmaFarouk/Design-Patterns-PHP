<?php 

namespace StructuralDesignPatterns\Proxy;

class DummyJsonCachingProxy implements DummyJsonApi {
    private array $cachingLayer = [];
    private const PRODUCTS_ENDPOINT = 'https://dummyjson.com/products';
    private const RECIPES_ENDPOINT = 'https://dummyjson.com/recipes';
    private DummyJsonApi $dummyJsonApi;

    public function __construct() {
        $this->dummyJsonApi = new DummyThirdPartyApiService();
    }

    public function getAllProducts(): string {
        if (isset($this->cachingLayer[self::PRODUCTS_ENDPOINT])) {
            echo "Returning cached products...\n";
            return $this->cachingLayer[self::PRODUCTS_ENDPOINT];
        }
        
        $productResponse = $this->dummyJsonApi->getAllProducts();
        $this->cachingLayer[self::PRODUCTS_ENDPOINT] = $productResponse;
        return $productResponse;
    }

    public function getAllRecipes(): string {
        if (isset($this->cachingLayer[self::RECIPES_ENDPOINT])) {
            echo "Returning cached recipes...\n";
            return $this->cachingLayer[self::RECIPES_ENDPOINT];
        }
        
        $recipesResponse = $this->dummyJsonApi->getAllRecipes();
        $this->cachingLayer[self::RECIPES_ENDPOINT] = $recipesResponse;
        return $recipesResponse;
    }
}