<?php

namespace App\Models;

use Framework\Core\Model;

class Category extends Model
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $description = null;


    // --- GETTERY ---
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }


    // --- SETTERY ---
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
}