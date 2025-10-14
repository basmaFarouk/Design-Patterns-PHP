<?php 

//In a large organization, employees are organized into departments, and each department may have both individual employees and sub-departments.
//The company wants to generate reports that include information about the hierarchy, 
//such as the total salary of a department or its sub-departments.
//الـ Composite بيشبه جدًا الـ Directory Structure في الـ Operating Systems فممكن يبقى عندي Directory جواه Files 
//أو Directories تانية وهكذا بشكل Tree Structure

//The Composite Design Pattern is a structural design pattern that allows you to compose objects into 
//tree-like structures to represent part-whole hierarchies. It treats individual objects
//and compositions of objects (groups) uniformly, enabling clients to work with complex tree structures through a single interface. 
//This pattern is particularly useful when you need to manage a hierarchy of objects where both 
//individual items and groups of items can be treated similarly.

//Key Components:
//Component: An abstract class or interface that defines the common operations 
//for both leaf nodes (individual objects) and composite nodes (groups).
//Leaf: Represents the individual objects (end nodes) that have no children.
//Composite: Represents a group or container that can hold both leaf nodes and other composite nodes. It implements the same interface as the leaf and manages the hierarchy.
//Client: Uses the component interface to work with objects in the hierarchy without needing to know whether they are leaves or composites.

//How It Works:
//The pattern allows you to build a tree structure where each node (leaf or composite) can be treated the same way.
//Operations (like calculating a total) are recursively applied to all nodes in the tree.