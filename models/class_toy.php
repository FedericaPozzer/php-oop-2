<?php

require_once __DIR__ . "/class_category.php";
require_once __DIR__ . "../../db/db_toy.php";
require_once __DIR__ . "/class_product.php";

class Toy extends Product
{
    public $material;

    public function __construct(string $_name, $_image, int $_price, Category $_category, string $_material)
    {
        parent::__construct($_name, $_image, $_price, $_category);

        $this->material = $_material;
    }

    public function className()
    {
        return "giochi";
    }
}
