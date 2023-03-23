<?php 

require_once __DIR__ . "../../models/class_toys.php";
require_once __DIR__ . "../../models/class_category.php";

$toys = [
    new Toys(
        "Gioco ABC",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "19,99",
        "32",
        new Category("Dog"),
        "plastic"
    ),
    new Toys(
        "Gioco DEF",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "9,99",
        "4",
        new Category("Dog"),
        "rubber"
    ),
    new Toys(
        "Gioco GHI",
        "https://alessiopalleschi.com/wp-content/uploads/2020/04/dog-5504866_960_720.jpg",
        // "45,50",
        "15",
        new Category("Dog"),
        "plastic"
    ),
    new Toys(
        "Gioco ABC",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "19,99",
        "8",
        new Category("Cat"),
        "rubber"
    ),
    new Toys(
        "Gioco DEF",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "9,99",
        "9",
        new Category("Cat"),
        "rubber"
    ),
    new Toys(
        "Gioco GHI",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrl69kHYt4FB6FkOkWlMAHzgA4w7J_TCLV3w&usqp=CAU",
        // "45,50",
        "11",
        new Category("Cat"),
        "plastic"
    )

]

?>