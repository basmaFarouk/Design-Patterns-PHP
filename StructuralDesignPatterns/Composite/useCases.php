<?php

// The Composite Design Pattern is ideal for representing part-whole hierarchies of objects as if they were single objects.
// It allows clients to treat individual objects and compositions of objects uniformly through a common interface.
// It promotes flexibility by enabling recursive composition and simplifies client code by eliminating type checking.

// Use Cases for the Composite Design Pattern

// 1. File System Operations
// Scenario: Operating systems need to handle files and directories uniformly, where directories can contain other files and directories recursively.
// Why Composite?: Clients should perform operations like delete, copy, or calculate size on both files and directories without distinguishing between them.
// The Composite pattern treats leaf nodes (files) and composite nodes (directories) uniformly.
// Example:
// Component: FileSystemNode interface with getSize(), delete(), and getName() methods.
// Leaf: File class representing individual files with actual size and content.
// Composite: Directory class containing a list of FileSystemNode children and aggregating their sizes.
// Concrete Composite: Directory can add/remove children and delegates operations to all child nodes recursively.
// Usage: Calculate total size: $rootDirectory->getSize() recursively sums all files in the directory tree.
// Benefit: Uniform API for tree traversal and operations without checking if node is file or directory.

// 2. GUI Component Trees
// Scenario: UI frameworks need to build complex layouts containing panels, buttons, labels, and nested panels recursively.
// Why Composite?: Layout managers should position, render, and handle events for both atomic components and container hierarchies uniformly.
// The Composite pattern allows treating individual widgets and container widgets the same way.
// Example:
// Component: UIComponent interface with render(), getBounds(), and handleEvent() methods.
// Leaf: Button, Label, TextField with individual rendering and event handling.
// Composite: Panel or Window containing child UIComponents and managing layout.
// Concrete Composite: Panel lays out children, forwards events to appropriate children, and aggregates bounds.
// Usage: Render entire UI: $mainWindow->render() recursively renders all nested components.
// Benefit: Single rendering and event handling loop works for entire hierarchy without type checking.

// 3. Organizational Structure Management
// Scenario: HR systems need to manage company hierarchies with employees, departments, and sub-departments recursively.
// Why Composite?: Payroll, reporting, and policy enforcement should work uniformly on individuals and organizational units.
// The Composite pattern treats employees and departments as organizational units with aggregated properties.
// Example:
// Component: OrganizationalUnit interface with calculatePayroll(), getEmployeeCount(), and applyPolicy() methods.
// Leaf: Employee class with individual salary and personal data.
// Composite: Department class containing child OrganizationalUnits and aggregating metrics.
// Concrete Composite: Department sums payroll of all nested employees and forwards policies to children.
// Usage: Company-wide payroll: $company->calculatePayroll() recursively computes total compensation.
// Benefit: Uniform operations across hierarchy levels without distinguishing between employees and departments.

// 4. Graphics Drawing Applications
// Scenario: Vector graphics editors need to handle shapes, groups of shapes, and nested groups for complex illustrations.
// Why Composite?: Drawing operations like render, transform, and select should work uniformly on individual shapes and shape groups.
// The Composite pattern enables recursive grouping while maintaining uniform shape interface.
// Example:
// Component: Shape interface with draw(), transform(), and isSelected() methods.
// Leaf: Circle, Rectangle, Line with individual geometric calculations and rendering.
// Composite: ShapeGroup containing child Shapes and applying transformations to all children.
// Concrete Composite: ShapeGroup forwards drawing calls to children and aggregates bounding box.
// Usage: Render complex illustration: $canvas->draw() renders all nested shape groups recursively.
// Benefit: Single drawing loop handles complex nested compositions without type differentiation.

// 5. Menu Systems in Applications
// Scenario: Desktop applications need hierarchical menus with submenus, menu items, and nested menu structures.
// Why Composite?: Menu rendering, keyboard navigation, and event handling should work uniformly on menu items and submenus.
// The Composite pattern treats leaf menu items and composite submenus as MenuComponents.
// Example:
// Component: MenuComponent interface with add(), remove(), display(), and handleClick() methods.
// Leaf: MenuItem with label, action, and icon for clickable items.
// Composite: Menu class containing child MenuComponents and managing submenu expansion.
// Concrete Composite: Menu displays children hierarchically and forwards click events to selected items.
// Usage: Display main menu: $mainMenu->display() recursively renders entire menu hierarchy.
// Benefit: Uniform menu traversal and event routing without checking menu vs. item types.

// 6. Bill of Materials (BOM) in Manufacturing
// Scenario: Manufacturing systems need to manage product assemblies with sub-assemblies, components, and raw materials recursively.
// Why Composite?: Cost calculation, inventory tracking, and production planning should work uniformly on parts and assemblies.
// The Composite pattern aggregates properties across the entire bill of materials hierarchy.
// Example:
// Component: Part interface with getCost(), getQuantity(), and getLeadTime() methods.
// Leaf: RawMaterial or SimplePart with fixed cost and availability.
// Composite: Assembly class containing child Parts and aggregating total cost/quantity.
// Concrete Composite: Assembly calculates total BOM cost by recursively summing child costs and quantities.
// Usage: Product costing: $finalProduct->getCost() computes total manufacturing cost recursively.
// Benefit: Uniform BOM operations across complex nested assemblies without type checking.

// 7. Abstract Syntax Trees (AST) in Compilers
// Scenario: Programming language compilers need to represent source code structure with expressions, statements, and nested blocks.
// Why Composite?: Code analysis, optimization, and code generation should treat simple expressions and complex statement trees uniformly.
// The Composite pattern represents parse trees where nodes can contain other nodes recursively.
// Example:
// Component: ASTNode interface with analyze(), optimize(), and generateCode() methods.
// Leaf: Literal, Variable with simple evaluation and code generation.
// Composite: Expression, BlockStatement containing child ASTNodes and managing scope.
// Concrete Composite: BlockStatement executes children sequentially and manages local variables.
// Usage: Compile program: $rootNode->generateCode() traverses entire AST recursively.
// Benefit: Single visitor pattern or traversal works for entire program structure without node type checking.

// 8. Network Topology Management
// Scenario: Network management systems need to model routers, switches, VLANs, and nested network segments.
// Why Composite?: Monitoring, configuration, and traffic analysis should work uniformly on devices and network segments.
// The Composite pattern represents network topology where segments contain other devices/segments.
// Example:
// Component: NetworkElement interface with getStatus(), configure(), and getTrafficStats() methods.
// Leaf: Router, Switch with device-specific monitoring and configuration.
// Composite: NetworkSegment containing child NetworkElements and aggregating metrics.
// Concrete Composite: NetworkSegment monitors health of all child elements and propagates configurations.
// Usage: Network health check: $entireNetwork->getStatus() recursively checks all devices and segments.
// Benefit: Uniform network management operations across hierarchical topology without type differentiation.

// Why Use the Composite Pattern?
// The Composite pattern is perfect when:
// - You need to represent part-whole hierarchies where parts can be treated as wholes.
// - Clients should ignore the difference between compositions and individual objects.
// - You want to support recursive operations across object hierarchies.
// - The hierarchy structure changes dynamically (add/remove children at runtime).
// - You need uniform traversal and manipulation of tree-like structures.

// General Benefits Across Use Cases
// 1. Uniformity: Clients use same interface for leaves and composites, simplifying code.
// 2. Transparency: No need for type checking or casting when traversing hierarchies.
// 3. Extensibility: Add new node types without modifying client traversal code.
// 4. Recursive Operations: Natural support for tree traversal patterns like visitor.
// 5. Dynamic Composition: Runtime addition/removal of children without breaking clients.
// 6. Single Responsibility: Composites delegate to children, maintaining clear separation.