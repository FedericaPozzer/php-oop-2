<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
require_once __DIR__ . "/db/db_food.php";
require_once __DIR__ . "/db/db_toy.php";
require_once __DIR__ . "/db/db_bed.php";
require_once __DIR__ . "/models/class_category.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Extends</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="bg-success p-2 bg-opacity-25">
    <div class="container">
        <h1 class="text-center mt-4">I NOSTRI PRODOTTI</h1>

        <div class="row row-cols-6 mt-4">

            <!-- echo $f->category->categoryName -->

            <?php foreach ($food as $f) : ?>
                <div class="col card-group">
                    <div class="card">
                        <img src=" <?php echo $f->image ?> " class="card-img-top" alt="Immagine Prodotto">
                        <div class="card-body text-center">
                            <h4 class="card-title"> <?php echo $f->name ?> </h4>
                            <p class="card-text"> Tipo di articolo: <?php echo $f->className() ?> </p>
                            <h5>For: <i class=" <?php echo $f->category->icon ?> "></i> </h5>
                            <p> <small> Data di scadenza: <?php echo $f->expireDate ?> </small> </p>
                            <p class="card-text mb-1">Prezzo: <?php echo $f->price ?> €</p>
                            <a href="#" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="row row-cols-6 mt-4">

            <?php foreach ($toys as $toy) : ?>
                <div class="col card-group">
                    <div class="card">
                        <img src=" <?php echo $toy->image ?> " class="card-img-top" alt="Immagine Prodotto">
                        <div class="card-body text-center">
                            <h4 class="card-title"> <?php echo $toy->name ?> </h4>
                            <p class="card-text"> Tipo di articolo: <?php echo $toy->className() ?> </p>
                            <h5>For: <i class=" <?php echo $toy->category->icon ?> "></i> </h5>
                            <p>Materiale: <?php echo $toy->material ?>! </p>
                            <p class="card-text mb-1">Prezzo: <?php echo $toy->price ?> €</p>
                            <a href="#" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <div class="row row-cols-6 mt-4">

            <?php foreach ($beds as $bed) : ?>
                <div class="col card-group">
                    <div class="card">
                        <img src=" <?php echo $bed->image ?> " class="card-img-top" alt="Immagine Prodotto">
                        <div class="card-body text-center">
                            <h4 class="card-title"> <?php echo $bed->name ?> </h4>
                            <p class="card-text"> Tipo di articolo: <?php echo $bed->className() ?> </p>
                            <h5>For: <i class=" <?php echo $bed->category->icon ?> "></i> </h5>
                            <p>Taglia: <?php echo $bed->size ?> </p>
                            <p class="card-text mb-1">Prezzo: <?php echo $bed->price ?> €</p>
                            <a href="#" class="btn btn-warning" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Acquista</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</body>

</html>