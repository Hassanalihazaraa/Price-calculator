<?php
declare(strict_types=1);

class CustomerGroupModel
{
    private int $id;
    private string $name;
    private int $fixed_discount;
    private int $variable_discount;
    private int $group_id;

    public function __construct(int $id, string $name, int $fixed_discount, int $variable_discount, int $group_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;
        $this->group_id = $group_id;
    }

    public function getId(): int
    {
        return $this->id;
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

    public function getGroupId(): int
    {
        return $this->group_id;
    }
}