<?php 

require_once __DIR__ . "../../models/class_beds.php";
require_once __DIR__ . "../../models/class_category.php";

$beds = [
    new Beds(
        "Cuccia ABC",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInQq00eQpU5bOV6a24lA6vXpoD8n3yeVWSA&usqp=CAU",
        // "19,99",
        "26",
        new Category("Dog"),
        "XXL"
    ),
    new Food(
        "Cuccia DEF",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInQq00eQpU5bOV6a24lA6vXpoD8n3yeVWSA&usqp=CAU",
        // "9,99",
        "70",
        new Category("Dog"),
        "S"
    ),
    new Food(
        "Cuccia GHI",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInQq00eQpU5bOV6a24lA6vXpoD8n3yeVWSA&usqp=CAU",
        // "45,50",
        "56",
        new Category("Dog"),
        "XXL"
    ),
    new Food(
        "Cuccia ABC",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ8O9gL7Bc5pkA59On7cI3393ThUNEihramA&usqp=CAU",
        // "19,99",
        "24",
        new Category("Cat"),
        "M"
    ),
    new Food(
        "Cuccia DEF",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ8O9gL7Bc5pkA59On7cI3393ThUNEihramA&usqp=CAU",
        // "9,99",
        "68",
        new Category("Cat"),
        "L"
    ),
    new Food(
        "Cuccia GHI",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ8O9gL7Bc5pkA59On7cI3393ThUNEihramA&usqp=CAU",
        // "45,50",
        "120",
        new Category("Cat"),
        "M"
    )

]

?>