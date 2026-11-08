<?php

namespace App\Models;

use Framework\Core\Model;

class Product extends Model
{
    protected int $id;
    protected int $category_id = 0;
    protected string $name = "Neznamy produkt";
    protected string $parameters = '';
    protected ?string $description = null;
    protected string $price = "0";
    protected string $image = '';


    // --- GETTERY ---
    public function getId(): int
    {
        return $this->id;
    }

    public function getCategory(): string
    {
        return Category::getOne($this->category_id)->getName();
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParameters(): string
    {
        return $this->parameters;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    // --- SETTERY ---
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

        public function setCategory(int $category_id): self
    {
        $this->category_id = $category_id;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

        public function setParameters(string $parameters): self
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }
}