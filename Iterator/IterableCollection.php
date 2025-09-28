<?php
namespace Iterator;

interface IterableCollection {
    public function createEmployeeDirectReportIterator(): EmployeeHierarchyIterator;
    public function createEmployeeCoWorkerIterator(): EmployeeHierarchyIterator;
    public function createEmployeeSubOrdinateIterator(): EmployeeHierarchyIterator;
}
