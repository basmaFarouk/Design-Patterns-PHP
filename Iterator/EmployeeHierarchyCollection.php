<?php
namespace Iterator;

class EmployeeHierarchyCollection implements IterableCollection {
    private array $employees;
    private string $employeeId;

    public function __construct(string $employeeId) {
        $this->employees = [
            new Employee("123", "Mahmoud"),
            new Employee("345", "Ahmed")
        ];
        $this->employeeId = $employeeId;
    }

    public function getEmployees(): array {
        return $this->employees;
    }

    public function createEmployeeDirectReportIterator(): EmployeeHierarchyIterator {
        return new EmployeeDirectReportIterator($this);
    }

    public function createEmployeeCoWorkerIterator(): EmployeeHierarchyIterator {
        return new EmployeeCoWorkerIterator($this);
    }

    public function createEmployeeSubOrdinateIterator(): EmployeeHierarchyIterator {
        return new EmployeeSubOrdinateIterator($this);
    }
}
