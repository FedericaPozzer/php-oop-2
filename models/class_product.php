<?php

require_once __DIR__ . "/class_category.php";

class Product {
    public $name;
    public $image;
    public $price; // potevo mettere protected ma avrei dovuto aggiungere setter e getter
    public $category;

    public function __construct(string $_name, $_image, float $_price, Category $_category) {
        $this->setName($_name);
        $this->image = $_image;
        $this->price = $_price;
        $this->setCategory($_category);
    }

    public function setCategory($category) {
        if (($category != "Dog") || ($category != "Cat")) return false;
        $this->category = $category;
    }

    public function setName($name) {
        if(!is_string($name) || $name === "") return false;
        $this->name = $name;

        return $this;
        // il return this si usa spesso dopo i setter, serve per poter controllare se funziona, tipo:

        // if($product->setName("")) {
            // echo "operazioen risucita";
        // } else {
            // echo "operazioen fallita";
        // }
    }
}

// le classi e i file delle classi vanno al singolare
// l'underscore non è necessaria: serve per far capire che non è lo stesso file