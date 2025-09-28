<?php
namespace Visitor;

class DayShiftScheduleManagement implements ScheduleManagement {
    public function generateReport() {
        echo "Generating report for day shift...\n";
    }

    public function calculateOverTime() {
        echo "Calculating over time for day shift..\n";
    }

    public function accept(ScheduleManagementVisitor $scheduleManagementVisitor) {
        $scheduleManagementVisitor->visitDayShift($this);
    }
}