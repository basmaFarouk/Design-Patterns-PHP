<?php  

//What is it?
//The State pattern allows an object to alter its behavior when its internal state changes, 
//making it appear as though the object changes its class. It’s about managing state-dependent behavior.

//Key Components:
//Context: The class that holds a state and delegates behavior to the current state object.
//State Interface: Defines a common interface for all states (e.g., methods for state-specific actions).
//Concrete States: Implement the state interface with behavior for a specific state.

//How it works:
//The context maintains a reference to the current state object.
//Each state defines behavior for that state and can transition the context to another state.
//The context delegates requests to the current state, which handles them based on the state’s logic.

//Example Use Case:
//A vending machine that behaves differently based on its state (e.g., no coin, has coin, dispensing).

//State: Used to change an object's behavior based on its internal state, making it appear as if the object changes its class.
//The goal is to manage state transitions internally, like a finite state machine.
//Real-World Example: An order management system (like the one in your provided code). 
//An order transitions from "New" to "Processing" to "Shipped" to "Delivered," 
//with each state defining what actions are allowed (e.g., you can't cancel a delivered order).

//State: Switching is internal, managed by the Context or the states themselves. States may be aware of each other and can trigger transitions (e.g., from "Processing" to "Shipped" automatically).

//State: Use when an object's behavior depends on its state, and transitions between states are frequent (e.g., a video game with states like "Playing," "Paused," or "Game Over").

//When to Use:
//When an object’s behavior depends on its state, and state transitions are complex.
//To avoid large conditional statements for state-dependent behavior.
//When states have distinct behaviors and transitions.

//Pros:
//Encapsulates state-specific behavior, making it easier to manage.
//Simplifies the context by delegating behavior to state objects.
//Makes state transitions explicit and maintainable.

//Cons:
//Can lead to many state classes if there are numerous states.
//State transitions can become complex if not carefully managed.
//May introduce overhead for simple state machines.

