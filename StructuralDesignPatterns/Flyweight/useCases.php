<?php

// The Flyweight Design Pattern is a structural pattern that minimizes memory usage by sharing as much data as possible 
// between similar objects. It separates an object's intrinsic state (shared, immutable data) from its extrinsic state 
// (context-specific, mutable data), allowing reuse of the intrinsic state across multiple instances.
// The pattern is ideal when you need to create a large number of objects with common properties to optimize memory usage.

// Use Cases for the Flyweight Design Pattern

// 1. Game Character Management
// Scenario: A multiplayer game features thousands of identical enemies (e.g., zombies, soldiers) with shared attributes 
// like type, attack power, and health, but varying positions and weapons.
// Why Flyweight?: Creating a unique object for each enemy would consume excessive memory.
// The Flyweight pattern shares intrinsic state (e.g., enemy type, base stats) and manages extrinsic state (e.g., position, weapon) separately.
// Example:
// Subsystem Components: CharacterFlyweight (stores type, attack power, health), Weapon (extrinsic state).
// Flyweight Factory: CharacterFactory creates and reuses flyweight objects.
// Concrete Flyweight: Zombie or Soldier flyweight reused for multiple instances with different positions.
// Usage: Client requests $factory->getCharacter("Zombie", 5, 20) multiple times; same flyweight is reused with different positions.
// Benefit: Reduces memory usage from thousands of objects to a few shared flyweights, improving game performance.

// 2. Text Editor Character Rendering
// Scenario: A text editor displays millions of characters (e.g., letters, symbols) with shared font styles, sizes, and colors, 
// but differing positions and text content.
// Why Flyweight?: Storing individual objects for each character would be memory-intensive.
// The Flyweight pattern shares intrinsic state (e.g., font style, size) and manages extrinsic state (e.g., position, text) per instance.
// Example:
// Subsystem Components: CharacterFlyweight (stores font, size, color), TextPosition (extrinsic state).
// Flyweight Factory: TextFactory creates and reuses character flyweights.
// Concrete Flyweight: "A" with Arial 12pt reused across the document with different positions.
// Usage: Editor renders "Hello" by reusing the same "l" flyweight at different coordinates.
// Benefit: Minimizes memory usage for large documents, enabling efficient rendering of text.

// 3. Graphical User Interface (GUI) Elements
// Scenario: A GUI framework renders numerous buttons with shared properties (e.g., shape, default color, label style), 
// but varying sizes, positions, and labels.
// Why Flyweight?: Creating a unique button object for each instance would waste memory.
// The Flyweight pattern shares intrinsic state (e.g., default style) and manages extrinsic state (e.g., position, label) per button.
// Example:
// Subsystem Components: ButtonFlyweight (stores shape, default color), ButtonState (extrinsic state like position, label).
// Flyweight Factory: ButtonFactory creates and reuses button flyweights.
// Concrete Flyweight: Default button style reused for multiple buttons with different labels and positions.
// Usage: GUI creates 100 buttons using the same flyweight, adjusting position and text per instance.
// Benefit: Reduces memory footprint for UI-heavy applications, enhancing scalability.

// 4. Online Map Application Icons
// Scenario: An online map displays thousands of icons (e.g., restaurants, gas stations) with shared icon designs, 
// but differing locations and additional data (e.g., name, rating).
// Why Flyweight?: Storing a unique icon object for each marker would consume significant memory.
// The Flyweight pattern shares intrinsic state (e.g., icon image) and manages extrinsic state (e.g., location, name) per marker.
// Example:
// Subsystem Components: IconFlyweight (stores icon image), MarkerData (extrinsic state like coordinates, name).
// Flyweight Factory: IconFactory creates and reuses icon flyweights.
// Concrete Flyweight: Restaurant icon reused for multiple locations with different coordinates.
// Usage: Map app renders 500 restaurant icons using one flyweight, updating position and name per instance.
// Benefit: Optimizes memory usage for large-scale maps with many similar markers.

// 5. Inventory Item Representation in E-Commerce
// Scenario: An e-commerce platform lists thousands of products with shared attributes (e.g., category, base price, image), 
// but varying quantities, discounts, and customer reviews.
// Why Flyweight?: Creating a unique object for each product listing would lead to memory inefficiency.
// The Flyweight pattern shares intrinsic state (e.g., category, base price) and manages extrinsic state (e.g., quantity, discount) per item.
// Example:
// Subsystem Components: ProductFlyweight (stores category, base price, image), ProductDetails (extrinsic state like quantity, reviews).
// Flyweight Factory: ProductFactory creates and reuses product flyweights.
// Concrete Flyweight: "T-Shirt" flyweight reused for different sizes/colors with unique quantities.
// Usage: Platform displays 1000 T-Shirt listings using one flyweight, varying stock and discounts per instance.
// Benefit: Reduces memory usage for large product catalogs, improving platform performance.

// 6. Traffic Simulation Vehicles
// Scenario: A traffic simulation software models thousands of vehicles (e.g., cars, trucks) with shared models and specs, 
// but differing speeds, positions, and routes.
// Why Flyweight?: Creating a unique object for each vehicle would overload memory.
// The Flyweight pattern shares intrinsic state (e.g., vehicle model, base speed) and manages extrinsic state (e.g., position, route) per vehicle.
// Example:
// Subsystem Components: VehicleFlyweight (stores model, base speed), VehicleState (extrinsic state like position, speed).
// Flyweight Factory: VehicleFactory creates and reuses vehicle flyweights.
// Concrete Flyweight: "Sedan" flyweight reused for multiple cars with different positions and speeds.
// Usage: Simulation renders 2000 sedans using one flyweight, updating position and speed per instance.
// Benefit: Enables efficient simulation of large traffic scenarios with minimal memory usage.

// 7. Social Media Post Previews
// Scenario: A social media platform generates previews for thousands of posts with shared layout and default styles, 
// but varying content, timestamps, and user interactions.
// Why Flyweight?: Storing individual objects for each post preview would be memory-intensive.
// The Flyweight pattern shares intrinsic state (e.g., layout, default style) and manages extrinsic state (e.g., content, likes) per preview.
// Example:
// Subsystem Components: PostPreviewFlyweight (stores layout, style), PostData (extrinsic state like text, likes).
// Flyweight Factory: PostPreviewFactory creates and reuses preview flyweights.
// Concrete Flyweight: Default post layout reused for multiple posts with different text and interactions.
// Usage: Platform displays 5000 post previews using one flyweight, varying content and likes per instance.
// Benefit: Optimizes memory for high-volume social media feeds, enhancing scalability.

// 8. Educational Software Multiple-Choice Questions
// Scenario: An e-learning platform presents thousands of multiple-choice questions with shared formats and difficulty levels, 
// but varying questions, answers, and user scores.
// Why Flyweight?: Creating a unique object for each question would consume excessive memory.
// The Flyweight pattern shares intrinsic state (e.g., format, difficulty) and manages extrinsic state (e.g., question text, answers) per instance.
// Example:
// Subsystem Components: QuestionFlyweight (stores format, difficulty), QuestionDetails (extrinsic state like text, options).
// Flyweight Factory: QuestionFactory creates and reuses question flyweights.
// Concrete Flyweight: "Easy" question format reused for multiple questions with different texts.
// Usage: Platform renders 1000 easy questions using one flyweight, varying question and answer sets per instance.
// Benefit: Reduces memory usage for large question banks, improving educational software performance.

// Why Use the Flyweight Pattern?
// The Flyweight pattern is perfect when:
// - You need to create a large number of objects with similar intrinsic properties.
// - Memory usage is a critical concern, and the number of unique object combinations is limited.
// - You can separate intrinsic (shared) state from extrinsic (context-specific) state.
// - You want to optimize performance in applications with repetitive object creation.
// - You need to handle high volumes of similar entities efficiently (e.g., games, UI, simulations).

// General Benefits Across Use Cases
// 1. Memory Efficiency: Shares intrinsic state, reducing the number of objects in memory.
// 2. Performance Improvement: Avoids redundant object creation, enhancing system speed.
// 3. Scalability: Supports handling large datasets or entities with minimal resource usage.
// 4. Simplified Management: Centralizes flyweight creation and reuse via the factory.
// 5. Flexibility: Allows extrinsic state to vary independently, supporting diverse contexts.
// 6. Reduced Overhead: Minimizes memory and processing overhead for repetitive tasks.
