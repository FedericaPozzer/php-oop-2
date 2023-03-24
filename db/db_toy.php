<?php 

require_once __DIR__ . "../../models/class_toy.php";
require_once __DIR__ . "../../models/class_category.php";

$toys = [
    new Toy(
        "Gioco A",
        "https://cdn.thewirecutter.com/wp-content/media/2021/12/dog-toys-2048px-0010.jpg",
        // "19,99",
        "32",
        new Category("Dog"),
        "plastic"
    ),
    new Toy(
        "Gioco B",
        "https://cdn.thewirecutter.com/wp-content/media/2021/12/dog-toys-2048px-0010.jpg",
        // "9,99",
        "4",
        new Category("Dog"),
        "rubber"
    ),
    new Toy(
        "Gioco C",
        "https://cdn.thewirecutter.com/wp-content/media/2021/12/dog-toys-2048px-0010.jpg",
        // "45,50",
        "15",
        new Category("Dog"),
        "plastic"
    ),
    new Toy(
        "Gioco D",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrASGWPgo3xEy_bQhegaIxAS_79sOlvKScUA&usqp=CAU",
        // "19,99",
        "8",
        new Category("Cat"),
        "rubber"
    ),
    new Toy(
        "Gioco E",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrASGWPgo3xEy_bQhegaIxAS_79sOlvKScUA&usqp=CAU",
        // "9,99",
        "9",
        new Category("Cat"),
        "rubber"
    ),
    new Toy(
        "Gioco F",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrASGWPgo3xEy_bQhegaIxAS_79sOlvKScUA&usqp=CAU",
        // "45,50",
        "11",
        new Category("Cat"),
        "plastic"
    )

]

?>