<?php
declare(strict_types=1);


//database connection
class database
{
    private PDO $database;

    public function __construct()
    {
        require_once '../hiddenResources/credentials.php';

        $driverOptions = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];

        $this->database = PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }

    //fetchAll customer from database
    public function getAllCustomers()
    {
        $handle = $this->database->prepare('SELECT * FROM customer');
        $handle->execute();
        $customers = [];
        foreach ($handle->fetchAll() as $customer) {
            $customers = new Customer((int)$customer['id'], (string)$customer['firstName'], (string)$customer['lastName'], (int)$customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
        return $customers;
    }

    //fetchAll customerGroup
    public function getAllCustomerGroup()
    {
        $handle = $this->database->prepare('SELECT * FROM customer_group');
        $handle->execute();
        $customerGroup = [];
        foreach ($handle->fetchAll() as $customerGroup) {
            $customerGroup = new CustomerGroup((int)$customerGroup['id'], (string)$customerGroup['name'], (int)$customerGroup['parent_id'], (int)$customerGroup['fixed_discount'], (int)$customerGroup['variable_discount']);
        }
        return $customerGroup;
    }

    //fetchAll Product
    public function getAllProduct()
    {
        $handle = $this->database->prepare('SELECT * FROM product');
        $handle->execute();
        $products = [];
        foreach ($handle->fetchAll() as $product) {
            $products = new Product((int)$product['id'], (string)$product['name'], (int)$product['price']);
        }
        return $products;
    }
}