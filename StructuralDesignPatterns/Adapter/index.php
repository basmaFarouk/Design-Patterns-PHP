<?php
namespace StructuralDesignPatterns\Adapter;

// Include all necessary classes (in a real project, use an autoloader)
require_once 'ThirdPartyWeatherService.php';
require_once 'LegacyWeatherService.php';
require_once 'TemperatureData.php';
require_once 'WeatherServiceAdapter.php';
require_once 'WeatherServiceAdaptee.php';

// Create an instance of the ThirdPartyWeatherService
$thirdPartyService = new ThirdPartyWeatherService();

// Create an instance of the LegacyWeatherService, injecting the third-party service
$legacyService = new LegacyWeatherService($thirdPartyService);

// Create an instance of the WeatherServiceAdaptee, injecting the legacy service
$weatherAdapter = new WeatherServiceAdaptee($legacyService);

// Example coordinates (e.g., for a location)
$latitude = 51.5074;  // Example: London latitude
$longitude = -0.1278; // Example: London longitude

// Call the getTemperature method with coordinates
$result = $weatherAdapter->getTemperature($longitude, $latitude);

// Output the result
echo "Temperature Data: " . $result->getTemperatureDate() . "\n";



