<?php
namespace BehavioralDesignPatterns\Iterator;

interface EmployeeHierarchyIterator {
    public function hasNext(): bool;
    public function getNext(): ?Employee;
}
