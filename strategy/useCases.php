<?php 

//The Strategy Design Pattern is ideal for situations where you need to dynamically 
//select between multiple algorithms or behaviors at runtime, promoting flexibility and decoupling. 

//Use Cases for the Strategy Design Pattern

//1-Payment Processing Systems
//Scenario: An e-commerce platform supports multiple payment methods (e.g., credit card, PayPal, cryptocurrency, bank transfer).
//Why Strategy?: Each payment method has a distinct processing algorithm, but the checkout process remains the same. T
//he Strategy pattern allows you to encapsulate each payment method as a strategy and switch them dynamically based on user selection.
//Example:
//Context: Checkout system.
//Strategies: CreditCardPayment, PayPalPayment, CryptoPayment.
//Usage: The user selects a payment method, and the checkout system delegates to the corresponding strategy to process the payment.
//Benefit: New payment methods can be added without modifying the checkout logic.

//2-Sorting Algorithms in Applications
//Scenario: A data analysis tool allows users to sort datasets using different algorithms (e.g., QuickSort, MergeSort, BubbleSort) 
//based on performance needs or data characteristics.
//Why Strategy?: Each sorting algorithm is encapsulated as a strategy, and the application can switch between them at runtime based on user preference or data size.
//Example:
//Context: Sorting manager.
//Strategies: QuickSortStrategy, MergeSortStrategy, BubbleSortStrategy.
//Usage: The user selects “QuickSort” for large datasets or “BubbleSort” for small ones, and the sorting manager delegates to the chosen strategy.
//Benefit: Easily add new sorting algorithms without changing the core sorting logic.


//3-Navigation Route Planning
//Scenario: A navigation app calculates routes based on different criteria (e.g., fastest, shortest, scenic, or avoiding tolls).
//Why Strategy?: Each route calculation method is a distinct algorithm, 
//but the process of getting a route (input source/destination, output path) is consistent.
//The Strategy pattern allows switching between route calculation strategies.
//Example:
//Context: Navigation system.
//Strategies: FastestRoute, ShortestRoute, ScenicRoute.
//Usage: The user selects “scenic” for a leisure trip, and the app uses the ScenicRoute strategy to compute the path.
//Benefit: New routing strategies (e.g., eco-friendly) can be added without altering the navigation system.


//3-Compression Algorithms
//Scenario: A file archiving tool supports multiple compression formats (e.g., ZIP, RAR, GZIP) for compressing files.
//Why Strategy?: Each compression method has its own algorithm, but the process of compressing a file (input file, output compressed file) is standardized. The Strategy pattern allows selecting the compression method dynamically.
//Example:
//Context: File archiver.
//Strategies: ZipCompression, RarCompression, GzipCompression.
//Usage: The user chooses GZIP for faster compression, and the archiver delegates to the GzipCompression strategy.
//Benefit: Supports new compression formats without modifying the core archiving logic.


//4-Text Formatting or Rendering
//Scenario: A text editor or reporting tool formats text in different styles (e.g., plain text, HTML, Markdown, PDF) based on user requirements.
//Why Strategy?: Each formatting style is a separate algorithm, but the process of formatting (input text, output formatted text) is consistent. 
//The Strategy pattern allows switching between formatting strategies.
//Example:
//Context: Text formatter.
//Strategies: HtmlFormatter, MarkdownFormatter, PdfFormatter.
//Usage: The user selects “HTML” for web output, and the formatter uses the HtmlFormatter strategy.
//Benefit: New formats can be added without changing the core formatting logic.


//5-Game AI Behaviors
//Scenario: A game character (e.g., an enemy) can switch between different behaviors (e.g., aggressive, defensive, fleeing) 
//based on game conditions.
//Why Strategy?: Each behavior is a distinct algorithm for how the character acts, 
//and the Strategy pattern allows the character to switch behaviors dynamically (e.g., flee when health is low).
//Example:
//Context: Enemy AI.
//Strategies: AggressiveBehavior, DefensiveBehavior, FleeingBehavior.
//Usage: The game sets the enemy’s strategy to FleeingBehavior when its health drops below 20%.
//Benefit: New behaviors can be added without modifying the enemy’s core logic.


//6-Discount Calculation in Retail
//Scenario: An online store applies different discount strategies (e.g., percentage-based, buy-one-get-one, seasonal sale)
//based on promotions or customer type.
//Why Strategy?: Each discount type is a distinct calculation, but the process of applying a discount 
//(input price, output discounted price) is the same. The Strategy pattern enables switching discount strategies dynamically.
//Example:
//Context: Shopping cart.
//Strategies: PercentageDiscount, BogoDiscount, SeasonalDiscount.
//Usage: During a holiday sale, the cart uses SeasonalDiscount to apply a 20% discount.
//Benefit: New discount types can be added without changing the cart’s pricing logic.


//7-Authentication Mechanisms
//Scenario: A login system supports multiple authentication methods (e.g., password, OAuth, biometrics).
//Why Strategy?: Each authentication method has a different process, 
//but the login system’s interface (authenticate user, return success/failure) remains consistent. 
//The Strategy pattern allows switching authentication methods at runtime.
//Example:
//Context: Authentication service.
//Strategies: PasswordAuth, OAuthAuth, BiometricAuth.
//Usage: The user selects “OAuth” to log in via Google, and the system delegates to the OAuthAuth strategy.
//Benefit: New authentication methods can be integrated without modifying the login system.


//Why Use the Strategy Pattern?
//The Strategy pattern is a great fit when:
//You have multiple algorithms or behaviors that solve the same problem differently, and you want to switch between them dynamically.
//You want to avoid conditional statements (e.g., if-else blocks) for selecting behavior, which can make code harder to maintain.
//You need to decouple the algorithm implementation from the client code, promoting flexibility and reusability.
//You anticipate adding new algorithms frequently, as the pattern supports extensibility via new strategy classes.

//General Benefits Across Use Cases
//1-Flexibility: Switch algorithms at runtime based on context or user input.
//2-Maintainability: Encapsulate algorithms in separate classes, making them easier to modify or extend.
//3-Reusability: Strategies can be reused across different contexts.
//4-Open/Closed Principle: Add new strategies without modifying the context class.