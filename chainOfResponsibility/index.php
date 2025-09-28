<?php 
namespace chainOfResponsibility;
// Example usage
$authHandler = new AuthenticationMiddlewareHandler();
$authHandler->setNext($authz = new AuthorizationMiddlewareHandler());
$authz->setNext($sec = new SecurityChecksMiddlewareHandler());
$processor = new RequestProcessor($authHandler);

// Test case 1: Successful request
echo "Test Case 1: Fully valid request\n";
$request1 = new Request("GET", true, true, true);
$response1 = $processor->processRequest($request1);
echo "Result: " . $response1->getReason() . " (Success: " . ($response1->isSucceeded() ? 'true' : 'false') . ")\n\n";

// Test case 2: Authentication failure
echo "Test Case 2: Authentication failure\n";
$request2 = new Request("GET", false, true, true);
$response2 = $processor->processRequest($request2);
echo "Result: " . $response2->getReason() . " (Success: " . ($response2->isSucceeded() ? 'true' : 'false') . ")\n\n";

// Test case 3: Authorization failure
echo "Test Case 3: Authorization failure\n";
$request3 = new Request("GET", true, false, true);
$response3 = $processor->processRequest($request3);
echo "Result: " . $response3->getReason() . " (Success: " . ($response3->isSucceeded() ? 'true' : 'false') . ")\n\n";

// Test case 4: Security checks failure
echo "Test Case 4: Security checks failure\n";
$request4 = new Request("GET", true, true, false);
$response4 = $processor->processRequest($request4);
echo "Result: " . $response4->getReason() . " (Success: " . ($response4->isSucceeded() ? 'true' : 'false') . ")\n";