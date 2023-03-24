<?php 

require_once __DIR__ . "../../models/class_food.php";
require_once __DIR__ . "../../models/class_category.php";

$food = [
    new Food(
        "Crocchette A",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "19,99",
        "6",
        new Category("Dog"),
        "12/03/2026"
    ),
    new Food(
        "Crocchette B",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "9,99",
        "7",
        new Category("Dog"),
        "12/03/2026"
    ),
    new Food(
        "Crocchette C",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "45,50",
        "56",
        new Category("Dog"),
        "12/03/2026"
    ),
    new Food(
        "Crocchette D",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "19,99",
        "34",
        new Category("Cat"),
        "12/03/2026"
    ),
    new Food(
        "Crocchette E",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "9,99",
        "8",
        new Category("Cat"),
        "12/03/2026"
    ),
    new Food(
        "Crocchette F",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "45,50",
        "12",
        new Category("Cat"),
        "12/03/2026"
    )

]



?>