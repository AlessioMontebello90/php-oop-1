<?php

require_once __DIR__ . '/Genre.php';

class Movie 
{
    public $title;
    public $lenght;
    public $poster;
    public $genre;

    public function __construct($title, $lenght, $poster, Genre $genre) 
    {
        $this->title = $title;
        $this->lenght = $lenght;
        $this->poster = $poster;
        $this->genre = $genre;
    }

    public function getDetail(){
        $genre_name = $this->genre->name;
        return "Titolo: $this->title - Genere: $genre_name - Durata: $this->lenght";
    }
}