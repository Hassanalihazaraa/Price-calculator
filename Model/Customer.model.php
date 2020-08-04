<?php
declare(strict_types=1);

class CustomerModel
{
    private int $id;
    private string $name;
    private int $groupId;

    public function __construct(int $id, string $name, int $groupId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->groupId = $groupId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGroupId(): int
    {
        return $this->groupId;
    }
}

echo 'hello world';