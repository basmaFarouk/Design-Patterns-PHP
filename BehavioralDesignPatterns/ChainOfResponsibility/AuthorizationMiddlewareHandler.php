<?php 
namespace BehavioralDesignPatterns\ChainOfResponsibility;

class AuthorizationMiddlewareHandler extends AbstractMiddlewareHandler {
    public function handle(Request $request): Response {
        echo "Checking if request is authorized...\n";
        if (!$request->isAuthorized()) {
            echo "Request failed to be authorized...\n";
            return new Response("Authorization failed", false);
        }
        return parent::handle($request);
    }
}