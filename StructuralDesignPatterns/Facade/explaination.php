<?php 

/* 
WHAT IS THE PROBLEM?
You're developing an online travel booking system where customers can book flights, reserve hotel rooms, and rent cars for their trips.
The booking system involves multiple subsystems, including flight management, hotel reservation, car rental, and payment processing.

قوته انه بيقدر يشيل جواه .. interaction between subsystems ... وبعضها وبيديك واجهة واحدة تقدر تتواصل من خلالها من غير ما تشغل بالك بالربط والتنسيق بين الكلاسيز وبعضها
1- الـ Facade حل مثالي جدًا لو عاوز يبقى عندك Interface لـ Complex System بحيث تضمن انك عامل Encapsulation بشكل سليم
2- استعمل الـ Facade اما تكون عاوز تعمل Structure من الـ Classes بحيث يكون عندك Subsystems متقسمة في Layers وطبقات متعددة وعاوز يكون ليهم Interface واحد
*/


// Explanation of the Facade Design Pattern
// The Facade Design Pattern is a structural pattern that provides a simplified interface to a complex subsystem.
// It hides the complexities of the subsystem and exposes a single, unified interface to the client.
// The pattern is ideal when you want to reduce coupling between clients and a set of complex components,
// making the system easier to use and maintain.

// Key Characteristics of the Facade Pattern
// - Simplifies complex subsystem interactions into a single entry point.
// - Decouples clients from subsystem components, allowing changes without affecting client code.
// - Promotes loose coupling and improves readability by reducing the number of objects a client interacts with.
// - Does not add functionality; it only organizes and simplifies access to existing functionality.

// When to Use the Facade Pattern
// - When a subsystem has multiple components with complex interactions that clients shouldn't need to understand.
// - When you want to provide a simplified API for common tasks in a complex system.
// - When you need to integrate with legacy systems or third-party libraries with intricate APIs.
// - When you want to layer a system and define entry points for different levels of abstraction.

// Structure of the Facade Pattern
// - Facade: The class that provides a simplified interface, orchestrating calls to subsystem components.
// - Subsystem Components: The underlying classes or modules that perform specific tasks.
// - Client: Interacts only with the Facade, unaware of the subsystem's complexity.

// Real-World Analogy
// - Think of a travel agency as a facade. A customer provides trip details (destination, dates, preferences),
//   and the agency handles booking flights, hotels, car rentals, and payments with various providers.
//   The customer doesn't need to interact with each provider directly; the agency simplifies the process.

// Real Example: Online Shopping Checkout System
// Scenario: An e-commerce platform needs to process a customer's order, which involves multiple subsystems:
//   - InventoryService: Checks product availability.
//   - PaymentProcessor: Handles payment processing with different gateways (e.g., PayPal, Credit Card).
//   - ShippingService: Calculates shipping costs and schedules delivery.
//   - NotificationService: Sends order confirmation emails or SMS.
// The client (e.g., a web controller) should not interact with these subsystems directly.
// Instead, a CheckoutFacade simplifies the process by coordinating all steps in a single method call.

// Implementation in PHP
// Below is a PHP implementation of the CheckoutFacade for an online shopping system.

// Subsystem: InventoryService
class InventoryService {
    public function checkStock(string $productId, int $quantity): bool {
        // Simulate checking stock in a database
        echo "Checking stock for product: $productId, quantity: $quantity" . PHP_EOL;
        return true; // Assume stock is available for simplicity
    }
}

// Subsystem: PaymentProcessor
interface PaymentGateway {
    public function process(float $amount): bool;
}

class PayPalGateway implements PaymentGateway {
    public function process(float $amount): bool {
        echo "Processing payment of $$amount via PayPal" . PHP_EOL;
        return true; // Assume payment succeeds
    }
}

class CreditCardGateway implements PaymentGateway {
    public function process(float $amount): bool {
        echo "Processing payment of $$amount via Credit Card" . PHP_EOL;
        return true; // Assume payment succeeds
    }
}

class PaymentProcessor {
    private PaymentGateway $gateway;

    public function __construct(PaymentGateway $gateway) {
        $this->gateway = $gateway;
    }

    public function processPayment(float $amount): bool {
        return $this->gateway->process($amount);
    }
}

// Subsystem: ShippingService
class ShippingService {
    public function calculateShippingCost(string $address, float $weight): float {
        // Simulate shipping cost calculation
        echo "Calculating shipping cost for address: $address, weight: $weight kg" . PHP_EOL;
        return 10.00 + ($weight * 2.00); // Simple cost calculation
    }

    public function scheduleDelivery(string $address, string $orderId): string {
        // Simulate scheduling delivery
        echo "Scheduling delivery for order: $orderId to $address" . PHP_EOL;
        return "DELIVERY-" . $orderId; // Return tracking number
    }
}

// Subsystem: NotificationService
class NotificationService {
    public function sendConfirmation(string $email, string $orderId): void {
        echo "Sending confirmation email for order: $orderId to $email" . PHP_EOL;
    }
}

// Order class to hold order data
class Order {
    private string $orderId;
    private string $productId;
    private int $quantity;
    private float $weight;
    private string $address;
    private string $email;
    private float $amount;
    private string $paymentMethod;

    public function __construct(
        string $orderId,
        string $productId,
        int $quantity,
        float $weight,
        string $address,
        string $email,
        float $amount,
        string $paymentMethod
    ) {
        $this->orderId = $orderId;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->weight = $weight;
        $this->address = $address;
        $this->email = $email;
        $this->amount = $amount;
        $this->paymentMethod = $paymentMethod;
    }

    public function getOrderId(): string {
        return $this->orderId;
    }

    public function getProductId(): string {
        return $this->productId;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function getWeight(): float {
        return $this->weight;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getPaymentMethod(): string {
        return $this->paymentMethod;
    }
}

// Facade: CheckoutFacade
class CheckoutFacade {
    private InventoryService $inventoryService;
    private PaymentProcessor $paymentProcessor;
    private ShippingService $shippingService;
    private NotificationService $notificationService;

    public function __construct() {
        // Initialize subsystems (in practice, these might be injected)
        $this->inventoryService = new InventoryService();
        // Example: Using PayPal, but could be swapped with CreditCardGateway
        $this->paymentProcessor = new PaymentProcessor(new PayPalGateway());
        $this->shippingService = new ShippingService();
        $this->notificationService = new NotificationService();
    }

    public function processOrder(Order $order): array {
        // Step 1: Check stock availability
        if (!$this->inventoryService->checkStock($order->getProductId(), $order->getQuantity())) {
            throw new Exception("Insufficient stock for product: " . $order->getProductId());
        }

        // Step 2: Process payment
        if (!$this->paymentProcessor->processPayment($order->getAmount())) {
            throw new Exception("Payment processing failed");
        }

        // Step 3: Calculate shipping and schedule delivery
        $shippingCost = $this->shippingService->calculateShippingCost(
            $order->getAddress(),
            $order->getWeight()
        );
        $trackingNumber = $this->shippingService->scheduleDelivery(
            $order->getAddress(),
            $order->getOrderId()
        );

        // Step 4: Send confirmation
        $this->notificationService->sendConfirmation(
            $order->getEmail(),
            $order->getOrderId()
        );

        // Return order details
        return [
            'orderId' => $order->getOrderId(),
            'trackingNumber' => $trackingNumber,
            'shippingCost' => $shippingCost,
            'status' => 'Order processed successfully'
        ];
    }
}

// Example Usage of CheckoutFacade
// Create an order
$order = new Order(
    orderId: "ORDER123",
    productId: "PROD456",
    quantity: 2,
    weight: 5.0, // 5 kg
    address: "123 Main St, Springfield",
    email: "customer@example.com",
    amount: 199.99,
    paymentMethod: "PayPal"
);

// Instantiate the facade
$checkoutFacade = new CheckoutFacade();

// Process the order using the facade
try {
    $result = $checkoutFacade->processOrder($order);
    echo "Order Summary:\n";
    echo "Order ID: " . $result['orderId'] . PHP_EOL;
    echo "Tracking Number: " . $result['trackingNumber'] . PHP_EOL;
    echo "Shipping Cost: $" . $result['shippingCost'] . PHP_EOL;
    echo "Status: " . $result['status'] . PHP_EOL;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}

// Why This is a Facade
// - The CheckoutFacade hides the complexity of interacting with InventoryService, PaymentProcessor,
//   ShippingService, and NotificationService.
// - The client only calls processOrder() with an Order object, unaware of the subsystem interactions.
// - Subsystems can be modified (e.g., swap PayPal for CreditCardGateway) without affecting the client.
// - Error handling and coordination are encapsulated within the facade.

// Benefits in This Example
// 1. Simplified Interface: One method call (processOrder) handles all checkout steps.
// 2. Loose Coupling: Client doesn't need to know about subsystem classes or their interactions.
// 3. Maintainability: Subsystem changes (e.g., new payment gateway) don't affect client code.
// 4. Centralized Logic: Facade manages the sequence of operations and error handling.

// Potential Improvements
// - Add dependency injection for subsystems to improve testability.
// - Support multiple payment gateways dynamically based on Order's paymentMethod.
// - Add validation for Order data before processing.
// - Include transaction management to ensure atomicity across subsystems.

// When Not to Use Facade
// - If the subsystem is simple and doesn't justify the overhead of a facade.
// - If clients need fine-grained control over subsystem components.
// - If the facade becomes too complex, turning into a "god object."

// Output of the Example
// When you run the above code, it will output:
// Checking stock for product: PROD456, quantity: 2
// Processing payment of $199.99 via PayPal
// Calculating shipping cost for address: 123 Main St, Springfield, weight: 5 kg