<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
require_once __DIR__ . "/db/db_food.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h3 class="text-center mt-3">I NOSTRI PRODOTTI</h3>

        <div class="row row-cols-6 mt-3">

            <?php foreach ($food as $f) : ?>
                <div class="col card-group">
                    <div class="card">
                        <img src=" <?php echo $f->image ?> " class="card-img-top" alt="Immagine Prodotto">
                        <div class="card-body text-center">
                            <h5 class="card-title"> <?php echo $f->name ?> </h5>
                            <p class="card-text"> Tipo di articolo: <?php  ?> - cateogria <?php ?> </p>
                            <p class="card-text">prezzo <?php echo $f->price ?> €</p>
                            <a href="#" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="row row-cols-6 mt-3">
            <div class="col">

                <div class="card">
                    <img src="..." class="card-img-top" alt="Immagine Prodotto">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nome Prodotto <?php ?> </h5>
                        <p class="card-text">tipo di articolo <?php ?> - cateogria <?php ?> </p>
                        <p class="card-text">prezzo <?php ?> €</p>
                        <a href="#" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Acquista</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row row-cols-6 mt-3">
            <div class="col">

                <div class="card">
                    <img src="..." class="card-img-top" alt="Immagine Prodotto">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nome Prodotto <?php ?> </h5>
                        <p class="card-text">tipo di articolo <?php ?> - cateogria <?php ?> </p>
                        <p class="card-text">prezzo <?php ?> €</p>
                        <a href="#" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Acquista</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>