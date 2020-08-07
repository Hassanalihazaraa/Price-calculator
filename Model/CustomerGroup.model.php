<?php
declare(strict_types=1);

class CustomerGroup
{
    private int $id;
    private string $name;
    private ?CustomerGroup $customerGroup;
    private int  $fixed_discount;
    private int  $variable_discount;

    public function __construct(int $id, string $name, int $parent_id, int $fixed_discount, int $variable_discount, CustomerGroupLoader $customerGroupLoader)
    {
        $this->id = $id;
        $this->name = $name;
        $customerGroup = $customerGroupLoader->getCustomerGroup();
        $this->customerGroup = ($parent_id !== 0) ?$customerGroup['parent_id'] : null;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParentId(): ?CustomerGroup
    {
        return $this->customerGroup;
    }

    public function getFixedDiscount(): int
    {
        return $this->fixed_discount;
    }

    public function getVariableDiscount(): int
    {
        return $this->variable_discount;
    }
}