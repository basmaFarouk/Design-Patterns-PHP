<?php 

//What is it?
//The Visitor pattern allows you to add new operations to a set of objects without modifying their classes 
//by separating the operations into a visitor object. It’s about extending functionality for a group of objects.

//Key Components:
//Visitor: An interface or abstract class defining methods for visiting each type of element in the object structure (e.g., visit_concrete_element_a()).
//Concrete Visitor: Implements the visitor interface, defining the operations to perform on each element type.
//Element: An interface or abstract class defining an accept method that takes a visitor.
//Concrete Element: Implements the element interface, calling the visitor’s appropriate method via accept.
//Object Structure: A collection of elements (e.g., a composite structure) that can be traversed by a visitor.

//How it works:
//Elements implement an accept method that takes a visitor and calls the visitor’s method specific to the element’s type.
//The visitor defines operations for each element type.
//The client passes a visitor to the object structure or individual elements, which trigger the visitor’s operations.

//Example Use Case:
//A reporting system for different types of documents (e.g., PDF, Word) where you want to add operations l
//like exporting or analyzing without modifying the document classes.

//When to Use:
//When you need to perform operations on a set of objects with different classes without modifying those classes.
//To separate operations from the object structure (e.g., for reporting, serialization, or validation).
//When the object structure is stable, but new operations are frequently added.

//Pros:
//Allows adding new operations without changing element classes (Open/Closed Principle).
//Centralizes related operations in a single visitor class.
//Supports double dispatch (operation depends on both visitor and element type).

//Cons:
//Can be complex to implement, especially with many element types.
//Requires modifying elements to add a new accept method if the object structure changes.
//Violates encapsulation if visitors need access to private element data.