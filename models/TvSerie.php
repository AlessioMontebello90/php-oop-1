<?php

include_once __DIR__ . '/Production.php';
include_once __DIR__ . '/Genre.php';

class TvSerie extends Production
{

    public $aired_on;
    public $last_aired;
    public $episode_length;
    public $seasonal_episodes;
    public $numbers_of_season;

    public function __construct(
        string $name,
        Genre $genres,
        string $country,
        string $episode_length,
        int $aired_on,
        int $last_aired,
        int $seasonal_episodes,
        int $numbers_of_season
    ) {
        parent::__construct(

            $name,
            $genres,
            $country,
        );
        $this->episode_length = $episode_length;
        $this->aired_on = $aired_on;
        $this->last_aired = $last_aired;
        $this->seasonal_episodes = $seasonal_episodes;
        $this->numbers_of_season = $numbers_of_season;
    }

    public function getFullInfo()
    {

        $genre = $this->genres->getGenre();

        return
            "       
            <strong>Nome: </strong>$this->name<br>
            <strong>Paese: </strong>$this->country<br>
            <strong>Genere: </strong>$genre<br>
            <strong>Durata Episodi: </strong>$this->episode_length<br>
            <strong>in onda: </strong>$this->aired_on<br>
            <strong>Ultima messa in onda: </strong>$this->last_aired<br>
            <strong>Episodi per Stagione: </strong>$this->seasonal_episodes<br>
            <strong>Stagioni: </strong>$this->numbers_of_season<br>
            ";
    }
}