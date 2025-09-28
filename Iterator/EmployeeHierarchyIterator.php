<?php
namespace Iterator;

interface EmployeeHierarchyIterator {
    public function hasNext(): bool;
    public function getNext(): ?Employee;
}
