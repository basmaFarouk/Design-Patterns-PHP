<?php
namespace Visitor;

class ManageLeaveRequestsVisitor implements ScheduleManagementVisitor {
    public function visitDayShift(DayShiftScheduleManagement $dayShiftScheduleManagement) {
        echo "Managing leave requests for day shift.\n";
    }

    public function visitNightShift(NightShiftScheduleManagement $nightShiftScheduleManagement) {
        echo "Managing leave requests for night shift.\n";
    }

    public function visitRemoteWorkShift(RemoteWorkShiftScheduleManagement $remoteWorkShiftScheduleManagement) {
        echo "Managing leave requests for remote work shift.\n";
    }
}