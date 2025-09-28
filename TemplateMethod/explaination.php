<?php 

//What is it?
//The Template Method pattern defines the skeleton of an algorithm in a base class, 
//allowing subclasses to override specific steps without changing the overall structure. 
//It’s about defining a fixed process with customizable steps.

//Key Components:
//Abstract Class: Defines the template method (the algorithm’s structure) and abstract methods for steps that subclasses must implement.
//Concrete Class: Implements the abstract methods to provide specific behavior for the algorithm’s steps.

//How it works:
//the base class provides a template method that outlines the algorithm’s steps.
//Some steps are implemented in the base class, while others are left abstract.
//Subclasses implement the abstract steps, customizing the algorithm’s behavior.
//Clients call the template method, which executes the algorithm using the subclass’s implementations.

//When to Use:
//When you want to enforce a consistent algorithm structure but allow flexibility in specific steps.
//For code reuse across similar processes with varying details (e.g., frameworks, workflows).

//Pros:
//Promotes code reuse by centralizing the algorithm’s structure.
//Enforces a consistent process across subclasses.
//Reduces duplication of common logic.

//Cons:
//Can limit flexibility since the algorithm’s structure is fixed.
//Subclasses may need to override multiple methods, increasing complexity.
//Tight coupling between base class and subclasses.