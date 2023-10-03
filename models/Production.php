<?php

class Production {

    public $name;
    public $genres;
    public $country;

    public function __construct(
        string $name,
        Genre $genres,
        string $country,
    ) {
        $this->name = $name;
        $this->genres = $genres;
        $this->country = $country;
    }

    public function getFullInfo()
    {

        $genre = $this->genres->getGenre();

        return "$this->name $this->country $genre";
    }
};