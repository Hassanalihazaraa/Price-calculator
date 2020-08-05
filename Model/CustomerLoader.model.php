<?php
declare(strict_types=1);

class CustomerLoader extends DatabaseConnection
{
    private array $customers;

    public function __construct()
    {
        //fetchAll customer from database
        $handle = $this->getDatabase()->prepare('SELECT * FROM customer');
        $handle->execute();
        $customers = [];
        foreach ($handle->fetchAll() as $customer) {
            $customers = new Customer((int)$customer['id'], (string)$customer['firstName'], (string)$customer['lastName'], (int)$customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
        return $customers;
    }

    public function getCustomers(): array
    {
        return $this->customers;
    }
}