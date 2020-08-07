<?php
declare(strict_types=1);

class ProductLoader extends DatabaseConnection
{
    private array $products;

    public function __construct()
    {
        //fetchAll Product
        $handle = $this->connect()->prepare('SELECT * FROM product');
        $handle->execute();
        foreach ($handle->fetchAll() as $product) {
            $this->products[$product['id']] = new Product((int)$product['id'], (string)$product['name'], (int)$product['price']);
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}