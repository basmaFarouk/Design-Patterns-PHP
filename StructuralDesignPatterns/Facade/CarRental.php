<?php 

namespace StructuralDesignPatterns\Facade;

// CarRental class
class CarRental {
    public function rentCar(string $location, string $startDateTime, string $endDateTime): void {
        echo "Renting car from: $location with startDateTime: $startDateTime and endDateTime: $endDateTime" . PHP_EOL;
    }
}