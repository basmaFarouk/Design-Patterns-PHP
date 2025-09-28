<?php
namespace Iterator;

class EmployeeDirectReportIterator implements EmployeeHierarchyIterator {
    private EmployeeHierarchyCollection $employeeHierarchyCollection;
    private int $currentDirectReportPosition = 0;

    public function __construct(EmployeeHierarchyCollection $employeeHierarchyCollection) {
        $this->employeeHierarchyCollection = $employeeHierarchyCollection;
    }

    public function hasNext(): bool {
        return $this->currentDirectReportPosition < count($this->employeeHierarchyCollection->getEmployees());
    }

    public function getNext(): ?Employee {
        echo "Iterating through a graph DFS / BFS\n";
        if (!$this->hasNext()) {
            return null;
        }
        return $this->employeeHierarchyCollection->getEmployees()[$this->currentDirectReportPosition++];
    }
}
