<?php

class Order
{
    private string $id;

    private string $description;

    private float $total;

    private DateTimeImmutable $createdAt;

    public function __construct(
        string $id,
        string $description,
        float $total
    )
    {
        $this->id = $id;
        $this->description = $description;
        $this->total = $total;
        $this->createdAt = new DateTimeImmutable('now');
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}