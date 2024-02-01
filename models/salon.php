<?php

class Salon
{
    private ?int $id;
    private ?int $categoryId;
    private string $name;
    
    public function __construct(?int $id, ?int $categoryId, string $name)
    {
        $this->id = $id;
        $this->categoryId = $categoryId;
        $this->name = $name;
    }
    
    // Méthodes getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    // Méthodes setters

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}