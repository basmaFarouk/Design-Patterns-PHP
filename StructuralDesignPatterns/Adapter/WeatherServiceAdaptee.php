<?php 

namespace StructuralDesignPatterns\Adapter;

class WeatherServiceAdaptee implements WeatherServiceAdapter {
    private $legacyWeatherService;

    public function __construct(LegacyWeatherService $legacyWeatherService) {
        $this->legacyWeatherService = $legacyWeatherService;
    }

    public function getTemperature(float $longitude, float $latitude): TemperatureData {
        $temperatureDataInXML = $this->legacyWeatherService->getTemperature(
            $this->getCityOf($longitude, $latitude),
            $this->getCountryOf($longitude, $latitude)
        );
        return $this->convertXMLDataToJson($temperatureDataInXML);
    }

    private function convertXMLDataToJson(string $xmlData): TemperatureData {
        echo "Converting...\n";
        return new TemperatureData("Converted Data from XML into JSON");
    }

    private function getCityOf(float $longitude, float $latitude): string {
        echo "Extracting city of longitude: $longitude and latitude: $latitude\n";
        return "City";
    }

    private function getCountryOf(float $longitude, float $latitude): string {
        echo "Extracting country of longitude: $longitude and latitude: $latitude\n";
        return "Country";
    }
}