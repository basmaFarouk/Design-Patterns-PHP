<?php 

namespace StructuralDesignPatterns\Adapter;

class ThirdPartyWeatherService {
    public function getTemperature(string $city, string $country): string {
        echo "Fetching temperature data ...\n";
        return "Temperature Data returned in XML Format...";
    }
}