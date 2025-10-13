<?php 

//The Chain of Responsibility Design Pattern is ideal for scenarios where a request needs 
//to be handled by one of several potential handlers, and the specific handler isn’t known in advance. 
//It promotes loose coupling by passing the request along a chain of handlers until one processes it or the chain ends.

//Use Cases for the Chain of Responsibility Design Pattern

//1-Customer Support Ticket System
//Scenario: A helpdesk system routes customer issues to different support levels (e.g., Level 1, Level 2, Manager) based on issue complexity.
//Why Chain of Responsibility?: Each support level can attempt to resolve the issue or pass it to the next level if it’s too complex. 
//The client (customer) doesn’t need to know which level handles the issue.
//Example:
//Handlers: Level1Support, Level2Support, ManagerSupport.
//Request: A ticket with a type (e.g., “basic,” “advanced,” “critical”).
//Usage: A basic issue is resolved by Level 1; an advanced issue is passed to Level 2; a critical issue goes to the manager.
//Benefit: New support levels can be added to the chain without modifying existing handlers.


//2-Event Handling in GUI Systems
//Scenario: A graphical user interface (GUI) processes events (e.g., mouse clicks, key presses) by passing them 
//through a hierarchy of components (e.g., button, panel, window).
//Why Chain of Responsibility?: Each component can handle the event or pass it to its parent if it cannot. 
//This avoids hardcoding event-handling logic.
//Example:
//Handlers: Button, Panel, Window.
//Request: A mouse click event.
//Usage: A click on a button is handled by the button; if the button doesn’t handle it, the event is passed to the panel, then the window.
//Benefit: Simplifies event delegation and supports dynamic component hierarchies.


//3-Logging Frameworks
//Scenario: A logging system processes log messages at different levels (e.g., debug, info, error) and 
//routes them to appropriate destinations (e.g., console, file, database).
//Why Chain of Responsibility?: Each logger checks if it can handle the message based on its level or type and 
//either processes it or passes it to the next logger.
//Example:
//Handlers: ConsoleLogger, FileLogger, DatabaseLogger.
//Request: A log message with a severity level (e.g., “error”).
//Usage: An error message is logged to the console and file but passed to the database logger for critical errors.
//Benefit: New loggers can be added to the chain without changing existing ones.


//4-Request Processing in Web Servers
//Scenario: A web server processes HTTP requests through a series of middleware components (e.g., authentication, logging, compression).
//Why Chain of Responsibility?: Each middleware component processes the request (e.g., authenticates the user) 
//or passes it to the next component. This allows modular request handling.
//Example:
//Handlers: AuthMiddleware, LoggingMiddleware, CompressionMiddleware.
//Request: An HTTP request.
//Usage: The request passes through authentication, then logging, and finally compression before reaching the application.
//Benefit: Middleware can be reordered or extended without modifying the server’s core logic.


//5-Approval Workflows
//Scenario: A purchase order system requires approvals from different levels of authority (e.g., team lead, manager, director)
// based on the order amount.
//Why Chain of Responsibility?: Each approver checks if they have the authority to approve the order; if not, they pass it to the next level.
//Example:
//Handlers: TeamLead, Manager, Director.
//Request: A purchase order with an amount (e.g., $500, $5000, $50000).
//Usage: A $500 order is approved by the team lead; a $50000 order is passed to the director.
//Benefit: New approval levels can be added easily, and the chain enforces a clear hierarchy.


//6-Error Handling in Applications
//Scenario: An application handles exceptions by passing them through a chain of handlers (e.g., log to file, notify admin, display to user).
//Why Chain of Responsibility?: Each handler attempts to process the exception or passes it to the next handler, 
//ensuring flexible and modular error handling.
//Example:
//Handlers: LogErrorHandler, NotifyAdminHandler, UserDisplayHandler.
//Request: An exception object.
//Usage: A minor error is logged; a critical error is logged and notifies the admin; a user-facing error is displayed.
//Benefit: New error-handling strategies can be added without modifying existing code.


//7-Authentication Pipelines
//Scenario: A system authenticates users through multiple methods (e.g., password check, two-factor authentication, biometrics) in sequence.
//Why Chain of Responsibility?: Each authentication step checks if it can validate the user; if not, it passes the request to the next step.
//Example:
//Handlers: PasswordAuthHandler, TwoFactorAuthHandler, BiometricAuthHandler.
//Request: User credentials.
//Usage: If the password is valid but two-factor is required, the request is passed to the two-factor handler.
//Benefit: New authentication methods can be added to the chain without changing the login process.


//8-ATM Cash Dispensing
//Scenario: An ATM dispenses cash by breaking down the requested amount into denominations (e.g., $100, $50, $20 bills) 
//through a chain of dispensers.
//Why Chain of Responsibility?: Each dispenser handles a specific denomination and passes the remaining amount to the next dispenser.
//Example:
//Handlers: HundredDollarDispenser, FiftyDollarDispenser, TwentyDollarDispenser.
//Request: A withdrawal amount (e.g., $170).
//Usage: The $100 dispenser provides one $100 bill, then passes $70 to the $50 dispenser, which provides one $50 bill, then passes $20 to the $20 dispenser.
//Benefit: New denominations can be added to the chain without modifying the existing dispensers.


//Why Use the Chain of Responsibility Pattern?
//The Chain of Responsibility pattern is a great fit when:
//Multiple objects can handle a request, and the handler is determined at runtime.
//You want to decouple the sender from the receiver, allowing the request to flow through a chain.
//You need flexible, sequential processing where handlers can be added, removed, or reordered.
//You want to avoid hardcoding which object handles a request, promoting modularity.