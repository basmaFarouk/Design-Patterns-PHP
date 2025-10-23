<?php 

namespace StructuralDesignPatterns\Facade;

// HotelReservation class
class HotelReservation {
    public function reserveRoom(string $roomId, string $checkInDate, string $checkOutDate): void {
        echo "Reserving the room: $roomId with checkInDate: $checkInDate and checkOutDate: $checkOutDate" . PHP_EOL;
    }
}
