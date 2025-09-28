<?php
namespace Visitor;

class RemoteWorkShiftScheduleManagement implements ScheduleManagement {
    public function generateReport() {
        echo "Generating report for remote work shift...\n";
    }

    public function calculateOverTime() {
        echo "Calculating over time for remote work shift..\n";
    }

    public function accept(ScheduleManagementVisitor $scheduleManagementVisitor) {
        $scheduleManagementVisitor->visitRemoteWorkShift($this);
    }
}