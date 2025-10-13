<?php 

//The Iterator Design Pattern is ideal for scenarios where you need to traverse a collection of objects 
//sequentially without exposing the collection’s internal structure. It provides a standardized way to access elements, 
//promoting encapsulation and flexibility in traversal.

//Use Cases for the Iterator Design Pattern

//1-Traversing a Playlist in a Music App
//Scenario: A music streaming app needs to iterate through a playlist of songs to play them sequentially, 
//regardless of whether the playlist is stored as an array, linked list, or database query result.
//Why Iterator?: The Iterator pattern allows the app to traverse the playlist without exposing its internal representation. 
//It supports operations like skipping to the next song or checking if more songs are available.
//Example:
//Aggregate: Playlist (the collection of songs).
//Iterator: PlaylistIterator (provides next() and has_next()).
//Usage: The app uses the iterator to play each song in sequence, supporting forward or reverse traversal.
//Benefit: The app can switch between different playlist implementations (e.g., in-memory list to database-backed) 
//without changing the traversal logic.


//2-Navigating a File System
//Scenario: A file explorer needs to iterate through files and folders in a directory, 
//which could be represented as a tree structure or a flat list.
//Why Iterator?: The Iterator pattern hides the complexity of the file system’s structure (e.g., tree traversal)
//and provides a uniform way to access each file or folder.
//Example:
//Aggregate: Directory.
//Iterator: DirectoryIterator (traverses files/folders recursively or flat).
//Usage: The explorer iterates through files to display them or perform operations like search or copy.
//Benefit: Supports different file system structures (e.g., local disk, cloud storage) without changing the client code.


//3-Database Query Results
//Scenario: A database application retrieves rows from a query result set (e.g., SQL query results) and processes them one by one.
//Why Iterator?: The Iterator pattern provides a way to access query results sequentially without 
//exposing the underlying database cursor or storage mechanism.
//Example:
//Aggregate: QueryResult.
//Iterator: QueryResultIterator (fetches rows one at a time).
//Usage: The application iterates through rows to display or process data, such as generating a report.
//Benefit: The iterator abstracts the data source, allowing the same traversal code for different databases.


//4-Tree Traversal in Data Structures
//Scenario: An application needs to traverse a tree-based data structure (e.g., a binary search tree, AST in a compiler,
// or organizational hierarchy) using different traversal strategies (e.g., in-order, pre-order, post-order).
//Why Iterator?: The Iterator pattern encapsulates the traversal logic, allowing the client to iterate over 
//tree nodes without knowing the tree’s structure or traversal algorithm.
//Example:
//Aggregate: BinaryTree.
//Iterator: InOrderIterator, PreOrderIterator.
//Usage: A compiler iterates through an AST to generate code using an in-order traversal iterator.
//Benefit: New traversal strategies can be added without modifying the tree or client code.


//5-Processing Collections in a Game
//Scenario: A game needs to iterate through a collection of game objects (e.g., enemies, items, or players) to update their state or render them.
//Why Iterator?: The Iterator pattern allows the game to traverse objects without exposing 
//how they’re stored (e.g., array, linked list, or spatial index).
//Example:
//Aggregate: GameObjectCollection.
//Iterator: GameObjectIterator.
//Usage: The game loop iterates through enemies to update their positions or check collisions.
//Benefit: Supports different collection types or filtering (e.g., iterate only active enemies) without changing the game loop.


//6-Menu Navigation in UI Applications
//Scenario: A GUI application (e.g., a restaurant menu app) needs to iterate through menu items to display them or allow user selection.
//Why Iterator?: The Iterator pattern provides a uniform way to traverse menu items, whether they’re stored in a list, 
//database, or hierarchical structure (e.g., categories).
//Example:
//Aggregate: Menu.
//Iterator: MenuItemIterator.
//Usage: The app iterates through items to display them on-screen or filter by category (e.g., vegetarian).
//Benefit: The UI code remains unchanged even if the menu’s storage or structure changes.


//7-Custom Collection Libraries
//Scenario: A custom collection library (e.g., a graph, set, or queue) needs to provide a way for clients to iterate over its elements.
//Why Iterator?: The Iterator pattern standardizes traversal, allowing clients to work with the collection without 
//knowing its internal implementation.
//Example:
//Aggregate: Graph.
//Iterator: GraphNodeIterator (e.g., for breadth-first or depth-first traversal).
//Usage: A network analysis tool iterates through graph nodes to compute metrics like shortest paths.
//Benefit: Clients can use the same iteration interface across different collection types.


//8-Streaming Data Processing
//Scenario: An application processes streaming data (e.g., log entries, sensor readings) as it arrives, treating the stream as a collection.
//Why Iterator?: The Iterator pattern provides a way to process data sequentially without loading the entire stream into memory, 
//abstracting the data source.
//Example:
//Aggregate: DataStream.
//Iterator: StreamIterator.
//Usage: A monitoring system iterates through sensor readings to analyze trends in real-time.
//Benefit: Handles infinite or large streams efficiently and supports different data sources.



//Why Use the Iterator Pattern?
//The Iterator pattern is a great fit when:
//You need to traverse a collection without exposing its internal structure (e.g., array, tree, database).
//You want to support multiple traversal strategies (e.g., forward, backward, filtered) for the same collection.
//You need to decouple traversal logic from the collection, promoting encapsulation and reusability.
//You anticipate different collection implementations (e.g., switching from a list to a tree) without changing client code.