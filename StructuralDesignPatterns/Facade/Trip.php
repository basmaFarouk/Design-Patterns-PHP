<?php 

namespace StructuralDesignPatterns\Facade;

// Trip class to hold trip data (assuming it's needed for the facade)
class Trip {
    private string $flightDeparture;
    private string $flightDestination;
    private string $flightDate;
    private string $roomId;
    private string $checkInDate;
    private string $checkOutDate;
    private string $carRentalLocation;
    private string $carRentalStartDate;
    private string $carRentalEndDate;
    private float $amount;
    private string $paymentMethod;

    public function __construct(
        string $flightDeparture,
        string $flightDestination,
        string $flightDate,
        string $roomId,
        string $checkInDate,
        string $checkOutDate,
        string $carRentalLocation,
        string $carRentalStartDate,
        string $carRentalEndDate,
        float $amount,
        string $paymentMethod
    ) {
        $this->flightDeparture = $flightDeparture;
        $this->flightDestination = $flightDestination;
        $this->flightDate = $flightDate;
        $this->roomId = $roomId;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
        $this->carRentalLocation = $carRentalLocation;
        $this->carRentalStartDate = $carRentalStartDate;
        $this->carRentalEndDate = $carRentalEndDate;
        $this->amount = $amount;
        $this->paymentMethod = $paymentMethod;
    }

    public function getFlightDeparture(): string {
        return $this->flightDeparture;
    }

    public function getFlightDestination(): string {
        return $this->flightDestination;
    }

    public function getFlightDate(): string {
        return $this->flightDate;
    }

    public function getRoomId(): string {
        return $this->roomId;
    }

    public function getCheckInDate(): string {
        return $this->checkInDate;
    }

    public function getCheckOutDate(): string {
        return $this->checkOutDate;
    }

    public function getCarRentalLocation(): string {
        return $this->carRentalLocation;
    }

    public function getCarRentalStartDate(): string {
        return $this->carRentalStartDate;
    }

    public function getCarRentalEndDate(): string {
        return $this->carRentalEndDate;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getPaymentMethod(): string {
        return $this->paymentMethod;
    }
}