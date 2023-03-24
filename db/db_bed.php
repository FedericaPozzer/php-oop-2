<?php 

require_once __DIR__ . "../../models/class_bed.php";
require_once __DIR__ . "../../models/class_category.php";

$iconDog = "fa-solid fa-dog";
$iconCat = "fa-solid fa-cat";

$beds = [
    new Bed(
        "Cuccia A",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInQq00eQpU5bOV6a24lA6vXpoD8n3yeVWSA&usqp=CAU",
        // "19,99",
        "70",
        new Category("Dog", $iconDog),
        "XXL"
    ),
    new Bed(
        "Cuccia B",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInQq00eQpU5bOV6a24lA6vXpoD8n3yeVWSA&usqp=CAU",
        // "9,99",
        "26",
        new Category("Dog", $iconDog),
        "S"
    ),
    new Bed(
        "Cuccia C",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRInQq00eQpU5bOV6a24lA6vXpoD8n3yeVWSA&usqp=CAU",
        // "45,50",
        "56",
        new Category("Dog", $iconDog),
        "XXL"
    ),
    new Bed(
        "Cuccia D",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ8O9gL7Bc5pkA59On7cI3393ThUNEihramA&usqp=CAU",
        // "19,99",
        "24",
        new Category("Cat", $iconCat),
        "M"
    ),
    new Bed(
        "Cuccia E",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ8O9gL7Bc5pkA59On7cI3393ThUNEihramA&usqp=CAU",
        // "9,99",
        "68",
        new Category("Cat", $iconCat),
        "L"
    ),
    new Bed(
        "Cuccia F",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ8O9gL7Bc5pkA59On7cI3393ThUNEihramA&usqp=CAU",
        // "45,50",
        "120",
        new Category("Cat", $iconCat),
        "M"
    )

]

?>