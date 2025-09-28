<?php 

interface AirTrafficControlTower {
    public function registerPlane(Plane $plane);
    public function sendMessage(string $message, Plane $sender);
}

class ControlTower implements AirTrafficControlTower {
    private $planes = [];

    public function registerPlane(Plane $plane) {
        $this->planes[] = $plane;
    }

    public function sendMessage(string $message, Plane $sender) {
        foreach ($this->planes as $plane) {
            // Notify all planes except the sender
            if ($plane !== $sender) {
                $plane->receiveMessage($message);
            }
        }
    }
}

class Plane {
    private $id;
    private $mediator;

    public function __construct(string $id, AirTrafficControlTower $mediator) {
        $this->id = $id;
        $this->mediator = $mediator;
        $this->mediator->registerPlane($this);
    }

    public function sendMessage(string $message) {
        echo $this->id . " sends: " . $message . PHP_EOL;
        $this->mediator->sendMessage($message, $this);
    }

    public function receiveMessage(string $message) {
        echo $this->id . " received: " . $message . PHP_EOL;
    }
}


// Create the mediator (control tower)
$tower = new ControlTower();

// Create planes (colleagues)
$planeA = new Plane("Plane A", $tower);
$planeB = new Plane("Plane B", $tower);
$cargoPlane = new Plane("Cargo Plane", $tower);

// Planes communicate through the tower
$planeA->sendMessage("Requesting permission to land on Runway 1");
echo "---" . PHP_EOL;
$planeB->sendMessage("Requesting takeoff clearance");