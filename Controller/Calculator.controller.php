<?php
declare(strict_types=1);

class CalculatorController
{
    private array $customer;
    private array $customerGroup;
    private array $products;

    public function __construct()
    {

    }

    public function render()
    {
        require_once 'View/Calculator.view.php';
    }
}