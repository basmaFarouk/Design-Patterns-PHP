<?php 

namespace StructuralDesignPatterns\Composite;

class Department implements OrganisationUnit {
    private $organisationUnits;

    public function __construct() {
        $this->organisationUnits = [];
    }

    public function addOrganisationUnit($organisationUnit) {
        $this->organisationUnits[] = $organisationUnit;
    }

    public function calculateTotalSalary() {
        $total = 0;
        foreach ($this->organisationUnits as $unit) {
            $total += $unit->calculateTotalSalary();
        }
        return $total;
    }
}
