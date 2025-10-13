<?php 

//What is it?
//The Chain of Responsibility pattern passes a request along a chain of handlers, 
//where each handler decides either to process the request or pass it to the next handler in the chain. 
//It’s about decoupling senders from receivers and allowing multiple objects to handle a request.

//Key Components:
//Handler: An interface or abstract class defining a method to handle requests and a reference to the next handler.
//Concrete Handler: Implements the handler interface, processes requests it can handle, or forwards them to the next handler.
//Client: Initiates the request and sends it to the first handler in the chain.

//How it works:
//The client sends a request to the first handler in the chain.
//Each handler checks if it can process the request. If it can, it handles it; if not, it passes the request to the next handler.
//The request travels through the chain until it’s handled or reaches the end (if no handler processes it, it may be ignored or raise an error).

//When to Use:
//When multiple objects might handle a request, and the handler isn’t known in advance.
//To avoid coupling the sender of a request to its receiver.
//For sequential processing (e.g., logging, authentication pipelines).

//Pros:
//Decouples sender and receiver, promoting flexibility.
//Allows dynamic chain configuration (add/remove handlers).
//Each handler has a single responsibility.

//Cons:
//Request may go unhandled if no handler can process it.
//Can be slow if the chain is long.
//Debugging can be tricky if the chain is complex.