<?php 

namespace StructuralDesignPatterns\Adapter;


class TemperatureData {
    private $temperatureData;

    public function __construct(string $temperatureData) {
        $this->temperatureData = $temperatureData;
    }

    public function getTemperatureDate(): string {
        return $this->temperatureData;
    }
}