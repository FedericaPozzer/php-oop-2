<?php

class Bed extends Product
{
    public $size;

    public function __construct(string $_name, int $_price, string $_category, string $_size)
    {
        parent::__construct($_name, $_price, $_category);

        $this->size = $_size;
    }
}
