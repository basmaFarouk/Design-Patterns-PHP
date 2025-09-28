<?php  

//What is it?
//The Iterator pattern provides a way to access elements of a collection sequentially without exposing the collection’s internal structure. 
//It’s about traversing a collection in a standardized way.

//Key Components:
//Iterator: An interface or abstract class defining methods like next() (get the next element), 
//has_next() (check if more elements exist), and optionally others like current() or remove().
//Concrete Iterator: Implements the iterator interface for a specific collection, managing the traversal logic.
//Aggregate: An interface or abstract class defining a method to create an iterator (e.g., create_iterator()).
//Concrete Aggregate: The collection class (e.g., list, array) that implements the aggregate interface and returns a concrete iterator.

//How it works:
//The client requests an iterator from the collection (aggregate).
//The iterator tracks the current position and provides methods to access elements one by one.
//The client uses the iterator to traverse the collection without knowing its internal representation (e.g., array, linked list, tree).

//Example Use Case:
//Traversing a playlist of songs in a music app, regardless of whether the playlist is stored as an array or a linked list.

//When to Use:
//When you need to traverse a collection without exposing its internal structure.
//To support multiple traversal methods (e.g., forward, backward, filtered).
//To provide a uniform way to iterate over different types of collections (e.g., lists, trees).

//Pros:
//Hides the collection’s internal structure, promoting encapsulation.
//Supports multiple simultaneous iterations (e.g., multiple iterators on the same collection).
//Simplifies client code by standardizing traversal.

//Cons:
//Can be overkill for simple collections (e.g., a basic array).
//Adds complexity if the collection is immutable or doesn’t need flexible traversal.
//May require additional memory to track iterator state.