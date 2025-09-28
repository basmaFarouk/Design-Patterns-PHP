<?php  

interface LoanHandler {
    public function setNext(LoanHandler $handler): LoanHandler;
    public function handle(LoanRequest $request): string;
}

abstract class AbstractLoanHandler implements LoanHandler {
    private ?LoanHandler $nextHandler = null;

    public function setNext(LoanHandler $handler): LoanHandler {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(LoanRequest $request): string {
        if ($this->nextHandler !== null) {
            return $this->nextHandler->handle($request);
        }
        return "Loan rejected: Exceeds all approval limits";
    }
}

class Clerk extends AbstractLoanHandler {
    public function handle(LoanRequest $request): string {
        if ($request->getAmount() <= 10000) {
            return "Loan approved by Clerk for $" . $request->getAmount();
        }
        return parent::handle($request);
    }
}

class Manager extends AbstractLoanHandler {
    public function handle(LoanRequest $request): string {
        if ($request->getAmount() <= 100000) {
            return "Loan approved by Manager for $" . $request->getAmount();
        }
        return parent::handle($request);
    }
}

class Director extends AbstractLoanHandler {
    public function handle(LoanRequest $request): string {
        if ($request->getAmount() <= 1000000) {
            return "Loan approved by Director for $" . $request->getAmount();
        }
        return parent::handle($request);
    }
}

class LoanRequest {
    private float $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function getAmount(): float {
        return $this->amount;
    }
}

// Usage
$clerk = new Clerk();
$clerk->setNext($manager = new Manager())->setNext(new Director());
$request = new LoanRequest(50000);
echo $clerk->handle($request); // Output: Loan approved by Manager for $50000