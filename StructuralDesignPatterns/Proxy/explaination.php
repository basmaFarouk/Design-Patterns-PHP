<?php 

/*
WHAT IS THE PROBLEM?
You're developing a web application that interacts with various remote APIs to fetch data. However, 
fetching data from remote APIs can be time-consuming and resource-intensive, especially for frequently accessed data.
Additionally, you want to reduce the load on the remote APIs and improve the responsiveness of your application.


Proxy Design Pattern
The Proxy Design Pattern is a structural design pattern that provides a surrogate or placeholder for 
another object to control access to it. The proxy acts as an intermediary between the client and the real object, 
adding functionality like lazy loading, caching, access control, or logging without modifying the real object's code.

Key Concepts
Subject: An interface or abstract class that defines the operations supported by both the real object and the proxy.
Real Subject: The actual object that performs the core functionality.
Proxy: A class that implements the same interface as the Real Subject, controlling access to it and potentially adding extra behavior (e.g., caching, validation, or logging).
Client: The entity that interacts with the proxy, unaware of whether it’s dealing with the proxy or the real object.

The proxy forwards requests to the Real Subject when appropriate, potentially performing additional tasks before or after the request.

Purpose
The Proxy pattern is used to:
Control access to the Real Subject (e.g., restricting access based on permissions).
Add functionality like caching, logging, or lazy initialization without altering the Real Subject.
Defer expensive operations until they are needed (lazy loading).
Simplify interaction with complex or remote systems (e.g., remote APIs or databases).
Protect the Real Subject from direct access or misuse.


When to Use the Proxy Pattern:
When you need to add a layer of control or optimization (e.g., caching API responses to reduce network calls).
When you want to delay the creation or loading of a resource-intensive object until it’s needed (lazy loading).
When you need to enforce access control or validate requests before they reach the real object.
When you want to log or monitor interactions with an object.
When working with remote resources (e.g., APIs or web services) and want to abstract the complexity.


Structure:
Subject: An interface or abstract class defining the operations that both the Proxy and Real Subject implement.
Real Subject: The concrete class that performs the actual work.
Proxy: A class that implements the Subject interface, holds a reference to the Real Subject, and controls access to it.
Client: Interacts with the Proxy through the Subject interface, unaware of the proxy’s presence.

The Proxy typically uses composition to hold a reference to the Real Subject and delegates requests to it, adding extra logic as needed.

Advantages:
Controlled Access: The proxy can restrict or validate access to the Real Subject (e.g., checking permissions).
Performance Optimization: Caching or lazy loading can reduce resource usage (e.g., avoiding repeated API calls).
Transparency: The client interacts with the proxy as if it were the real object, thanks to the shared interface.
Extensibility: Additional functionality (e.g., logging, monitoring) can be added without modifying the Real Subject.
Protection: Shields the Real Subject from direct access, reducing the risk of misuse.


Disadvantages:
Increased Complexity: Introducing a proxy adds an extra layer of abstraction, which can complicate the codebase.
Performance Overhead: The proxy may introduce slight overhead due to additional processing (e.g., checking cache or permissions).
Over-Engineering Risk: If the proxy’s added functionality isn’t necessary, it may unnecessarily complicate a simple system.


Types of Proxies:
Virtual Proxy: Delays the creation or loading of the Real Subject until needed (e.g., lazy loading of large objects).
Protection Proxy: Restricts access to the Real Subject based on permissions or conditions.
Caching Proxy: Stores results of expensive operations to improve performance (as in the example below).
Remote Proxy: Represents a remote object locally, handling communication details (e.g., for APIs or web services).
Logging Proxy: Logs requests or responses for debugging or monitoring.