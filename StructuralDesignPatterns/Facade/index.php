<?php 

namespace StructuralDesignPatterns\Facade;

// Example usage of BookingTravelFacade
// Creating a trip instance with sample data
$trip = new Trip(
    "New York", // flightDeparture
    "Los Angeles", // flightDestination
    "2025-11-01", // flightDate
    "ROOM123", // roomId
    "2025-11-01", // checkInDate
    "2025-11-05", // checkOutDate
    "Los Angeles Airport", // carRentalLocation
    "2025-11-01 09:00", // carRentalStartDate
    "2025-11-05 18:00", // carRentalEndDate
    1500.00, // amount
    PaymentMethodOptions::PAYPAL // paymentMethod
);

// Instantiating the facade
$travelFacade = new BookingTravelFacade();

// Booking the trip using the facade
$travelFacade->bookTrip($trip);