<?php

// The Proxy Design Pattern is a structural design pattern that provides a surrogate or placeholder for another object to control access to it.
// It acts as an intermediary between a client and the real object, adding functionality like caching, lazy loading, access control, or logging without modifying the real object’s code.
// The Proxy pattern is ideal for scenarios where you need to manage access, optimize performance, or add cross-cutting concerns (e.g., security, logging) to an existing system.

// Use Cases for the Proxy Design Pattern

// 1. Caching Expensive Operations
// Scenario: An application makes frequent calls to a resource-intensive service, such as a third-party API (e.g., fetching product data from an e-commerce API).
// Why Proxy?: API calls are slow and costly (e.g., network latency, rate limits, or monetary costs), but the data doesn’t change frequently.
// The Proxy pattern caches responses to avoid redundant requests, improving performance.
// Example:
// Client: An e-commerce app needing product data via a getProducts() method.
// Real Subject: A service fetching data from an external API (e.g., https://dummyjson.com/products).
// Proxy: A CachingProxy that stores API responses in memory and returns cached data if available.
// Usage: The app calls getProducts() repeatedly; the proxy returns cached data for subsequent calls, avoiding API requests.
// Benefit: Reduces network calls, lowers latency, and saves API quota or costs.

// 2. Lazy Loading of Resource-Intensive Objects
// Scenario: An application needs to load large objects (e.g., high-resolution images, database connections, or configuration files) that are expensive to initialize.
// Why Proxy?: Initializing these objects upfront is wasteful if they’re not always used.
// The Proxy pattern delays object creation until the client requests it (lazy loading).
// Example:
// Client: A photo gallery app displaying image thumbnails and full images on demand.
// Real Subject: An Image class that loads high-resolution images from disk or a server.
// Proxy: An ImageProxy that loads only metadata initially and fetches the full image when requested.
// Usage: The app displays thumbnails instantly; full images are loaded only when a user clicks to view them.
// Benefit: Saves memory and processing time by deferring expensive operations until necessary.

// 3. Access Control for Sensitive Resources
// Scenario: An application restricts access to certain resources (e.g., administrative features, sensitive data) based on user permissions.
// Why Proxy?: Direct access to the real object could allow unauthorized actions.
// The Proxy pattern enforces access control by checking permissions before delegating requests.
// Example:
// Client: An admin dashboard expecting a manageUsers() method.
// Real Subject: A UserService that performs user management operations.
// Proxy: A ProtectionProxy that checks if the user has admin privileges before allowing access.
// Usage: The dashboard calls manageUsers(); the proxy verifies credentials and either allows or denies the request.
// Benefit: Enhances security by preventing unauthorized access without modifying the real service.

// 4. Remote Service Access (Remote Proxy)
// Scenario: An application interacts with a remote service (e.g., a web API or microservice) that requires complex communication logic (e.g., network handling, retries).
// Why Proxy?: The client shouldn’t deal with low-level details like network protocols or error handling.
// The Proxy pattern encapsulates remote communication, presenting a local interface to the client.
// Example:
// Client: A weather app expecting a getWeather() method.
// Real Subject: A remote weather API (e.g., OpenWeatherMap) requiring HTTP requests and authentication.
// Proxy: A RemoteProxy that handles HTTP requests, authentication, and error retries.
// Usage: The app calls getWeather(); the proxy manages network communication and returns the result.
// Benefit: Simplifies client code by hiding network complexities and allows swapping remote services easily.

// 5. Logging and Monitoring
// Scenario: An application needs to log or monitor interactions with a service (e.g., for debugging, auditing, or performance tracking).
// Why Proxy?: Adding logging directly to the real service would violate the single responsibility principle.
// The Proxy pattern intercepts requests to log actions without modifying the real service.
// Example:
// Client: A payment processing system calling a processPayment() method.
// Real Subject: A PaymentService that handles payment transactions.
// Proxy: A LoggingProxy that logs each payment request (e.g., timestamp, user, amount) before delegating to the service.
// Usage: The system processes payments; the proxy logs each request for auditing.
// Benefit: Adds logging or monitoring transparently, keeping the real service focused on its core functionality.

// 6. Rate Limiting or Throttling
// Scenario: An application interacts with a service (e.g., an API or database) that has usage limits or performance constraints.
// Why Proxy?: Exceeding limits can cause errors, bans, or performance degradation.
// The Proxy pattern enforces rate limiting or throttling before forwarding requests.
// Example:
// Client: A social media app calling a postTweet() method.
// Real Subject: A Twitter API client with a rate limit on requests.
// Proxy: A RateLimitingProxy that tracks request frequency and delays or rejects calls if limits are exceeded.
// Usage: The app posts tweets; the proxy ensures compliance with API rate limits.
// Benefit: Prevents API errors or bans and improves reliability without modifying the client or service.

// 7. Virtualizing Heavy Computations
// Scenario: An application performs computationally expensive operations (e.g., generating reports, processing large datasets) that don’t need to run immediately.
// Why Proxy?: Running these operations on every request is inefficient if the results are reused or not always needed.
// The Proxy pattern defers computation or caches results to optimize performance.
// Example:
// Client: A reporting tool requesting a generateReport() method.
// Real Subject: A ReportGenerator that performs complex calculations.
// Proxy: A VirtualProxy that caches the report or delays computation until the report is requested.
// Usage: The tool requests a report; the proxy returns a cached result or triggers computation only when needed.
// Benefit: Reduces computational overhead and improves response times.

// Why Use the Proxy Pattern?
// The Proxy pattern is a great fit when:
// - You need to control access to an object (e.g., for security, caching, or lazy loading).
// - You want to add cross-cutting concerns (e.g., logging, rate limiting) without modifying the real object.
// - You need to simplify interaction with complex or remote systems.
// - You want to optimize performance by deferring expensive operations or caching results.
// - You need to protect a resource from direct or unauthorized access.

// General Benefits Across Use Cases
// 1. Controlled Access: Restricts or manages how clients interact with the real object.
// 2. Performance Optimization: Caching or lazy loading reduces resource usage and latency.
// 3. Transparency: Clients interact with the proxy as if it were the real object, thanks to a shared interface.
// 4. Extensibility: Add features like logging or rate limiting without changing the real object.
// 5. Protection: Shields the real object from misuse or unauthorized access.



//Comparison to Adapter Pattern:
// While the Adapter pattern focuses on making incompatible interfaces work together by translating between them, the Proxy pattern works with a compatible interface to add functionality or control access.
// - Adapter: Changes the interface to match client expectations (e.g., converting XML to JSON).
// - Proxy: Maintains the same interface but adds behavior like caching or access control.
// - Example Difference:
//   - Adapter: Wraps a legacy system’s fetchStock() (XML) to provide getInventory() (JSON).
//   - Proxy: Wraps a modern fetchData() method to cache results or restrict access, keeping the same fetchData() interface.
// Both patterns use composition, but Proxy focuses on controlling or enhancing access, while Adapter focuses on interface compatibility.