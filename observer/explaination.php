<?php  
//What is it?
//The Observer pattern defines a one-to-many dependency between objects so that when one object (the subject) changes its state, 
//all its dependent objects (observers) are notified and updated automatically. It’s about event-driven communication.

//Key Components:
//Subject: Maintains a list of observers, provides methods to add/remove observers, and notifies them of state changes.
//Observer: Defines an interface (or abstract class) with an update method that observers implement.
//Concrete Subject: Tracks state changes and notifies observers.
//Concrete Observer: Implements the update logic to react to subject changes.

//How it works:
//Observers register with the subject.
//When the subject’s state changes, it calls a notify method.
//The notify method triggers the update method on all registered observers.
//Observers fetch the updated state (pull model) or receive it directly (push model).

//When to Use:
//When multiple objects need to react to state changes in another object.
//For implementing event-handling systems (e.g., GUI frameworks, pub-sub systems).

//Pros:
//Promotes loose coupling between subject and observers.
//Supports dynamic addition/removal of observers.
//Enables broadcasting to multiple objects.

//Cons:
//Can lead to memory leaks if observers aren’t properly detached.
//Notification overhead grows with many observers.
//Observers may depend on subject state, risking tight coupling if not designed carefully.