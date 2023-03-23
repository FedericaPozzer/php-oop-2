<?php 

require_once __DIR__ . "../../models/class_beds.php";
require_once __DIR__ . "../../models/class_category.php";

$beds = [
    new Beds(
        "Cuccia ABC",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "19,99",
        "26",
        new Category("Dog"),
        "XXL"
    ),
    new Food(
        "Cuccia DEF",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "9,99",
        "70",
        new Category("Dog"),
        "S"
    ),
    new Food(
        "Cuccia GHI",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "45,50",
        "56",
        new Category("Dog"),
        "XXL"
    ),
    new Food(
        "Cuccia ABC",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "19,99",
        "24",
        new Category("Cat"),
        "M"
    ),
    new Food(
        "Cuccia DEF",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "9,99",
        "68",
        new Category("Cat"),
        "L"
    ),
    new Food(
        "Cuccia GHI",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "45,50",
        "120",
        new Category("Cat"),
        "M"
    )

]

?>