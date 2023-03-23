<?php 

require_once __DIR__ . "../../models/class_toys.php";
require_once __DIR__ . "../../models/class_category.php";

$toys = [
    new Toys(
        "Gioco ABC",
        "https://cdn.thewirecutter.com/wp-content/media/2021/12/dog-toys-2048px-0010.jpg",
        // "19,99",
        "32",
        new Category("Dog"),
        "plastic"
    ),
    new Toys(
        "Gioco DEF",
        "https://cdn.thewirecutter.com/wp-content/media/2021/12/dog-toys-2048px-0010.jpg",
        // "9,99",
        "4",
        new Category("Dog"),
        "rubber"
    ),
    new Toys(
        "Gioco GHI",
        "https://cdn.thewirecutter.com/wp-content/media/2021/12/dog-toys-2048px-0010.jpg",
        // "45,50",
        "15",
        new Category("Dog"),
        "plastic"
    ),
    new Toys(
        "Gioco ABC",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrASGWPgo3xEy_bQhegaIxAS_79sOlvKScUA&usqp=CAU",
        // "19,99",
        "8",
        new Category("Cat"),
        "rubber"
    ),
    new Toys(
        "Gioco DEF",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrASGWPgo3xEy_bQhegaIxAS_79sOlvKScUA&usqp=CAU",
        // "9,99",
        "9",
        new Category("Cat"),
        "rubber"
    ),
    new Toys(
        "Gioco GHI",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrASGWPgo3xEy_bQhegaIxAS_79sOlvKScUA&usqp=CAU",
        // "45,50",
        "11",
        new Category("Cat"),
        "plastic"
    )

]

?>