<?php
declare(strict_types=1);

class CustomerModel
{
    private int $id, $groupId, $fixedDiscount, $variableDiscount;
    private string $firstName, $lastName;

    public function __construct(int $id, int $groupId, int $fixedDiscount, int $variableDiscount, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getGroupId(): int
    {
        return $this->groupId;
    }

    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}