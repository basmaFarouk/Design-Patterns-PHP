<?php 

// 1. Corporate Organizational Structure
// Scenario: A corporation needs to calculate the total budget or headcount across departments, sub-departments, and individual employees.
// Why Composite?: The structure can treat individual employees and departments uniformly, allowing recursive calculations.
// Example: An Employee class with a salary, a Department class containing employees and sub-departments, and a common interface for total budget.
// Usage: Calculate the total budget by calling a method on the top-level department, which aggregates all sub-units.
// Benefit: Easily add new employees or sub-departments without altering the calculation logic.

// 2. File System Representation
// Scenario: A file explorer needs to display a hierarchy of files and directories with operations like calculating total size.
// Why Composite?: Files (leaves) and directories (composites) can be treated uniformly to compute sizes or perform actions recursively.
// Example: A File class with size, a Directory class containing files and sub-directories, and a common interface for size calculation.
// Usage: Compute the total size of a directory by summing the sizes of all files and sub-directories.
// Benefit: Add new files or directories without changing the size calculation method.

// 3. Menu System in a Restaurant
// Scenario: A restaurant menu system organizes items into categories (e.g., appetizers, mains) and sub-categories with pricing.
// Why Composite?: Menu items (leaves) and categories (composites) can be treated the same for calculating total menu cost or displaying options.
// Example: A MenuItem class with a price, a MenuCategory class containing items and sub-categories, and a common interface for pricing.
// Usage: Calculate the total cost of all items in a category, including sub-categories, with a single method call.
// Benefit: Add new menu items or categories without modifying the pricing logic.

// 4. Bill of Materials (BOM) in Manufacturing
// Scenario: A manufacturing system tracks a product’s components, sub-assemblies, and final assembly with a total cost.
// Why Composite?: Components (leaves) and assemblies (composites) can be treated uniformly to calculate the total cost of a product.
// Example: A Component class with a cost, an Assembly class containing components and sub-assemblies, and a common interface for cost calculation.
// Usage: Determine the total cost of a product by aggregating costs across all levels of the BOM.
// Benefit: Add new components or sub-assemblies without changing the cost calculation process.

// 5. Educational Course Structure
// Scenario: An e-learning platform organizes courses into modules, lessons, and individual topics with a total duration.
// Why Composite?: Lessons (leaves) and modules (composites) can be treated uniformly to calculate the total course duration.
// Example: A Lesson class with duration, a Module class containing lessons and sub-modules, and a common interface for duration calculation.
// Usage: Compute the total duration of a course by summing durations across all modules and lessons.
// Benefit: Add new lessons or modules without altering the duration calculation logic.

// 6. Website Navigation Menu
// Scenario: A website needs a navigation system with menu items and sub-menus to calculate the total number of links.
// Why Composite?: Menu items (leaves) and sub-menus (composites) can be treated uniformly to count links or perform navigation actions.
// Example: A MenuItem class with a link, a SubMenu class containing items and sub-menus, and a common interface for link counting.
// Usage: Calculate the total number of links by recursively counting all items in the navigation tree.
// Benefit: Add new menu items or sub-menus without modifying the counting logic.

// 7. Team Project Management
// Scenario: A project management tool organizes tasks into projects, sub-tasks, and individual assignments with a total effort estimate.
// Why Composite?: Tasks (leaves) and projects (composites) can be treated uniformly to calculate the total effort in hours.
// Example: A Task class with effort, a Project class containing tasks and sub-projects, and a common interface for effort calculation.
// Usage: Compute the total effort for a project by aggregating effort across all tasks and sub-projects.
// Benefit: Add new tasks or sub-projects without changing the effort calculation method.