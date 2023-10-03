<?php

require_once __DIR__ . '/Production.php';


class Genre
{
    public $names;

    public function __construct(
        array $names,
    ) {

        $this->names = $names;
    }
    public function getGenre(){
        return implode("  -  " , $this->names);
    }
};


?>