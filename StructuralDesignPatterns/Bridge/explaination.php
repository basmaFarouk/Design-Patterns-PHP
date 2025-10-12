<?php 

//The Bridge Design Pattern is a structural design pattern that decouples an abstraction from its implementation, 
//allowing the two to vary independently. This pattern is useful when you want to separate 
//an object's interface (what it does) from its implementation (how it does it) so that both can be modified or 
//extended without affecting each other.

//Key Concepts
//Abstraction: Defines the interface for the "control" part of the system (what the client interacts with).
//Implementation: Defines the interface for the underlying functionality and provides concrete implementations.
//Bridge: The connection between the abstraction and implementation, 
//typically through composition (the abstraction holds a reference to the implementation).
//Purpose: Allows you to change the implementation without modifying the abstraction and vice versa, promoting flexibility and extensibility.

//When to Use the Bridge Pattern
//When you want to separate an abstraction from its implementation so they can evolve independently.
//When you want to share an implementation among multiple objects.
//When you need to support multiple platforms or implementations for the same abstraction.
//When you want to avoid a permanent binding between an abstraction and its implementation.

//Structure
//Abstraction: A class or interface that defines the high-level control logic and holds a reference to an implementation object.
//Refined Abstraction: Extends the abstraction, adding more specific functionality.
//Implementor: An interface or abstract class defining the implementation's contract.
//Concrete Implementor: Provides specific implementations of the Implementor interface.
//The abstraction delegates work to the implementor via the bridge (composition).

//Advantages
//Decouples abstraction and implementation, allowing independent changes.
//Improves extensibility by enabling new abstractions or implementations without modifying existing code.
//Hides implementation details from the client.
//Reduces code duplication by sharing implementations.

//Disadvantages
//Increases complexity due to the separation of concerns.
//May lead to over-engineering if the abstraction-implementation split is unnecessary.