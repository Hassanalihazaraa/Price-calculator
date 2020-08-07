<?php
declare(strict_types=1);

class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $fixedDiscount;
    private int $variableDiscount;
    private CustomerGroup $customerGroup;

    public function __construct(int $id, string $firstName, string $lastName, CustomerGroup $customerGroup, int $fixedDiscount, int $variableDiscount)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->customerGroup =$customerGroup;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getGroupId(): CustomerGroup
    {
        return $this->customerGroup;
    }

    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }

    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }

    public function totalFixedDiscount(){
        $totalFixedDiscount = $this->customerGroup->getFixedDiscount();
        while (!empty($this->customerGroup->getGroupId())){
            $customerGroupFixedDiscount = $this->customerGroup->getGroupId()->getFixedDiscount();
            $totalFixedDiscount += $customerGroupFixedDiscount;
            $this->customerGroup = $this->customerGroup->getGroupId();
        }
        return $totalFixedDiscount;
    }

    public function totalVariableDiscount(): int
    {
        $totalVariableDiscount = $this->customerGroup->getVariableDiscount();
        while (!empty($this->customerGroup->getGroupId())){
            $totalCustomerGroupVariableDiscount = $this->customerGroup->getGroupId()->getVariableDiscount();
            $totalVariableDiscount += $totalCustomerGroupVariableDiscount;
            $this->customerGroup = $this->customerGroup->getGroupId();
        }
        return $totalVariableDiscount;
    }

    //compare both discounts and choose the best value for customer and also deduct the customer discount
    public function setDiscount(Product $product): float
    {
        $finalPrice = 0;
        $finalFixedDiscount = 0;
        $finalVariableDiscount = 0;
        if($product->getPrice() * $this-totalVariableDiscount() * 0.01 > $this->totalFixedDiscount()){
            $finalVariableDiscount = $this->totalVariableDiscount();
            $finalPrice = max($this->variableDiscount, $finalVariableDiscount) * 0.01;
            return $finalPrice;
        } else {
            $finalFixedDiscount = $this->totalFixedDiscount();
            $finalPrice = $product->getPrice() - $finalFixedDiscount - $this->fixedDiscount;
            return $finalPrice;
        }
}
}