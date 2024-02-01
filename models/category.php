<?php
class Category
{
    private ?int $id;
    private string $name;
    
    public function __construct(?int $id = null, string $name)
    {
        // initialisation des attributs
        $this->id = $id;
        $thid->name = $name;
    }
    
    // Méthodes getters pour obtenir les attributs
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    
    // Méthode setter
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
}