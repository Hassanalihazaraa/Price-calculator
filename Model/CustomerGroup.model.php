<?php
declare(strict_types=1);

class CustomerGroupModel
{
    private int $id, $parent_id, $fixed_discount, $variable_discount;
    private string $name;

    public function __construct(int $id, string $name, int $fixed_discount, int $variable_discount, int $parent_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;
        $this->parent_id = $parent_id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getParentId(): int
    {
        return $this->parent_id;
    }

    public function getName(): string
    {
        return $this->name;
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