<?php

class Bed extends Product
{
    public $size;

    public function __construct(string $_name, $_image, int $_price, Category $_category, string $_size)
    {
        parent::__construct($_name, $_image, $_price, $_category);

        $this->size = $_size;
    }
}
