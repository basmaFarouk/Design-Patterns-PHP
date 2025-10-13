<?php
namespace BehavioralDesignPatterns\Observer;


class OnlineMarketplace {
    private array $subscribers;
    private array $products;
    private array $offers;

    public function __construct() {
        $this->subscribers = [];
        $this->initSubscriberEvents();
        $this->products = [];
        $this->offers = [];
    }

    private function initSubscriberEvents(): void {
        $this->subscribers[EventType::NEW_PRODUCT] = [];
        $this->subscribers[EventType::NEW_OFFER] = [];
        $this->subscribers[EventType::JOB_OPENING] = [];
    }

    public function subscribe(string $eventType, Subscriber $subscriber): void {
        $this->subscribers[$eventType][] = $subscriber;
    }

    public function unsubscribe(string $eventType, Subscriber $subscriber): void {
        $key = array_search($subscriber, $this->subscribers[$eventType], true);
        if ($key !== false) {
            unset($this->subscribers[$eventType][$key]);
            $this->subscribers[$eventType] = array_values($this->subscribers[$eventType]);
        }
    }

    public function addNewProduct(Product $product): void {
        $this->products[] = $product;
        $this->notifySubscribers(EventType::NEW_PRODUCT, "New product is added: {$product->getName()}");
    }

    public function addNewJobOpening(string $jobTitle): void {
        $this->notifySubscribers(EventType::JOB_OPENING, "New opening position is available: {$jobTitle}");
    }

    public function addNewOffer(Offer $offer): void {
        $this->offers[] = $offer;
        $this->notifySubscribers(EventType::NEW_OFFER, "New offer is added: {$offer->getMessage()}");
    }

    private function notifySubscribers(string $eventType, string $message): void {
        foreach ($this->subscribers[$eventType] as $subscriber) {
            $subscriber->notify($message);
        }
    }
}
