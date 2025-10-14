<?php 

//1- الـ Decorator حل مثالي لو محتاج تـ Assign سلوك جديد للـ Objects في الـ Runtime من غير ما تغير أو تكسر حاجة في الـ Existing Code بتاع الـ Object وهو بيشبه هنا الـ Visitor في الفايدة والقوة دي

//2- اما تكون حابب تزود Functionality جديد من غير ما تستعمل الـ Inheritance لـ Class عندك في الـ System

//The Decorator Design Pattern is a structural design pattern that allows you to extend or 
//modify the behavior of objects dynamically by adding responsibilities to them without altering their original code. 
//It follows the Open/Closed Principle, meaning you can extend functionality without modifying existing classes. 
//This pattern is particularly useful when you want to add features to objects in a flexible and reusable way, especially when subclassing would lead to an explosion of classes.

//Key Concepts
//Component:
//An abstract class or interface that defines the common interface for both the objects to be decorated and the decorators. 
//This ensures all objects (base and decorated) can be treated uniformly.
//Concrete Component:
//The original class that you want to decorate. It implements the component interface and provides the base behavior.
//Decorator:
//An abstract class or base class that also implements the component interface. 
//It contains a reference to a component object and delegates calls to it, allowing decorators to extend behavior.
//Concrete Decorator:
//A specific decorator class that extends the decorator class. It adds new behavior or modifies 
//the existing behavior of the component by overriding methods and calling the parent’s implementation.


//How It Works
//The decorator "wraps" the original object, adding new functionality while preserving the original interface.
//Multiple decorators can be stacked (chained) to combine behaviors, and the order of decoration matters.
//The client code interacts with the decorated object through the same interface as the original object, unaware of the added layers.

//Steps of the Pattern
//Define the Interface: Create a common interface (Beverage) for the component and decorators.
//Implement the Base Object: Create concrete components (Coffee, Tea) with basic behavior.
//Create the Decorator Base: Implement a decorator class (CondimentDecorator) that holds a component and delegates calls.
//Add Concrete Decorators: Extend the decorator with specific behaviors (MilkDecorator, etc.).
//Use the Pattern: Wrap the base object with decorators and call methods through the interface.

/*Benefits
Flexibility: Add or remove responsibilities at runtime.
Extensibility: New decorators can be added without changing existing code.
Single Responsibility: Each decorator handles one specific addition.
Avoids Class Explosion: Instead of creating subclasses for every combination (e.g., CoffeeWithMilk, CoffeeWithMilkAndSugar), you use decorators.

Drawbacks
Complexity: Can lead to many small classes and a complex object structure.
Debugging Difficulty: The chain of decorators may make it harder to trace behavior.
Performance: Adding multiple layers might introduce slight overhead due to method calls.

When to Use
When you need to add responsibilities to objects dynamically and transparently.
When subclassing would result in an unmanageable number of classes.
When you want to keep the core class unchanged while extending its behavior.

This pattern is widely used in frameworks (e.g., Java I/O streams, GUI components) and is ideal for 
scenarios like customizing products, adding features to streams, or enhancing UI elements, as demonstrated by your beverage example.