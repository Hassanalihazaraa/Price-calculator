<?php
declare(strict_types=1);

class CustomerGroupLoader extends DatabaseConnection
{
    private array $customerGroup;

    public function __construct()
    {
        //fetchAll customerGroup
        $handle = $this->connect()->prepare('SELECT * FROM customer_group');
        $handle->execute();
        foreach ($handle->fetchAll() as $customerGroup) {
            $this->customerGroup[$customerGroup['id']] = new CustomerGroup((int)$customerGroup['id'], (string)$customerGroup['name'], (int)$customerGroup['parent_id'], (int)$customerGroup['fixed_discount'], (int)$customerGroup['variable_discount'],$this);
        }
    }

    public function getCustomerGroup(): array
    {
        return $this->customerGroup;
    }
}
