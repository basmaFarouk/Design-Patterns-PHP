<?php

// The Bridge Design Pattern is ideal for situations where you want to decouple an abstraction from its implementation,
// allowing both to vary independently without affecting each other.
// It promotes flexibility by enabling combinations of different abstractions and implementations,
// making it easier to extend or modify either side without changing the other.

// Use Cases for the Bridge Design Pattern

// 1. Cross-Platform GUI Frameworks
// Scenario: A GUI framework needs to support multiple platforms (e.g., Windows, macOS, Linux) with different rendering APIs,
// while providing a consistent set of UI components (e.g., buttons, windows).
// Why Bridge?: The UI components (abstraction) should work consistently across platforms,
// but the rendering logic (implementation) varies per platform.
// The Bridge pattern separates the component logic from the platform-specific rendering.
// Example:
// Abstraction: A Button class with a draw() method.
// Implementor: A RenderAPI interface with platform-specific rendering (e.g., WindowsRender, MacOSRender).
// Concrete Implementor: WindowsRender uses DirectX, MacOSRender uses Metal.
// Bridge: Button holds a reference to a RenderAPI and delegates rendering.
// Usage: The GUI framework creates buttons that work on any platform by pairing with the appropriate RenderAPI.
// Benefit: Add new platforms or UI components independently without modifying existing code.

// 2. Device Control Systems (e.g., Smart Home Devices)
// Scenario: A smart home system controls devices (e.g., lights, thermostats) using different protocols (e.g., Zigbee, Wi-Fi),
// with varying control interfaces (e.g., basic vs. advanced remotes).
// Why Bridge?: The control interface (abstraction) should be independent of the device’s protocol (implementation).
// The Bridge pattern allows any control interface to work with any device protocol.
// Example:
// Abstraction: RemoteControl with methods like turnOn() and adjustSetting().
// Implementor: DeviceProtocol interface with methods for protocol-specific actions.
// Concrete Implementor: ZigbeeProtocol or WiFiProtocol for specific device communication.
// Bridge: RemoteControl holds a DeviceProtocol and delegates actions.
// Usage: A basic or advanced remote can control any device, regardless of its protocol.
// Benefit: Add new remotes or device protocols without modifying the other hierarchy.

// 3. Graphics and Rendering Engines
// Scenario: A game engine supports multiple rendering backends (e.g., OpenGL, Vulkan, DirectX)
// and different shapes (e.g., circles, squares) to be drawn.
// Why Bridge?: Shapes (abstraction) should not be tightly coupled to rendering backends (implementation),
// allowing new shapes or backends to be added independently.
// Example:
// Abstraction: Shape class with a draw() method.
// Implementor: Renderer interface with methods like drawLine() or drawCircle().
// Concrete Implementor: OpenGLRenderer or VulkanRenderer for specific rendering logic.
// Bridge: Shape holds a Renderer and delegates drawing tasks.
// Usage: A circle or square can be drawn using any renderer (e.g., OpenGL or Vulkan).
// Benefit: Add new shapes or rendering backends without changing existing code.

// 4. Database Access with Different Drivers
// Scenario: An application needs to query databases (e.g., MySQL, PostgreSQL, MongoDB)
// using different access methods (e.g., ORM, raw queries) with varying database drivers.
// Why Bridge?: The access method (abstraction) should be independent of the database driver (implementation).
// The Bridge pattern allows any access method to work with any driver.
// Example:
// Abstraction: DataAccess class with query() and insert() methods.
// Implementor: DatabaseDriver interface with executeQuery() and connect() methods.
// Concrete Implementor: MySQLDriver or MongoDBDriver for specific database interactions.
// Bridge: DataAccess holds a DatabaseDriver and delegates operations.
// Usage: The application uses ORM or raw queries with any database driver seamlessly.
// Benefit: Add new access methods or database drivers independently.

// 5. Notification Systems with Multiple Channels
// Scenario: A notification system sends messages via different channels (e.g., email, SMS, push notifications),
// with varying formatting options (e.g., plain text, HTML).
// Why Bridge?: The notification logic (abstraction) should be separate from the channel’s delivery mechanism (implementation).
// The Bridge pattern allows any notification format to work with any channel.
// Example:
// Abstraction: Notification class with a send() method.
// Implementor: Channel interface with deliver() method.
// Concrete Implementor: EmailChannel, SMSChannel, or PushChannel for specific delivery logic.
// Bridge: Notification holds a Channel and delegates delivery.
// Usage: Send HTML or plain-text notifications via email, SMS, or push without coupling formats to channels.
// Benefit: Add new notification formats or channels without modifying existing code.

// 6. File Storage Systems
// Scenario: An application stores files using different storage systems (e.g., local disk, cloud storage like AWS S3, Google Cloud),
// with varying access methods (e.g., synchronous, asynchronous).
// Why Bridge?: The access method (abstraction) should be independent of the storage backend (implementation).
// The Bridge pattern allows any access method to work with any storage system.
// Example:
// Abstraction: FileStorage class with save() and retrieve() methods.
// Implementor: StorageBackend interface with storeFile() and getFile() methods.
// Concrete Implementor: LocalDiskBackend or AWS3Backend for specific storage logic.
// Bridge: FileStorage holds a StorageBackend and delegates operations.
// Usage: The application saves or retrieves files synchronously or asynchronously on any storage system.
// Benefit: Add new storage backends or access methods without changing the other.

// 7. Audio Playback Systems
// Scenario: A music player supports different audio formats (e.g., MP3, WAV, FLAC)
// and playback devices (e.g., speakers, headphones, Bluetooth devices).
// Why Bridge?: The playback logic (abstraction) should be separate from the device’s output mechanism (implementation).
// The Bridge pattern allows any audio format to be played on any device.
// Example:
// Abstraction: AudioPlayer class with play() and stop() methods.
// Implementor: AudioDevice interface with outputSound() method.
// Concrete Implementor: SpeakerDevice or HeadphoneDevice for specific output logic.
// Bridge: AudioPlayer holds an AudioDevice and delegates sound output.
// Usage: Play MP3 or WAV files on speakers or headphones without coupling formats to devices.
// Benefit: Add new audio formats or devices independently.

// Why Use the Bridge Pattern?
// The Bridge pattern is a great fit when:
// - You want to decouple an abstraction from its implementation to allow independent evolution.
// - You need to support multiple combinations of abstractions and implementations.
// - You want to avoid a combinatorial explosion of subclasses (e.g., WindowsButton, MacOSButton, etc.).
// - You need to share implementations across multiple objects or switch implementations at runtime.

// General Benefits Across Use Cases
// 1. Decoupling: Separates abstraction and implementation, reducing dependencies.
// 2. Extensibility: Add new abstractions or implementations without modifying existing code.
// 3. Flexibility: Combine any abstraction with any implementation dynamically.
// 4. Maintainability: Isolate changes to either abstraction or implementation, adhering to the Open/Closed Principle.
// 5. Runtime Flexibility: Switch implementations at runtime by changing the bridge reference.

