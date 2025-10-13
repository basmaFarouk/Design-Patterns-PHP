<?php
namespace BehavioralDesignPatterns\Iterator;

class EmployeeSubOrdinateIterator implements EmployeeHierarchyIterator {
    private EmployeeHierarchyCollection $employeeHierarchyCollection;
    private int $currentSubOrdinatePosition = 0;

    public function __construct(EmployeeHierarchyCollection $employeeHierarchyCollection) {
        $this->employeeHierarchyCollection = $employeeHierarchyCollection;
    }

    public function hasNext(): bool {
        return $this->currentSubOrdinatePosition < count($this->employeeHierarchyCollection->getEmployees());
    }

    public function getNext(): ?Employee {
        echo "Iterating through a graph DFS / BFS\n";
        if (!$this->hasNext()) {
            return null;
        }
        return $this->employeeHierarchyCollection->getEmployees()[$this->currentSubOrdinatePosition++];
    }
}
