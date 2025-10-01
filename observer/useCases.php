<?php 

//The Observer Design Pattern is ideal for scenarios where you need to maintain a one-to-many dependency between objects, 
//ensuring that when one object (the subject) changes its state, 
//all dependent objects (observers) are notified and updated automatically. 
//It’s perfect for event-driven systems where loose coupling is desired.

//Use Cases for the Observer Design Pattern

//1-Real-Time Data Dashboards
//Scenario: A dashboard in a stock trading app displays real-time stock prices, charts, and alerts based on market data.
//Why Observer?: The market data feed (subject) changes frequently, and multiple UI components (observers) like price displays, 
//charts, or notification systems need to update automatically when new data arrives.
//Example:
//Subject: StockMarket (tracks stock prices).
//Observers: PriceDisplay, ChartUpdater, AlertSystem.
//Usage: When a stock price changes, the StockMarket notifies all observers, which update the UI or trigger alerts.
//Benefit: Decouples data source from UI components, allowing new displays or alerts to be added easily.


//2-Event Handling in GUI Frameworks
//Scenario: A GUI application (e.g., a button in a form) triggers events (e.g., clicks) 
//that multiple components (e.g., form validator, logger) need to respond to.
//Why Observer?: The button (subject) notifies registered listeners (observers) when clicked, 
//allowing multiple components to react without direct coupling.
//Example:
//Subject: Button.
//Observers: FormValidator, EventLogger.
//Usage: Clicking a button notifies the validator to check input and the logger to record the action.
//Benefit: Supports dynamic addition of new listeners and keeps components loosely coupled.


//3-News Feed or RSS Systems
//Scenario: A news aggregator sends updates to subscribers (e.g., mobile apps, email clients) when new articles are published.
//Why Observer?: The news feed (subject) notifies subscribers (observers) when new content is available, 
//ensuring all clients receive updates without direct interaction.
//Example:
//Subject: NewsFeed.
//Observers: MobileApp, EmailClient, WebClient.
//Usage: When a new article is published, the feed notifies all subscribers to display or email the update.
//Benefit: Easily add or remove subscribers without modifying the feed.


//4-Weather Station Monitoring
//Scenario: A weather station broadcasts real-time weather data (e.g., temperature, humidity) 
//to multiple displays (e.g., mobile app, website, digital billboard).
//Why Observer?: The weather station (subject) notifies all displays (observers) when measurements change, 
//ensuring consistent updates across platforms.
//Example:
//Subject: WeatherStation.
//Observers: MobileAppDisplay, WebsiteDisplay, BillboardDisplay.
//Usage: A temperature change triggers notifications to update all displays with the new value.
//Benefit: New display types can be added without changing the weather station’s logic.


//5-Publish-Subscribe Messaging Systems
//Scenario: A messaging system (e.g., Kafka, RabbitMQ) allows publishers to send messages to multiple subscribers based on topics or events.
//Why Observer?: The message broker (subject) notifies subscribers (observers) when new messages arrive, decoupling producers from consumers.
//Example:
//Subject: MessageBroker.
//Observers: AnalyticsService, NotificationService.
//Usage: A new log event is published, and the broker notifies analytics and notification services to process it.
//Benefit: Supports dynamic subscription and scalable event handling.


//6-Social Media Notifications
//Scenario: A social media platform notifies users’ followers or devices when a user posts an update, likes, or comments.
//Why Observer?: The user’s profile (subject) notifies followers or devices (observers) of updates,
//ensuring real-time notifications without direct connections.
//Example:
//Subject: UserProfile.
//Observers: FollowerFeed, MobileNotification.
//Usage: A user posts a photo, triggering notifications to followers’ feeds and devices.
//Benefit: Easily scales to new notification types or platforms.


//7-Inventory Management Systems
//Scenario: An e-commerce system updates multiple components (e.g., stock display, order system, warehouse) when inventory levels change.
//Why Observer?: The inventory (subject) notifies dependent systems (observers) when stock changes, ensuring consistency across the platform.
//Example:
//Subject: Inventory.
//Observers: StockDisplay, OrderProcessor, WarehouseManager.
//Usage: When a product’s stock decreases, the inventory notifies the display to update and the warehouse to restock.
//Benefit: Simplifies adding new systems that depend on inventory updates.


//8-Sensor Data Monitoring in IoT
//Scenario: An IoT system collects data from sensors (e.g., temperature, motion) and updates monitoring systems or alerts in real-time.
//Why Observer?: The sensor (subject) notifies monitoring systems or alert mechanisms (observers) when new data is recorded, 
//ensuring real-time updates.
//Example:
//Subject: TemperatureSensor.
//Observers: Dashboard, AlertSystem.
//Usage: A temperature spike triggers notifications to update the dashboard and send an alert.
//Benefit: Supports adding new monitoring tools without modifying sensor code.


//Why Use the Observer Pattern?
//The Observer pattern is a great fit when:
//Multiple objects need to react to state changes in a single object.
//You want to decouple the subject from its observers, promoting loose coupling.
//You need dynamic subscription, allowing observers to be added or removed at runtime.
//You’re building an event-driven system where state changes trigger updates across components.