<?php

// The Template Method Design Pattern defines the skeleton of an algorithm in a method, 
// deferring some steps to subclasses while keeping the overall structure fixed. 
// It is ideal for situations where you want to enforce a consistent algorithm structure 
// while allowing specific steps to be customized by subclasses.

// Use Cases for the Template Method Design Pattern

// 1-Report Generation
// Scenario: A reporting tool generates reports in different formats (e.g., PDF, CSV, HTML) 
// but follows a fixed process: fetch data, format data, and save the report.
// Why Template Method?: The overall report generation process is consistent, 
// but specific steps (e.g., formatting) vary by output type. 
// The Template Method pattern allows defining the process in a base class while letting subclasses customize the formatting step.
// Example:
// - Template: Abstract `ReportGenerator` class with a `generateReport` template method (fetchData, formatData, saveReport).
// - Subclasses: `PdfReport`, `CsvReport`, `HtmlReport` override `formatData` to produce the desired output format.
// - Usage: The tool calls `generateReport` on a `PdfReport` instance to produce a PDF report, following the fixed process.
// - Benefit: New report formats can be added by creating new subclasses without changing the core report generation logic.

// 2-Game Loop in Video Games
// Scenario: A game engine implements a game loop (e.g., initialize, update, render) for different game genres (e.g., RPG, FPS, Puzzle).
// Why Template Method?: The game loop structure is fixed across all games, 
// but specific steps like updating game state or rendering graphics vary by game type. 
// The Template Method pattern ensures consistency while allowing customization.
// Example:
// - Template: Abstract `Game` class with a `runGameLoop` template method (initialize, update, render).
// - Subclasses: `RpgGame`, `FpsGame`, `PuzzleGame` override `update` and `render` for game-specific logic.
// - Usage: The engine calls `runGameLoop` on an `RpgGame` instance, ensuring the standard loop with RPG-specific updates and rendering.
// - Benefit: New game types can be added without modifying the core game loop structure.

// 3-Data Processing Pipelines
// Scenario: An ETL (Extract, Transform, Load) system processes data from various sources (e.g., databases, APIs, files) 
// with a fixed sequence: extract data, transform data, load data.
// Why Template Method?: The ETL process follows a consistent sequence, 
// but the extraction, transformation, or loading steps differ based on the data source or destination. 
// The Template Method pattern allows defining the pipeline while enabling customization of steps.
// Example:
// - Template: Abstract `EtlProcessor` class with a `processData` template method (extract, transform, load).
// - Subclasses: `DatabaseEtl`, `ApiEtl`, `FileEtl` override `extract` and `transform` for specific data sources.
// - Usage: The system calls `processData` on a `DatabaseEtl` instance to process database data, following the fixed ETL sequence.
// - Benefit: New data sources or destinations can be supported by adding new subclasses without altering the ETL pipeline.

// 4-Web Request Processing
// Scenario: A web framework handles HTTP requests with a fixed pipeline: authenticate, validate input, process request, send response.
// Why Template Method?: The request-handling process is standardized, 
// but steps like validation or processing vary depending on the endpoint or application.
// The Template Method pattern ensures a consistent pipeline while allowing customization.
// Example:
// - Template: Abstract `RequestHandler` class with a `handleRequest` template method (authenticate, validate, process, respond).
// - Subclasses: `UserRequestHandler`, `OrderRequestHandler` override `validate` and `process` for specific endpoints.
// - Usage: The framework calls `handleRequest` on a `UserRequestHandler` to process user-related requests, following the fixed pipeline.
// - Benefit: New endpoints can be added by creating new subclasses without modifying the request-handling framework.

// 5-Unit Testing Frameworks
// Scenario: A testing framework executes tests with a fixed process: set up, run test, tear down.
// Why Template Method?: The test execution process is consistent across all tests, 
// but the setup, test logic, and teardown vary by test case. 
// The Template Method pattern enforces the process while allowing customization.
// Example:
// - Template: Abstract `TestCase` class with a `runTest` template method (setUp, execute, tearDown).
// - Subclasses: `DatabaseTest`, `ApiTest` override `setUp` and `execute` for specific test scenarios.
// - Usage: The framework calls `runTest` on a `DatabaseTest` instance to run a database test, following the fixed process.
// - Benefit: New test types can be added without changing the core test execution logic.

// 6-Workflow Automation
// Scenario: A business process automation system executes workflows (e.g., order processing, employee onboarding) 
// with a fixed sequence: validate input, process task, notify stakeholders.
// Why Template Method?: The workflow sequence is standardized, 
// but validation and processing steps vary by workflow type. 
// The Template Method pattern ensures consistency while allowing customization.
// Example:
// - Template: Abstract `Workflow` class with a `executeWorkflow` template method (validate, process, notify).
// - Subclasses: `OrderWorkflow`, `OnboardingWorkflow` override `validate` and `process` for specific tasks.
// - Usage: The system calls `executeWorkflow` on an `OrderWorkflow` instance to process an order, following the fixed sequence.
// - Benefit: New workflows can be added by creating new subclasses without modifying the core workflow engine.

// 7-Cooking Recipe System
// Scenario: A cooking app outlines a recipe process (e.g., prepare ingredients, cook, serve) for different dishes.
// Why Template Method?: The recipe process is consistent across dishes, 
// but preparation and cooking steps vary by recipe. 
// The Template Method pattern ensures a standard process while allowing customization.
// Example:
// - Template: Abstract `Recipe` class with a `prepareDish` template method (prepareIngredients, cook, serve).
// - Subclasses: `PizzaRecipe`, `SoupRecipe` override `prepareIngredients` and `cook` for dish-specific steps.
// - Usage: The app calls `prepareDish` on a `PizzaRecipe` instance to guide the user through making a pizza, following the fixed process.
// - Benefit: New recipes can be added without changing the core recipe execution logic.

// Why Use the Template Method Pattern?
// The Template Method pattern is a great fit when:
// - You have a fixed algorithm structure but need to allow customization of specific steps.
// - You want to enforce a consistent process across different implementations to ensure uniformity.
// - You want to reduce code duplication by centralizing shared logic in a base class.
// - You anticipate extending behavior for new scenarios without modifying the core algorithm.

// General Benefits Across Use Cases
// 1-Consistency: Ensures a standardized algorithm structure across all implementations.
// 2-Code Reusability: Centralizes common logic in the base class, reducing duplication.
// 3-Extensibility: New variations can be added by creating subclasses without changing the template method.
// 4-Maintainability: Changes to the core algorithm only require updates in the base class.