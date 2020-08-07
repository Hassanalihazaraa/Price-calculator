<?php
declare(strict_types=1);

class CalculatorController
{
    public function render()
    {
        $getCustomers = new CustomerLoader();
        $customers = $getCustomers->getCustomers();

        $getProducts = new ProductLoader();
        $products = $getProducts->getProducts();

        if(isset($_POST['productId'])&& isset ($_POST['customerId'])){
            $selectedProduct = $products[(int)$_POST['productId']];
            $finalPrice = number_format($customers->setDiscount($selectedProduct) /100, 2);
            $displayDiscountedPrice = "You have to pay {$finalPrice} &euro;";
}
        require_once 'View/Homepage.php';
    }
}

