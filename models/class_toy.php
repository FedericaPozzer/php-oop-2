<?php

class Toy extends Product
{
    public $material;

    public function __construct(string $_name, int $_price, string $_category, string $_material)
    {
        parent::__construct($_name, $_price, $_category);

        $this->material = $_material;
    }
}
