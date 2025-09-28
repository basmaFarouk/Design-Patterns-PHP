<?php 

//What is it?
//The Memento pattern captures and externalizes an object’s internal state so that it can be restored later, 
//without violating encapsulation. It’s about saving and restoring state for undo/redo functionality.

//Key Components:
//Originator: The object whose state needs to be saved and restored. 
//It creates a memento to store its state and can restore its state from a memento.
//Memento: A snapshot of the originator’s state, stored in a way that restricts access (e.g., only the originator can access the full state).
//Caretaker: Manages mementos (e.g., stores them in a stack for undo/redo) but does not modify or inspect their contents.

//How it works:
//The originator creates a memento containing a snapshot of its current state.
//The caretaker stores the memento (e.g., in a history stack).
//To restore a previous state, the caretaker passes the memento back to the originator, which uses it to revert its state.

//Example Use Case:
//A text editor saving the state of a document (e.g., text content and cursor position) to support undo/redo operations.

//When to Use:
//When you need to save and restore an object’s state (e.g., for undo/redo).
//To preserve encapsulation while allowing state restoration.
//For checkpointing or snapshotting in applications like games or editors.

//Pros:
//Maintains encapsulation by restricting access to the originator’s state.
//Simplifies undo/redo functionality.
//Allows multiple state snapshots to be stored.

//Cons:
//Can consume significant memory if mementos store large states or are kept for a long time.
//May require careful management of memento lifecycle to avoid memory leaks.
//Adds complexity for simple state management needs.