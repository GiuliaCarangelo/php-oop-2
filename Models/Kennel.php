<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product{
    public $size;
public function __construct(string $_category, string $_name, string $_description, string $_imageUrl, float $_price, bool $_availability, int $_itemsLeft, string $_size){
    {
        parent::__construct($_category, $_name, $_description, $_imageUrl, $_price, $_availability, $_itemsLeft );
        $this->size = $_size;
    }
}
}