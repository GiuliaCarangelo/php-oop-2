<?php

class Product{
    public $category;
    public $name;
    public $description;
    public $imageUrl;
    public $price;
    public $availability;
    public $itemsLeft;

    public function __construct(string $_category, string $_name, string $_description, string $_imageUrl, float $_price, bool $_availability, int $_itemsLeft){
        $this->category = $_category;
        $this->name = $_name;
        $this->description = $_description;
        $this->imageUrl = $_imageUrl;
        $this->price = $_price;
        $this->availability = $_availability;
        $this->itemsLeft = $_itemsLeft;
    }

    public function getProdInfo(): string{
        return $this->category . ', ' . $this->name . ', ' . $this->description . ', ' . $this->imageUrl . ', ' . $this->availability . ', ' . $this->itemsLeft;
    }
}