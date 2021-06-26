<?php

require 'class.php';


$movie_db = [
    new Movie('si vive solo da vivi', 59, 4.99, true),
    new Movie('io sono tempesta', 121, 6, false),
    new Movie('Scarface', 58, 8.2, false),
    new Movie('La grande bellezza', 240, 9.99, true)
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>


    <style>
    .price {
        display: flex;

    }

    .original_price {
        padding-right: 30px;
    }

    .barrato {
        text-decoration: 1px solid red line-through;
    }
    </style>


</head>

<body>

    <?php foreach ($movie_db as $movie) : ?>

    <h3> Titolo:<?= " " . $movie->title ?> </h3>
    <p>Durata:<?= " " . $movie->length . " minuti" ?></p>
    <div class="price">
        <p class="original_price <?= $movie->discount ? "barrato " : " " ?>">
            Prezzo:<?= " " .  $movie->price . " euro" ?></p>

        <?php if ($movie->discount) : ?>
        <p>Prezzo scontato: <?= " " . $movie->get_discount(30) ?></p>

        <?php endif ?>

    </div>

    <br>

    <?php endforeach ?>






</body>

</html>