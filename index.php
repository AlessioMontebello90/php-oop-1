<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TvSerie.php';
require_once __DIR__ . '/Models/Genre.php';

$genre = new Genre(
    [
        'Commedy',
        
    ]
);

$genre_2 = new Genre(

    [
        'Horror',
        'Thriller',
        'Fantasy',
    ],
);


$mixed = [

    new Movie(
        'The Game',
        new Genre(['Action - Comedy']),
        'US',
        '180 minuti',
        1998
    ),

    new Movie(
        'Profondo Rosso',
        $genre_2,
        'IT',
        '180 minuti',
        1975
    ),

    new TvSerie(
        'The Office',
        $genre,
        'US',
        '35 minutes',
        2010,
        2015,
        30,
        12
    ),

    new TvSerie(
        'The Witcher',
        $genre_2,
        'US',
        '120 minutes',
        2022,
        2023,
        8,
        3
    )

]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
</head>




<body class="bg-secondary">
    <div class="container text-center ">
        <h1>Movie and Tv Series</h1>
        <div class="row g-3">
            <?php foreach ($mixed as $Production) : ?>
            <div class="col-6 ">
                <div class="card bg-danger p-3 text-light">
                    <div class="card-body">
                        <?= $Production->getFullInfo() ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>