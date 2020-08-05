<?php
declare(strict_types=1);

class CustomerGroupLoader extends DatabaseConnection
{
    private array $customerGroup;

    public function __construct()
    {
        //fetchAll customerGroup
        $handle = $this->getDatabase()->prepare('SELECT * FROM customer_group');
        $handle->execute();
        $customerGroups = [];
        foreach ($handle->fetchAll() as $customerGroup) {
            $customerGroups = new CustomerGroup((int)$customerGroup['id'], (string)$customerGroup['name'], (int)$customerGroup['parent_id'], (int)$customerGroup['fixed_discount'], (int)$customerGroup['variable_discount']);
        }
        return $customerGroups;
    }

    public function getCustomerGroup(): array
    {
        return $this->customerGroup;
    }
}