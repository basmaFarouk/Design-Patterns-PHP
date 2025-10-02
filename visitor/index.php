<?php 

// Example Usage: Demonstrating the Visitor Pattern with Shift Schedule Management
// This client code creates a collection of different shift schedule managements,
// applies various visitors to perform operations like calculating bonuses or managing leave requests,
// and also invokes the built-in methods like generateReport and calculateOverTime.
// The Visitor pattern allows adding new operations (e.g., via new visitors) without modifying the schedule classes.

// Include or assume the provided classes are autoloaded/imported
// For this example, we'll assume the namespace Visitor is used, and classes are defined as provided.

namespace Visitor;

use Visitor\DayShiftScheduleManagement;
use Visitor\NightShiftScheduleManagement;
use Visitor\RemoteWorkShiftScheduleManagement;
use Visitor\CalculateBonusVisitor;
use Visitor\ManageLeaveRequestsVisitor;

// Step 1: Create instances of different schedule managements (elements)
$dayShift = new DayShiftScheduleManagement();
$nightShift = new NightShiftScheduleManagement();
$remoteShift = new RemoteWorkShiftScheduleManagement();

// Step 2: Create a collection of schedules (e.g., an array representing a schedule system)
$schedules = [$dayShift, $nightShift, $remoteShift];

// Step 3: Demonstrate built-in methods (non-visitor operations) on individual schedules
echo "=== Built-in Operations (generateReport and calculateOverTime) ===\n";
$dayShift->generateReport();    // Output: Generating report for day shift...
$dayShift->calculateOverTime(); // Output: Calculating over time for day shift..

$nightShift->generateReport();  // Output: Generating report for night shift...
$nightShift->calculateOverTime(); // Output: Calculating over time for night shift..

$remoteShift->generateReport(); // Output: Generating report for remote work shift...
$remoteShift->calculateOverTime(); // Output: Calculating over time for remote work shift..

echo "\n";

// Step 4: Apply a Visitor - Calculate Bonus for all schedules
// Create a bonus calculator visitor
$bonusVisitor = new CalculateBonusVisitor();

// Traverse the collection and apply the visitor to each schedule
echo "=== Applying CalculateBonusVisitor ===\n";
foreach ($schedules as $schedule) {
    $schedule->accept($bonusVisitor); // This calls the appropriate visit method based on the schedule type
}
// Expected Output:
// Calculating bonus for day shift...
// Calculating bonus for night shift...
// Calculating bonus for remote work shift...

echo "\n";

// Step 5: Apply a Different Visitor - Manage Leave Requests for all schedules
// Create a leave requests manager visitor
$leaveVisitor = new ManageLeaveRequestsVisitor();

echo "=== Applying ManageLeaveRequestsVisitor ===\n";
foreach ($schedules as $schedule) {
    $schedule->accept($leaveVisitor); // Dispatches to the correct visit method
}
// Expected Output:
// Managing leave requests for day shift.
// Managing leave requests for night shift.
// Managing leave requests for remote work shift...

echo "\n";

// Step 6: Example of Adding a New Visitor (Extensibility Demo)
// Let's hypothetically add a new visitor for "ApproveVacationVisitor" (not provided in original code, but illustrates extensibility)
// Assume you create a new class ApproveVacationVisitor implementing ScheduleManagementVisitor with visit methods like:
// public function visitDayShift(DayShiftScheduleManagement $schedule) { echo "Approving vacation for day shift.\n"; }
// ... (similar for others)

// $vacationVisitor = new ApproveVacationVisitor();
// foreach ($schedules as $schedule) {
//     $schedule->accept($vacationVisitor);
// }
// This would work without changing any ScheduleManagement classes!

// Step 7: Mixed Usage - Apply Visitor After Built-in Operation
echo "=== Mixed: Generate Report then Apply Bonus Visitor ===\n";
$dayShift->generateReport(); // Built-in
$dayShift->accept($bonusVisitor); // Visitor operation
// Output: Generating report for day shift...
//         Calculating bonus for day shift...

// Benefits Demonstrated:
// - Schedules (elements) remain unchanged when adding new operations (visitors).
// - Visitors encapsulate type-specific logic (e.g., different bonus calc for shifts).
// - Easy traversal over a collection for uniform operations.
// - Promotes Open/Closed Principle: Open for extension (new visitors), closed for modification (no changes to elements).

