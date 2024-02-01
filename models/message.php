<?php

class Message
{
    private ?int $id;
    private ?int $salonId;
    private string $content;
    private ?DateTime $createdAt;
    
    public function __construct(?int $id, ?int $salonId, string $content, ?DateTime $createdAt)
    {
        $this->id = $id;
        $this->salonId = $salonId;
        $this->content = $content;
        $this->createdAt = $createdAt;
    }
    
    // Méthodes getters
    public function getId(): ?int
    {
        return $this->id;
    }
     public function getSalonId(): ?int
    {
        return $this->salonId;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }
    
    // Méthodes setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function setSalonId(?int $salonId): void
    {
        $this->salonId = $salonId;
    }
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    public function setCreatedAt(?DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}