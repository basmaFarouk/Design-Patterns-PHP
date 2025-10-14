<?php 

namespace StructuralDesignPatterns\Composite;

interface CourseComponent {
    public function calculateTotalDuration();
}

class Lesson implements CourseComponent {
    private $title;
    private $duration;

    public function __construct($title, $duration) {
        $this->title = $title;
        $this->duration = $duration;
    }

    public function calculateTotalDuration() {
        return $this->duration;
    }
}

class Module implements CourseComponent {
    private $title;
    public $components;

    public function __construct($title) {
        $this->title = $title;
        $this->components = [];
    }

    public function addComponent($component) {
        $this->components[] = $component;
    }

    public function calculateTotalDuration() {
        $total = 0;
        foreach ($this->components as $component) {
            $total += $component->calculateTotalDuration();
        }
        return $total;
    }
}

// Example usage
$lesson1 = new Lesson("Introduction to PHP", 30);
$lesson2 = new Lesson("Arrays in PHP", 45);

$subModule = new Module("Basics");
$subModule->addComponent($lesson1);
$subModule->addComponent($lesson2);

$module = new Module("PHP Fundamentals");
$module->addComponent($subModule);
$module->addComponent(new Lesson("Functions in PHP", 60));
var_dump($module->components);

$totalDuration = $module->calculateTotalDuration();
echo "Total duration of the course as of " . date("h:i A T, l, F d, Y") . ": " . $totalDuration . " minutes\n";
