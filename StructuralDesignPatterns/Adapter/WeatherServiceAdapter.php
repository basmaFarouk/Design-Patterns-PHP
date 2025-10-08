<?php 

namespace StructuralDesignPatterns\Adapter;

interface WeatherServiceAdapter {
    public function getTemperature(float $longitude, float $latitude): TemperatureData;
}
