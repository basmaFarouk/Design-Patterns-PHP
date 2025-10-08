<?php 

//The Adapter Design Pattern is a structural design pattern that allows objects with incompatible interfaces to work together. 
//It acts as a bridge between two interfaces by wrapping one object (the adaptee) 
//and converting its interface to match what another object (the client) expects. 
//This pattern is particularly useful when integrating legacy systems or third-party APIs with new code, 
//or when you need to make two systems with different interfaces interoperate.

//Key Components:
//Target Interface: The interface that the client expects to use (e.g., WeatherServiceAdapter in your provided code).
//Adaptee: The existing class or system with an incompatible interface that needs to be adapted (e.g., LegacyWeatherService or ThirdPartyWeatherService).
//Adapter: The class that implements the target interface and translates calls to the adaptee's interface (e.g., WeatherServiceAdaptee).
//Client: The code that interacts with the target interface, unaware of the adaptee or the adapter's internal workings.

//How It Works:
//The client calls methods on the adapter using the target interface.
//The adapter translates these calls into calls to the adaptee's methods, handling any necessary conversions (e.g., data format, method signatures).
//The adaptee performs the actual work, and the adapter returns the results to the client in the expected format.

//When to Use It:
//When you want to use an existing class but its interface doesn't match what the client expects.
//When integrating with third-party libraries or legacy systems that have incompatible interfaces.
//When you want to reuse existing functionality without modifying the original code.

//Benefits:
//Promotes code reuse without altering existing classes (Open/Closed Principle).
//Makes systems more flexible by allowing interoperability between incompatible interfaces.
//Simplifies client code by hiding the complexity of the adaptee.

//Drawbacks:
//Adds an extra layer of abstraction, which can slightly increase complexity.
//May introduce performance overhead due to the translation layer.