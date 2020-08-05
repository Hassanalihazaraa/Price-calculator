<?php
declare(strict_types=1);

class ProductLoader extends DatabaseConnection
{
    private array $products;

    public function __construct()
    {
        //fetchAll Product
        $handle = $this->getDatabase()->prepare('SELECT * FROM product');
        $handle->execute();
        $products = [];
        foreach ($handle->fetchAll() as $product) {
            $products = new Product((int)$product['id'], (string)$product['name'], (int)$product['price']);
        }
        return $products;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}