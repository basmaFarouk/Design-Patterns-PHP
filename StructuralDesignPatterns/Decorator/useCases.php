<?php

// The Decorator Design Pattern is ideal for adding responsibilities to objects dynamically and transparently,
// without affecting other objects. It provides a flexible alternative to subclassing for extending functionality.
// It promotes the Open/Closed Principle by allowing behavior to be extended without modifying existing classes.

// Use Cases for the Decorator Design Pattern

// 1. GUI Component Enhancement
// Scenario: A GUI framework needs to add features like borders, scrollbars, or shadows to basic UI components
// (e.g., buttons, text fields) without creating subclasses for every combination.
// Why Decorator?: Components should be able to dynamically gain visual enhancements without tight coupling.
// The Decorator pattern wraps components with additional behavior while maintaining the same interface.
// Example:
// Component: UIComponent interface with render() method.
// Concrete Component: Button or TextField with basic rendering.
// Decorator: BorderDecorator adds borders, ScrollDecorator adds scrollbars, ShadowDecorator adds shadows.
// Concrete Decorator: BorderDecorator wraps any UIComponent and adds border rendering before/after component render.
// Usage: Create a button with border and shadow by nesting decorators: ShadowDecorator(BorderDecorator(new Button())).
// Benefit: Unlimited combinations of visual enhancements without combinatorial subclass explosion.

// 2. Stream I/O Enhancements
// Scenario: File processing needs different transformations like compression, encryption, logging,
// or buffering applied to basic file streams.
// Why Decorator?: Stream operations should be composable and extensible without modifying stream classes.
// The Decorator pattern allows stacking multiple transformations on any stream type.
// Example:
// Component: Stream interface with read() and write() methods.
// Concrete Component: FileStream for basic file I/O.
// Decorator: CompressionDecorator, EncryptionDecorator, LoggingDecorator, BufferedDecorator.
// Concrete Decorator: EncryptionDecorator wraps any Stream and encrypts data before writing, decrypts before reading.
// Usage: Create encrypted, compressed, buffered file output: BufferedDecorator(CompressionDecorator(EncryptionDecorator(new FileStream()))).
// Benefit: Mix and match stream enhancements dynamically without creating separate classes for each combination.

// 3. Authentication and Authorization Layers
// Scenario: A web API needs multiple layers of security (e.g., JWT validation, rate limiting, IP whitelisting,
// logging) applied to protected endpoints.
// Why Decorator?: Security concerns should be added/removed dynamically without modifying controller logic.
// The Decorator pattern allows stacking middleware-like security layers around API handlers.
// Example:
// Component: RequestHandler interface with handle(Request) method.
// Concrete Component: ApiController with business logic.
// Decorator: JwtAuthDecorator, RateLimitDecorator, IpWhitelistDecorator, LoggingDecorator.
// Concrete Decorator: JwtAuthDecorator wraps any RequestHandler and validates JWT before delegating to wrapped handler.
// Usage: Secure an endpoint with multiple layers: RateLimitDecorator(JwtAuthDecorator(LoggingDecorator(new ApiController()))).
// Benefit: Add/remove security layers at runtime or configuration without changing core API logic.

// 4. Logging and Monitoring Wrappers
// Scenario: Application services need different logging levels, metrics collection, or caching
// applied to business operations without invasive changes.
// Why Decorator?: Cross-cutting concerns like logging and monitoring should be added transparently.
// The Decorator pattern allows wrapping services with observability features while preserving original behavior.
// Example:
// Component: Service interface with execute() method.
// Concrete Component: PaymentService or UserService with core business logic.
// Decorator: DebugLoggerDecorator, MetricsDecorator, CacheDecorator, ErrorHandlerDecorator.
// Concrete Decorator: MetricsDecorator wraps any Service, records execution time/metrics, then delegates to wrapped service.
// Usage: Monitor payment service: MetricsDecorator(DebugLoggerDecorator(new PaymentService())).
// Benefit: Apply monitoring/logging to any service without modifying business logic or creating numerous subclasses.

// 5. Data Processing Pipelines
// Scenario: ETL (Extract, Transform, Load) processes need various transformations (filtering, validation,
// formatting, aggregation) applied to data streams.
// Why Decorator?: Data transformations should be composable and reusable across different pipelines.
// The Decorator pattern enables building complex transformation chains from simple, independent decorators.
// Example:
// Component: DataProcessor interface with process(Data) method.
// Concrete Component: RawDataReader reads unprocessed data.
// Decorator: FilterDecorator, ValidateDecorator, FormatDecorator, AggregateDecorator.
// Concrete Decorator: ValidateDecorator wraps any DataProcessor, validates data, then passes to wrapped processor.
// Usage: Build pipeline: AggregateDecorator(FormatDecorator(ValidateDecorator(FilterDecorator(new RawDataReader())))).
// Benefit: Reusable transformation components that can be mixed and matched for different data processing needs.

// 6. Caching Strategies for Data Access
// Scenario: Data access layers need different caching strategies (in-memory, Redis, file-based)
// combined with compression or serialization options.
// Why Decorator?: Caching should be pluggable and combinable without modifying data access objects.
// The Decorator pattern allows stacking multiple caching and optimization layers.
// Example:
// Component: DataSource interface with getData(key) and setData(key, value) methods.
// Concrete Component: DatabaseSource for direct database access.
// Decorator: InMemoryCacheDecorator, RedisCacheDecorator, CompressionDecorator, SerializationDecorator.
// Concrete Decorator: RedisCacheDecorator wraps any DataSource, checks cache first, falls back to wrapped source.
// Usage: Cached, compressed database access: CompressionDecorator(RedisCacheDecorator(InMemoryCacheDecorator(new DatabaseSource()))).
// Benefit: Experiment with different caching strategies and optimizations without changing data access code.

// 7. Payment Processing Gateways
// Scenario: E-commerce platforms need to add fraud detection, currency conversion, tax calculation,
// and receipt generation to basic payment processing.
// Why Decorator?: Payment processing should support optional, composable features without subclass proliferation.
// The Decorator pattern allows adding business rules dynamically around payment gateways.
// Example:
// Component: PaymentProcessor interface with processPayment(amount, currency) method.
// Concrete Component: StripeGateway or PayPalGateway with core payment logic.
// Decorator: FraudCheckDecorator, CurrencyConverterDecorator, TaxCalculatorDecorator, ReceiptGeneratorDecorator.
// Concrete Decorator: FraudCheckDecorator wraps any PaymentProcessor, performs risk assessment before delegating.
// Usage: Secure, localized payment: ReceiptGeneratorDecorator(TaxCalculatorDecorator(FraudCheckDecorator(CurrencyConverterDecorator(new StripeGateway())))).
// Benefit: Add compliance, localization, and business features without modifying gateway integrations.

// 8. Text Processing and Formatting
// Scenario: Document editors need various text formatting (bold, italic, underline, spell check,
// auto-complete) applied to text components.
// Why Decorator?: Formatting should be applied dynamically and composably without deep inheritance hierarchies.
// The Decorator pattern allows nesting multiple text enhancements while maintaining text interface.
// Example:
// Component: TextComponent interface with render() and getText() methods.
// Concrete Component: PlainText with basic text rendering.
// Decorator: BoldDecorator, ItalicDecorator, UnderlineDecorator, SpellCheckDecorator.
// Concrete Decorator: BoldDecorator wraps any TextComponent, wraps content in <b> tags during render.
// Usage: Format text: ItalicDecorator(BoldDecorator(SpellCheckDecorator(new PlainText("Hello World")))).
// Benefit: Unlimited formatting combinations without exponential subclass growth.

// Why Use the Decorator Pattern?
// The Decorator pattern is perfect when:
// - You need to add responsibilities to objects dynamically and transparently.
// - Subclassing would lead to a combinatorial explosion of classes.
// - You want to provide default implementations for an interface with optional extensions.
// - Cross-cutting concerns need to be applied selectively to different objects.
// - You need runtime flexibility to add/remove behaviors.

// General Benefits Across Use Cases
// 1. Single Responsibility: Each decorator has one specific responsibility.
// 2. Open/Closed Principle: Extend behavior without modifying existing classes.
// 3. Composability: Stack multiple decorators for complex behavior combinations.
// 4. Transparency: Decorated objects maintain the same interface as originals.
// 5. Runtime Flexibility: Add/remove decorators dynamically based on context or configuration.
// 6. Testability: Test decorators independently and mock wrapped components easily.