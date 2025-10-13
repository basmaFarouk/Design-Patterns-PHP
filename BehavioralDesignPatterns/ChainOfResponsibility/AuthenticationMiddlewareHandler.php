<?php 
namespace BehavioralDesignPatterns\ChainOfResponsibility;

// AuthenticationMiddlewareHandler class
class AuthenticationMiddlewareHandler extends AbstractMiddlewareHandler {
    public function handle(Request $request): Response {
        echo "Checking if request is authenticated...\n";
        if (!$request->isAuthenticated()) {
            echo "Request is not authenticated\n";
            return new Response("Authentication failed", false);
        }
        return parent::handle($request);
    }
}