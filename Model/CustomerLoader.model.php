<?php
declare(strict_types=1);

class CustomerLoader extends DatabaseConnection
{
    private array $customers;

    public function __construct()
    {
        $handle = $this->connect()->prepare('SELECT * FROM customer');
        $handle->execute();
        foreach ($handle->fetchAll() as $customer) {
            $this->customers[] = new Customer((int)$customer['id'], (string)$customer['firstname'], (string)$customer['lastname'], (int)$customer['group_id'], (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
    }

    public function getCustomers(): array
    {
        return $this->customers;
    }
}