<?php
namespace Iterator;

class EmployeeCoWorkerIterator implements EmployeeHierarchyIterator {
    private EmployeeHierarchyCollection $employeeHierarchyCollection;
    private int $currentCoWorkerPosition = 0;

    public function __construct(EmployeeHierarchyCollection $employeeHierarchyCollection) {
        $this->employeeHierarchyCollection = $employeeHierarchyCollection;
    }

    public function hasNext(): bool {
        return $this->currentCoWorkerPosition < count($this->employeeHierarchyCollection->getEmployees());
    }

    public function getNext(): ?Employee {
        echo "Iterating through a graph DFS / BFS\n";
        if (!$this->hasNext()) {
            return null;
        }
        return $this->employeeHierarchyCollection->getEmployees()[$this->currentCoWorkerPosition++];
    }
}
