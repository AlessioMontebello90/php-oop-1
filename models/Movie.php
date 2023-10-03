<?php

require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Genre.php';



class Movie extends Production
{

    public $length;
    public $year;

    public function __construct(
        string $name,
        Genre $genres,
        string $country,
        string $length,
        int $year
    ) {
        parent::__construct(
            $name,
            $genres,
            $country,
        );
        $this->length = $length;
        $this->year = $year;
    }

    public function getFullInfo()
    {

        $genre = $this->genres->getGenre();

        return
            "
        <strong>Nome: </strong>$this->name<br>
        <strong>Paese: </strong>$this->country<br>
        <strong>Genere: </strong>$genre<br>
        <strong>Durata: </strong>$this->length<br>
        <strong>Anno: </strong>$this->year<br>
        ";
    }
};