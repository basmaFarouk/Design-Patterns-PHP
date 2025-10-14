<?php 

namespace StructuralDesignPatterns\Composite;

class Employee implements OrganisationUnit {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function calculateTotalSalary() {
        return $this->salary;
    }
}