<?php 
namespace Iterator;

$employees = new EmployeeHierarchyCollection(25);
$employeeDirectReport = $employees->createEmployeeDirectReportIterator();
while($employeeDirectReport->getNext()) {
    print_r($employeeDirectReport->getNext());
}
