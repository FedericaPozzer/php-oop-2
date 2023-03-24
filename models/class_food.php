<?php

require_once __DIR__ . "/class_category.php";
require_once __DIR__ . "../../db/db_food.php";
require_once __DIR__ . "/class_product.php";

class Food extends Product
{
    public $expireDate;

    public function __construct(string $_name, $_image, int $_price, Category $_category, string $_expireDate)
    {
        parent:: __construct($_name, $_image, $_price, $_category);
       
        $this->expireDate = $_expireDate;
    }

    public function className() {
        return "cibo";
    }
}


