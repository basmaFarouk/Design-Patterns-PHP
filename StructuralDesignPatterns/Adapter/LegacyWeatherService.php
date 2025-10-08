<?php 

namespace StructuralDesignPatterns\Adapter;

class LegacyWeatherService {
    private $weatherApi;

    public function __construct(ThirdPartyWeatherService $weatherApi) {
        $this->weatherApi = $weatherApi;
    }

    public function getTemperature(string $city, string $country): string {
        return $this->weatherApi->getTemperature($city, $country);
    }
}