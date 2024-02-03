<?php 

require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $calories;
    public $carbs; // 4
    public $fats; // 9
    public $proteins; // 4

    public function __construct(string $_category, string $_name, string $_description, string $_imageUrl, float $_price, bool $_availability, int $_itemsLeft, int $_fats, int $_carbs, int $_proteins)
    {
        parent::__construct($_category, $_name, $_description, $_imageUrl, $_price, $_availability, $_itemsLeft);
        $this->fats = $_fats;
        $this->carbs = $_carbs;
        $this->proteins = $_proteins;

        $this->calories = ($_fats * 9) + ($_carbs + $_proteins) * 4; 
    }

    public function getCalories():int {
        return round($this->calories);
    }
} 

?>