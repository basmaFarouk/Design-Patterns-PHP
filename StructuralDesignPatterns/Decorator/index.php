<?php 

namespace StructuralDesignPatterns\Decorator;

// Example usage
$coffee = new Coffee();
$coffeeWithMilk = new MilkDecorator($coffee);
$coffeeWithMilkAndSugar = new SugarDecorator($coffeeWithMilk);

$tea = new Tea();
$teaWithMint = new MintDecorator($tea);
$teaWithMintAndMilk = new MilkDecorator($teaWithMint);

echo "Prepared Coffee: " . $coffeeWithMilkAndSugar->prepare() . "\n";
echo "Prepared Tea: " . $teaWithMintAndMilk->prepare() . "\n";