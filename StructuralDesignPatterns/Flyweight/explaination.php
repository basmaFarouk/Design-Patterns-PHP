<?php 

/*
WHAT IS THE PROBLEM?
You're developing a game which consists of a single player and enemies. 
Both of them have some common attributes like health bar, weapon and attack power.
There are two types of enemies (Weak, Strong) each type has different attack power and health bar. 
Weapons can be also changed from both sides (player, enemies) and some of them provide extra attack power points.

The Flyweight Design Pattern is a structural design pattern that minimizes memory usage by sharing 
as much data as possible between similar objects. It is particularly useful when a program 
needs to create a large number of objects that share common properties, which can lead to significant memory overhead. 
The pattern achieves this by separating an object's intrinsic state (shared, immutable data) 
from its extrinsic state (context-specific, mutable data), storing the intrinsic state in a shared
flyweight object and reusing it across multiple instances.

Key Concepts:
Flyweight: A shared object that contains the intrinsic state, which is independent of the context and can be reused across multiple instances.
Intrinsic State: Data that is shared and does not change based on context (e.g., a template or default values).
Extrinsic State: Data that is context-specific and varies per instance (e.g., position, user-specific settings), typically passed to the flyweight when needed.
Flyweight Factory: A factory class that manages a pool of flyweight objects, ensuring that only one instance of each unique flyweight is created and reused.
Client: The entity that uses the flyweight objects, providing extrinsic state when interacting with them.

Purpose
The Flyweight pattern is used to:
Reduce memory usage by sharing common data among multiple objects.
Improve performance in applications with a large number of similar objects (e.g., game entities, UI elements).
Avoid creating redundant objects when their intrinsic properties are identical.

When to Use:
When you need to create a large number of objects that share common characteristics.
When memory usage is a concern, and the number of unique object combinations is relatively small compared to the total number of instances.
When the intrinsic state can be separated from the extrinsic state, allowing reuse of the former.

Advantages:
Significantly reduces memory footprint by sharing objects.
Improves performance by avoiding the creation of duplicate objects.
Supports scalability in systems with many similar entities.

Disadvantages:
Increases complexity due to the need to manage intrinsic and extrinsic states.
Can be overkill if the number of objects is small or the memory savings are negligible.
May introduce performance overhead if extrinsic state management is not optimized.