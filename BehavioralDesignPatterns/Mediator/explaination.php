<?php 

//What is it?
//The Mediator pattern defines an object that encapsulates how a set of objects interact, 
//promoting loose coupling by preventing direct communication between them. It’s about centralizing communication.

//Centralizes communication between objects to reduce direct dependencies.

//Key Components:
//Mediator: An interface or abstract class defining methods for communication between colleague objects.
//Concrete Mediator: Implements the mediator interface, coordinating interactions between colleagues.
//Colleague: Objects that interact through the mediator, holding a reference to it.

//How it works:
//Colleagues communicate by sending messages to the mediator instead of directly to each other.
//The mediator receives messages, determines the appropriate response, and routes communication to other colleagues.
//This reduces direct dependencies, as colleagues only know about the mediator.

//Example Use Case:
//A chat application where users (colleagues) send messages through a chat server (mediator) instead of directly to each other.

//When to Use:
//When multiple objects need to interact in complex ways, and direct communication would create tight coupling.
//To centralize control logic for interactions (e.g., in GUI frameworks or messaging systems).
//When you want to simplify maintenance by managing interactions in one place.

//Pros:
//Reduces coupling between objects by centralizing communication.
//Simplifies adding new colleagues, as they only interact with the mediator.
//Centralizes control logic, making it easier to modify interactions.

//Cons:
//The mediator can become complex if it handles too many interactions (God object risk).
//May introduce a single point of failure.
//Adds overhead for simple interactions.