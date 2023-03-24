<?php

class Category
{
    public $categoryName;
    public $icon;

    public function __construct($_categoryName, $_icon) {
        $this->categoryName = $_categoryName;
        $this->icon = $_icon;
    }
}
