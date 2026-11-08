<?php

namespace App\Models;

use Framework\Core\Model;

class Category extends Model
{
    protected int $id;
    protected string $name = "Neznáme";


    // --- GETTERY ---
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
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
}