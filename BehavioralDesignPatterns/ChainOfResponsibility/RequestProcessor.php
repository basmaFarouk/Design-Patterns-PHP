<?php 
namespace BehavioralDesignPatterns\ChainOfResponsibility;
class RequestProcessor {
    private MiddlewareHandler $middlewareChainHandler;

    public function __construct(MiddlewareHandler $middlewareChainHandler) {
        $this->middlewareChainHandler = $middlewareChainHandler;
    }

    public function processRequest(Request $request): Response {
        $response = $this->middlewareChainHandler->handle($request);
        if (!$response->isSucceeded()) {
            return new Response("Request failed: " . $response->getReason(), false);
        }
        echo "Processing request\n";
        return new Response("Request successfully processed", true);
    }
}