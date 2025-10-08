<?php

// The Adapter Design Pattern is ideal for situations where you need to make two incompatible interfaces work together,
// allowing a client to use an existing system or library with a different interface than expected.
// It promotes reuse of existing code without modification and ensures seamless integration by acting as a translator.

// Use Cases for the Adapter Design Pattern

// 1. Integrating Legacy Systems with Modern Applications
// Scenario: A modern application needs to interface with a legacy system (e.g., an old inventory system) that uses outdated methods or data formats.
// Why Adapter?: The legacy system’s interface (e.g., XML output, proprietary methods) doesn’t match the modern application’s expectations (e.g., JSON, standard methods).
// The Adapter pattern wraps the legacy system to provide a compatible interface.
// Example:
// Client: An e-commerce platform expecting a getInventory() method returning JSON.
// Adaptee: A legacy inventory system with a fetchStock() method returning XML.
// Adapter: InventoryAdapter converts XML to JSON and adapts method calls.
// Usage: The platform queries inventory using a modern interface, and the adapter translates to the legacy system’s methods.
// Benefit: Reuse legacy systems without modification, enabling integration with modern code.

// 2. Third-Party API Integration
// Scenario: An application integrates with third-party APIs (e.g., payment gateways, weather services, social media) that have different interfaces than the application’s standard.
// Why Adapter?: The third-party API’s methods and data formats differ from the application’s expected interface.
// The Adapter pattern wraps the API to provide a unified interface.
// Example:
// Client: A notification system expecting a sendMessage() method.
// Adaptee: A third-party SMS service (e.g., Twilio) with a sendSMS() method requiring extra parameters.
// Adapter: SMSAdapter translates sendMessage() to sendSMS() with appropriate parameters.
// Usage: The system sends messages using a consistent interface, unaware of the third-party API’s specifics.
// Benefit: Easily swap or add third-party services without changing the application’s core logic.

// 3. File Format Conversion
// Scenario: A data processing application needs to handle multiple file formats (e.g., CSV, JSON, XML) but uses a standardized internal data interface.
// Why Adapter?: Each file format requires unique parsing logic, but the application expects a uniform getData() method.
// The Adapter pattern converts different file formats into a common data structure.
// Example:
// Client: A data analytics tool expecting getData() to return an array.
// Adaptee: File parsers for CSV, JSON, or XML with different parsing methods.
// Adapter: FileAdapter converts file-specific data to a standard array.
// Usage: The analytics tool processes data regardless of the input file format.
// Benefit: Support new file formats by adding adapters without modifying the analytics tool.

// 4. Database Access Layer Integration
// Scenario: An application uses a standard database access interface but needs to connect to different databases (e.g., MySQL, MongoDB, SQLite) with varying APIs.
// Why Adapter?: Each database has a unique API, but the application expects a consistent queryData() method.
// The Adapter pattern wraps each database’s API to provide a unified interface.
// Example:
// Client: An application expecting queryData() to return standardized results.
// Adaptee: MySQL PDO or MongoDB’s native driver with different query methods.
// Adapter: DatabaseAdapter translates standard queries to database-specific calls.
// Usage: The application queries data uniformly across different databases.
// Benefit: Switch or add databases without changing the application’s data access layer.

// 5. Hardware Device Integration
// Scenario: A smart home system controls devices (e.g., lights, thermostats) from different manufacturers, each with its own protocol or API.
// Why Adapter?: Each device has a unique interface, but the system expects a standard control interface (e.g., turnOn()).
// The Adapter pattern wraps each device’s API to match the system’s expectations.
// Example:
// Client: A smart home app with a turnOn() method.
// Adaptee: Devices with proprietary methods like activate() or switchOn().
// Adapter: DeviceAdapter translates turnOn() to the device-specific method.
// Usage: The app controls all devices uniformly, regardless of their protocols.
// Benefit: Add support for new devices by creating new adapters.

// 6. Logging System Integration
// Scenario: An application uses a standardized logging interface but needs to integrate with different logging libraries (e.g., Monolog, Log4php) or custom logging systems.
// Why Adapter?: Each logging library has a different API, but the application expects a consistent logMessage() method.
// The Adapter pattern wraps each library to provide a unified interface.
// Example:
// Client: An app expecting a logMessage() method with a simple signature.
// Adaptee: A logging library with a complex log() method requiring additional parameters.
// Adapter: LogAdapter simplifies the library’s API to match the app’s interface.
// Usage: The app logs messages consistently, regardless of the underlying library.
// Benefit: Switch logging libraries or add custom logging without changing the app.

// 7. Messaging Systems
// Scenario: A notification system sends messages via multiple channels (e.g., email, SMS, push notifications) with different APIs.
// Why Adapter?: Each messaging service has a unique interface, but the system expects a standard send() method.
// The Adapter pattern wraps each service to provide a consistent interface.
// Example:
// Client: A notification system expecting a send() method.
// Adaptee: Email (SMTP), SMS (Twilio), or push notification (Firebase) APIs.
// Adapter: MessageAdapter translates send() to the service-specific API.
// Usage: The system sends notifications uniformly across channels.
// Benefit: Add new messaging channels by creating new adapters.

// Why Use the Adapter Pattern?
// The Adapter pattern is a great fit when:
// - You need to integrate an existing class or system with an incompatible interface into a new system.
// - You want to reuse legacy or third-party code without modifying it.
// - You need to standardize interactions across multiple systems with different interfaces.
// - You want to decouple the client from the specifics of the underlying system.

// General Benefits Across Use Cases
// 1. Reusability: Reuse existing or third-party code without modification.
// 2. Flexibility: Integrate new systems by adding new adapters.
// 3. Maintainability: Isolate interface translations in adapter classes, keeping client code clean.
// 4. Open/Closed Principle: Extend functionality by adding adapters without changing existing code.

