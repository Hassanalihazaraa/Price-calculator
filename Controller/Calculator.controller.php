<?php
declare(strict_types=1);

class CalculatorController
{
    public function render(): void
    {
        $getCustomers = new CustomerLoader();
        $customers = $getCustomers->getCustomers();

        $getProducts = new ProductLoader();
        $products = $getProducts->getProducts();

        require_once 'View/Homepage.php';
    }
}