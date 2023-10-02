<?php

require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';

$thriller = new Genre('Thriller');
$romantic = new Genre('Romantic');

$memento = new Movie('Memento', '2:30', 'http//...', $thriller);
$titanic = new Movie('Titanic', '2:30', 'http//...', $romantic);



echo $memento->getDetail();

echo $titanic->getDetail();