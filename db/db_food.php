<?php 

require_once __DIR__ . "../../models/class_food.php";
require_once __DIR__ . "../../models/class_category.php";

$iconDog = "fa-solid fa-dog";
$iconCat = "fa-solid fa-cat";

$food = [
    new Food(
        "Crocchette A",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "19,99",
        "6",
        new Category("Dog", $iconDog),
        "12/03/2026"
    ),
    new Food(
        "Crocchette B",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "9,99",
        "7",
        new Category("Dog", $iconDog),
        "12/03/2026"
    ),
    new Food(
        "Crocchette C",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "45,50",
        "56",
        new Category("Dog", $iconDog),
        "12/03/2026"
    ),
    new Food(
        "Crocchette D",
        "https://gattichepassione.com/wp-content/uploads/2019/11/crocchette-per-gatti.jpg",
        // "19,99",
        "34",
        new Category("Cat", $iconCat),
        "12/03/2026"
    ),
    new Food(
        "Crocchette E",
        "https://gattichepassione.com/wp-content/uploads/2019/11/crocchette-per-gatti.jpg",
        // "9,99",
        "8",
        new Category("Cat", $iconCat),
        "12/03/2026"
    ),
    new Food(
        "Crocchette F",
        "https://gattichepassione.com/wp-content/uploads/2019/11/crocchette-per-gatti.jpg",
        // "45,50",
        "12",
        new Category("Cat", $iconCat),
        "12/03/2026"
    )

]



?>