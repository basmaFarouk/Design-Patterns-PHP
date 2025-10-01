<?php 

//The State Design Pattern is ideal for scenarios where an object’s behavior changes based on its internal state, 
//and you want to encapsulate state-specific behavior into separate classes. 
//It allows an object to appear as if it changes its class when its state changes, simplifying complex state-dependent logic.

//Use Cases for the State Design Pattern

//1-Vending Machine Operations
//Scenario: A vending machine behaves differently based on its state (e.g., no coin, has coin, dispensing, out of stock).
//Why State?: Each state (e.g., NoCoinState, HasCoinState) defines specific behaviors for actions like inserting a coin or dispensing an item. 
//The pattern avoids complex conditional statements by delegating behavior to the current state.
//Example:
//Context: VendingMachine.
//States: NoCoinState, HasCoinState, DispensingState, OutOfStockState.
//Usage: In NoCoinState, inserting a coin transitions to HasCoinState; in HasCoinState, selecting an item triggers dispensing and moves to DispensingState.
//Benefit: Simplifies state transitions and keeps state-specific logic modular.


//2-Order Processing in E-Commerce
//Scenario: An online order goes through states like pending, confirmed, shipped, delivered, or canceled, 
//with different behaviors for each state (e.g., canceling is allowed only in pending or confirmed states).
//Why State?: Each state encapsulates the allowed actions and transitions, making the order’s behavior clear and maintainable.
//Example:
//Context: Order.
//States: PendingState, ConfirmedState, ShippedState, DeliveredState.
//Usage: In PendingState, the order can be confirmed or canceled; in ShippedState, it can only be marked as delivered.
//Benefit: Reduces conditional logic and makes it easy to add new states (e.g., ReturnedState).


//3-Traffic Light System
//Scenario: A traffic light switches between states like red, green, and yellow, 
//with each state dictating specific behavior (e.g., stop, go, caution).
//Why State?: Each state defines the light’s behavior and transitions (e.g., red to green after a timer). 
//The pattern avoids complex conditionals for managing state changes.
//Example:
//Context: TrafficLight.
//States: RedState, GreenState, YellowState.
//Usage: In RedState, cars stop, and the light transitions to GreenState after a timer; in GreenState, cars go.
//Benefit: Encapsulates state-specific behavior and transitions, making the system easier to extend.


//4-Game Character Behavior
//Scenario: A game character’s behavior changes based on its state (e.g., idle, running, attacking, injured, dead).
//Why State?: Each state defines how the character responds to inputs (e.g., attack only in IdleState or RunningState). 
//The pattern simplifies managing complex state transitions.
//Example:
//Context: PlayerCharacter.
//States: IdleState, RunningState, AttackingState, InjuredState.
//Usage: In InjuredState, the character moves slower and can’t attack; taking more damage transitions to DeadState.
//Benefit: Keeps state-specific logic modular and supports new states (e.g., PoweredUpState).


//5-Document Workflow in Approval Systems
//Scenario: A document in a workflow system moves through states like draft, under review, approved, or rejected, 
//with different actions allowed in each state.
//Why State?: Each state defines valid actions (e.g., submit for review in DraftState, approve in UnderReviewState) and transitions, 
//reducing complexity.
//Example:
//Context: Document.
//States: DraftState, UnderReviewState, ApprovedState, RejectedState.
//Usage: In DraftState, the document can be edited or submitted; in ApprovedState, it can be published.
//Benefit: Simplifies workflow logic and supports adding new states like ArchivedState.


//6-Media Player Controls
//Scenario: A media player (e.g., for audio or video) behaves differently based on its state (e.g., playing, paused, stopped).
//Why State?: Each state defines how the player responds to commands like play, pause, or stop, and manages transitions between states.
//Example:
//Context: MediaPlayer.
//States: PlayingState, PausedState, StoppedState.
//Usage: In PlayingState, pressing pause transitions to PausedState; in StoppedState, pressing play starts playback.
//Benefit: Encapsulates state-specific behavior, making the player’s logic clear and extensible.


//7-Network Connection Management
//Scenario: A network connection transitions through states like disconnected, connecting, connected, or error, 
//with different behaviors for each state.
//Why State?: Each state defines how the connection handles actions like sending data or reconnecting, and manages state transitions.
//Example:
//Context: NetworkConnection.
//States: DisconnectedState, ConnectingState, ConnectedState, ErrorState.
//Usage: In DisconnectedState, sending data is blocked, and a connect attempt moves to ConnectingState.
//Benefit: Simplifies complex connection logic and supports new states like ReconnectingState.


//8-Elevator Control System
//Scenario: An elevator operates in states like idle, moving up, moving down, or door open, 
//with specific behaviors for each state (e.g., opening doors only when idle).
//Why State?: Each state encapsulates allowed actions and transitions, avoiding complex conditionals for elevator operations.
//Example:
//Context: Elevator.
//States: IdleState, MovingUpState, MovingDownState, DoorOpenState.
//Usage: In IdleState, the elevator can open doors or start moving; in MovingUpState, it can only stop at floors.
//Benefit: Makes state transitions explicit and easy to extend with new states (e.g., EmergencyState).


//Why Use the State Pattern?
//The State pattern is a great fit when:
//An object’s behavior changes significantly based on its internal state.
//You want to avoid complex conditional statements (e.g., large if-else blocks) for state-dependent logic.
//You need to manage state transitions explicitly and encapsulate state-specific behavior.
//You anticipate adding new states or modifying transitions without affecting the core logic.