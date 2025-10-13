<?php
namespace BehavioralDesignPatterns\ChainOfResponsibility;
// MiddlewareHandler interface
interface MiddlewareHandler {
    public function setNext(MiddlewareHandler $middlewareHandler): MiddlewareHandler;
    public function handle(Request $request): Response;
}