<?php 

//The Memento Design Pattern is ideal for scenarios where you need to capture and restore 
//an object’s internal state without violating encapsulation, typically to support undo/redo functionality or checkpointing. 
//It allows you to save snapshots of an object’s state and revert to them later.

//Use Cases for the Memento Design Pattern

//1-Undo/Redo in Text Editors
//Scenario: A text editor (e.g., Microsoft Word, Google Docs) allows users to undo or redo actions like typing, formatting, or deleting text.
//Why Memento?: Each action modifies the document’s state (e.g., text content, cursor position). 
//The Memento pattern captures the document’s state before each action, storing it in a memento for later restoration.
//Example:
//Originator: TextDocument (stores content and cursor position).
//Memento: TextDocumentMemento (saves content and cursor state).
//Caretaker: UndoManager (maintains a stack of mementos).
//Usage: Typing “Hello” creates a memento of the previous state. Undoing restores the document to its prior state.
//Benefit: Supports multiple levels of undo/redo and keeps the document’s state encapsulated.


//2-Game State Checkpoints
//Scenario: A video game saves a player’s progress (e.g., position, health, inventory) at checkpoints or save points to allow resuming later.
//Why Memento?: The game’s state (e.g., player data) is captured in a memento, 
//which can be stored and restored when the player reloads the game or dies.
//Example:
//Originator: Player (tracks position, health, inventory).
//Memento: PlayerMemento (saves player state).
//Caretaker: GameSaveManager (stores mementos for save slots).
//Usage: At a checkpoint, the game saves the player’s state. If the player dies, the game restores the last checkpoint’s state.
//Benefit: Allows flexible save/load functionality without exposing the player’s internal data.


//3-Database Transaction Rollbacks
//Scenario: A database application supports transactions (e.g., inserting or updating records) and 
//needs to roll back changes if a transaction fails.
//Why Memento?: The database’s state (e.g., table data) is captured in a memento before a transaction. 
//If the transaction fails, the memento is used to restore the previous state.
//Example:
//Originator: DatabaseTable.
//Memento: TableMemento (saves table data).
//Caretaker: TransactionManager (stores mementos for rollback).
//Usage: Before updating a record, the table’s state is saved. If the update fails, the table is restored to its prior state.
//Benefit: Ensures data consistency and supports rollback without exposing internal table structures.


//4-Configuration Management in Applications
//Scenario: A software application allows users to modify settings (e.g., theme, font size, language) 
//and revert to previous configurations if needed.
//Why Memento?: The application’s settings are captured in a memento before changes are applied, 
//allowing users to undo or revert to a previous configuration.
//Example:
//Originator: SettingsManager (stores current settings).
//Memento: SettingsMemento (saves settings like theme and font).
//Caretaker: ConfigurationHistory (stores mementos).
//Usage: Changing the theme to “dark” saves the current “light” theme in a memento. The user can revert to the “light” theme later.
//Benefit: Simplifies configuration management and supports multiple restore points.


//5-Drawing Application Undo/Redo
//Scenario: A graphic design tool (e.g., Photoshop, Canva) allows users to perform actions like drawing shapes, 
//applying filters, or moving objects, with undo/redo support.
//Why Memento?: Each action modifies the canvas’s state, which is saved in a memento. Undoing an action restores the canvas to a previous state.
//Example:
//Originator: Canvas (stores shapes, colors, positions).
//Memento: CanvasMemento (saves canvas state).
//Caretaker: UndoRedoStack (manages mementos).
//Usage: Drawing a circle saves the canvas state. Undoing removes the circle by restoring the prior state.
//Benefit: Supports complex undo/redo operations without exposing canvas internals.


//6-Version Control for Documents
//Scenario: A collaborative document editing system (e.g., a wiki or CMS) tracks revisions to allow reverting to earlier versions.
//Why Memento?: Each document revision is stored as a memento, capturing the document’s state at a specific point in time for restoration.
//Example:
//Originator: Document.
//Memento: DocumentMemento (saves document content and metadata).
//Caretaker: VersionControl (stores mementos for revisions).
//Usage: Editing a wiki page creates a memento. Users can revert to a previous revision if needed.
//Benefit: Provides version history and rollback without exposing document internals.


//7-State Restoration in Web Forms
//Scenario: A web application with complex forms (e.g., a multi-step registration form) allows users 
//to save progress and resume later or undo changes.
//Why Memento?: The form’s state (e.g., field values) is saved in a memento, allowing restoration if the user navigates away or makes errors.
//Example:
//Originator: Form.
//Memento: FormMemento (saves field values).
//Caretaker: FormHistory (stores mementos).
//Usage: Filling out a form saves its state. If the user clicks “undo” or reloads, the form is restored to a previous state.
//Benefit: Enhances user experience by preserving form data and supporting undo.


//8-Simulation Rollbacks
//Scenario: A simulation tool (e.g., for physics experiments or financial modeling) allows users to test
//scenarios and revert to previous states if results are unsatisfactory.
//Why Memento?: The simulation’s state (e.g., variables, parameters) is saved in a memento before each step, 
//enabling rollback to earlier states.
//Example:
//Originator: Simulation.
//Memento: SimulationMemento (saves variables and parameters).
//Caretaker: SimulationHistory (stores mementos).
//Usage: Running a simulation step saves the current state. If the results are incorrect, the simulation reverts to a prior state.
//Benefit: Supports experimentation with easy state restoration.



//Why Use the Memento Pattern?
//The Memento pattern is a great fit when:
//You need to save and restore an object’s state for undo/redo or checkpointing.
//You want to preserve encapsulation, ensuring the object’s internal state isn’t exposed to external classes.
//You need to manage state history, such as for multiple undo levels or version control.
//You anticipate frequent state changes that users might want to revert.