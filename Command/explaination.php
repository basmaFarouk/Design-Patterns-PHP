<?php  

//What is it?
//The Command pattern encapsulates a request as an object, allowing parameterization of clients with different requests, 
//queuing, logging, or undoing operations. It’s about representing actions as objects.

//Key Components:
//Command: An interface or abstract class defining a method (e.g., execute) for commands.
//Concrete Command: Implements the command interface, specifying the receiver and action to perform.
//Receiver: The object that performs the actual work when the command is executed.
//Invoker: Triggers the command’s execution (holds and calls the command).
//Client: Creates commands and assigns them to the invoker.

//How it works:
//The client creates a command object, specifying the receiver and action.
//The command is passed to the invoker.
//The invoker calls the command’s execute method, which delegates to the receiver to perform the action.
//Optionally, commands can support undo or other operations.

//Example Use Case:
//A text editor with commands for actions like copy, paste, or undoable operations.

//When to Use:
//When you need to encapsulate actions as objects (e.g., for undo/redo, queuing, or logging).
//To decouple the object that invokes an operation from the one that performs it.
//For parameterized or delayed execution of requests.

//What it means: The Command pattern separates the object that triggers an action (the invoker) 
//from the object that knows how to perform it (the receiver). The invoker doesn’t need to know 
//the details of how the action is carried out—it just calls the command’s execute method.
//Why it’s useful: This decoupling promotes flexibility and maintainability. 
//You can change the receiver or the action’s implementation without modifying the invoker. 
//It also allows you to reuse the same invoker with different commands.
//Example: In a remote control app (invoker), you can assign a TurnOnLightCommand or PlayMusicCommand to a button. 
//The button doesn’t need to know how the light or music player (receivers) work—it just calls execute on the assigned command.

//Pros:
//Decouples invoker from receiver, promoting flexibility.
//Supports undo/redo and command queuing.
//Easy to add new commands without changing existing code.

//Cons:
//Can lead to many command classes if there are many actions.
//Increases complexity for simple operations.
//Requires additional memory to store command objects.