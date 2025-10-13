<?php 
namespace BehavioralDesignPatterns\ChainOfResponsibility;
class SecurityChecksMiddlewareHandler extends AbstractMiddlewareHandler {
    public function handle(Request $request): Response {
        echo "Checking if request passes security checks...\n";
        if (!$request->hasPassedSecurityChecks()) {
            echo "Request failed to pass security checks...\n";
            return new Response("Security checks failed", false);
        }
        return parent::handle($request);
    }
}