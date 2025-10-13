<?php

//What is it?
//The Strategy pattern defines a family of interchangeable algorithms, encapsulates each one, and allows them to be swapped at runtime. It’s about selecting behavior dynamically.

//Key Components:
//Context: The class that uses a strategy, maintaining a reference to a strategy object.
//Strategy Interface: Defines a common interface for all strategies (e.g., an execute method).
//Concrete Strategies: Implement the strategy interface with specific algorithms.

//How it works:
//The context holds a reference to a strategy object.
//The client sets or changes the strategy at runtime.
//The context delegates tasks to the strategy’s method, which executes the selected algorithm.

//Example Use Case:
//A payment system that supports multiple payment methods (e.g., credit card, PayPal, cryptocurrency).

//Strategy: Used to define a family of interchangeable algorithms, allowing the client to choose one at runtime. 
//The goal is to make algorithms independent and avoid complex conditional logic (e.g., if-else statements).

//Real-World Example: A payment system in an e-commerce platform. 
//The user can choose a payment method (e.g., Credit Card, PayPal, Apple Pay) at checkout, 
//and the system switches behavior accordingly without modifying core code.

//Strategy: Switching is external, controlled by the client. Strategies are independent and unaware of each other, and they don't need access to the Context's internal state.
//Client in Strategy: The external code that chooses and sets the strategy for the Context (e.g., by calling setStrategy()). It has full control over which algorithm is used.

//Strategy: Use when you need to select one algorithm from a set (e.g., sorting algorithms: QuickSort vs. MergeSort) and changes are rare during runtime.

//When to Use:
//When you need to switch between different algorithms or behaviors dynamically.
//To avoid conditional statements (e.g., if-else) for selecting behavior.
//When behaviors should be decoupled from the main class.

//Pros:
//Promotes loose coupling (strategies are independent).
//Easy to add new strategies without modifying the context.
//Supports runtime behavior changes.

//Cons:
//Clients must be aware of all strategies to choose one.
//Can increase the number of classes (one per strategy).
//Overhead if strategies are simple or rarely change.