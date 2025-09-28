<?php
namespace Visitor;

class CalculateBonusVisitor implements ScheduleManagementVisitor {
    public function visitDayShift(DayShiftScheduleManagement $dayShiftScheduleManagement) {
        echo "Calculating bonus for day shift...\n";
    }

    public function visitNightShift(NightShiftScheduleManagement $nightShiftScheduleManagement) {
        echo "Calculating bonus for night shift...\n";
    }

    public function visitRemoteWorkShift(RemoteWorkShiftScheduleManagement $remoteWorkShiftScheduleManagement) {
        echo "Calculating bonus for remote work shift...\n";
    }
}