<?php 

namespace BehavioralDesignPatterns\Observer;

$marketplace = new OnlineMarketplace();

$customer = new Customer("John Doe");
$shippingCompany = new ShippingCompany("FastShip");
$jobFinder = new JobFinder("CareerSeeker");

$marketplace->subscribe(EventType::NEW_PRODUCT, $customer);
$marketplace->subscribe(EventType::NEW_OFFER, $customer);
$marketplace->subscribe(EventType::JOB_OPENING, $jobFinder);
$marketplace->subscribe(EventType::NEW_PRODUCT, $shippingCompany);

$marketplace->addNewProduct(new Product("Laptop", 999.99));
$marketplace->addNewOffer(new Offer("10% off on electronics"));
$marketplace->addNewJobOpening("Software Engineer");