<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product{
    public $material;
    public function __construct(string $_category, string $_name, string $_description, string $_imageUrl, bool $_availability, int $_itemsLeft, string $_material)
    {
        parent::__construct($_category, $_name, $_description, $_imageUrl, $_availability, $_itemsLeft, $_material);
        $this->material = $_material;
    }
}