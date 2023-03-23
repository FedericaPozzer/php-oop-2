<?php

class Food extends Product
{
    public $expireDate;

    public function __construct(string $_name, int $_price, string $_category, string $_expireDate)
    {
        parent:: __construct($_name, $_price, $_category);
       
        $this->expireDate = $_expireDate;
    }
}
