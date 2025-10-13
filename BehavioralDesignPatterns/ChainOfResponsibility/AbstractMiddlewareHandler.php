<?php

namespace BehavioralDesignPatterns\ChainOfResponsibility;

class AbstractMiddlewareHandler implements MiddlewareHandler {
    private ?MiddlewareHandler $nextHandler = null;

    public function setNext(MiddlewareHandler $middlewareHandler): MiddlewareHandler {
        $this->nextHandler = $middlewareHandler;
        return $middlewareHandler;
    }

    public function handle(Request $request): Response {
        if ($this->nextHandler !== null) {
            return $this->nextHandler->handle($request);
        }
        return new Response("Request has passed all checks successfully", true);
    }
}