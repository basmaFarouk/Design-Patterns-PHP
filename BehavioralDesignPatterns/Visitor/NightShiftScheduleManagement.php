<?php
namespace BehavioralDesignPatterns\Visitor;

class NightShiftScheduleManagement implements ScheduleManagement {
    public function generateReport() {
        echo "Generating report for night shift...\n";
    }

    public function calculateOverTime() {
        echo "Calculating over time for night shift..\n";
    }

    public function accept(ScheduleManagementVisitor $scheduleManagementVisitor) {
        $scheduleManagementVisitor->visitNightShift($this);
    }
}