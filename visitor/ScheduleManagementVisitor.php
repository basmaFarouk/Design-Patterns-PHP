<?php
namespace Visitor;

interface ScheduleManagementVisitor {
    public function visitDayShift(DayShiftScheduleManagement $dayShiftScheduleManagement);
    public function visitNightShift(NightShiftScheduleManagement $nightShiftScheduleManagement);
    public function visitRemoteWorkShift(RemoteWorkShiftScheduleManagement $remoteWorkShiftScheduleManagement);
}