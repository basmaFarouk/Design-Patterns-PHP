<?php 

namespace StructuralDesignPatterns\Composite;

// Example usage
$employee1 = new Employee("John Doe", 5000);
$employee2 = new Employee("Jane Smith", 6000);

$subDept = new Department();
$subDept->addOrganisationUnit($employee1);
$subDept->addOrganisationUnit($employee2);

$dept = new Department();
$dept->addOrganisationUnit($subDept);
$dept->addOrganisationUnit(new Employee("Manager", 8000));

$totalSalary = $dept->calculateTotalSalary();
echo "Total salary of the department: $" . $totalSalary . "\n";