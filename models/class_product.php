<?php

require_once __DIR__ . "/class_category.php";

class Product {
    public $name;
    public $image;
    public $price;
    public $category;

    public function __construct(string $_name, $_image, float $_price, Category $_category) {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->setCategory($_category);
    }

    public function setCategory($category) {
        if (($category != "Dog") || ($category != "Cat")) return false;
        $this->category = $category;
    }
}

