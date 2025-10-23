<?php 

namespace StructuralDesignPatterns\Proxy;

use Exception;
use RuntimeException;

class DummyThirdPartyApiService implements DummyJsonApi {
    private const PRODUCTS_ENDPOINT = 'https://dummyjson.com/products';
    private const RECIPES_ENDPOINT = 'https://dummyjson.com/recipes';

    public function getAllProducts(): string {
        try {
            echo "Fetching products...\n";
            sleep(2); // Simulate delay
            $ch = curl_init(self::PRODUCTS_ENDPOINT);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            
            if (curl_errno($ch)) {
                throw new Exception(curl_error($ch));
            }
            
            curl_close($ch);
            return $response;
        } catch (Exception $e) {
            throw new RuntimeException($e->getMessage());
        }
    }

    public function getAllRecipes(): string {
        try {
            echo "Fetching recipes...\n";
            sleep(2); // Simulate delay
            $ch = curl_init(self::RECIPES_ENDPOINT);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            
            if (curl_errno($ch)) {
                throw new Exception(curl_error($ch));
            }
            
            curl_close($ch);
            return $response;
        } catch (Exception $e) {
            throw new RuntimeException($e->getMessage());
        }
    }
}