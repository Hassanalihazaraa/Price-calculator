<?php
declare(strict_types=1);

class CustomerLoader extends DatabaseConnection
{
    private array $customers;

    public function __construct()
    {
        $handle = $this->connect()->prepare('SELECT * FROM customer');
        $handle->execute();
        $customerGroupLoader = new CustomerGroupLoader();
        $customerGroupLoader->getCustomerGroup();
        foreach ($handle->fetchAll() as $customer) {
            $customerGroup = $customerGroupLoader[$customer['group_id']];
            $this->customers[$customer['id']] = new Customer((int)$customer['id'], (string)$customer['firstname'], (string)$customer['lastname'],$customerGroup, (int)$customer['fixed_discount'], (int)$customer['variable_discount']);
        }
    }

    public function getCustomers(): array
    {
        return $this->customers;
    }
}