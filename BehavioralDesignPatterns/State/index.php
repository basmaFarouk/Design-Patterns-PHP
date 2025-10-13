<?php  
namespace BehavioralDesignPatterns\State;

// Usage Example
$order = new Order("Laptop", 999.99);
$orderManagement = new OrderManagement($order);

// Simulate order lifecycle
echo "=== Order Lifecycle Simulation ===" . PHP_EOL;
$orderManagement->processOrder();  // Process the new order
$orderManagement->shipOrder();     // Ship it
$orderManagement->deliverOrder();  // Deliver it
$orderManagement->deliverOrder();  // Try to deliver again (already delivered)

echo PHP_EOL . "=== Cancellation Example (from New State) ===" . PHP_EOL;
$order2 = new Order("Book", 19.99);
$orderManagement2 = new OrderManagement($order2);
$orderManagement2->cancelOrder();  // Cancel from new state

echo PHP_EOL . "=== Invalid Action in Cancelled State ===" . PHP_EOL;
$orderManagement2->processOrder(); // Try to process a cancelled order