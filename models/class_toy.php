<?php

class Toy extends Product
{
    public $material;

    public function __construct(string $_name, $_image, int $_price, Category $_category, string $_material)
    {
        parent::__construct($_name, $_image, $_price, $_category);

        $this->material = $_material;
    }
}
