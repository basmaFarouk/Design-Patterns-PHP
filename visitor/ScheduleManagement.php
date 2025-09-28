<?php
namespace Visitor;

interface ScheduleManagement {
    public function generateReport();
    public function calculateOverTime();
    public function accept(ScheduleManagementVisitor $scheduleManagementVisitor);
}