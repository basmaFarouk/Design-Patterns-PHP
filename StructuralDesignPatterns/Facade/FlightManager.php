<?php 

namespace StructuralDesignPatterns\Facade;

// FlightManager class
class FlightManager {
    public function bookFlight(string $departure, string $destination, string $date): void {
        echo "Booking flight from: $departure to: $destination at date: $date" . PHP_EOL;
    }
}