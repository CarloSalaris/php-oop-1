<?php

class Movie {
   
    public $title;
    public $year;
    public $genre; //array
    public $language;

    public function __construct(  //COSTRUTTORE
        $title, $year, $language, ...$genre
        ) {
        
        $this -> title = $title;
        $this -> year = $year;
        $this -> language = $language;

        $this -> genre = $genre;

    }

    public function getGenreStr() { //METODO PER ESTRARRE STRINGA DALL'ARRAY GENRE

        $res = "";
        for ($i=0; $i < count($this -> genre); $i++) { 
            
            $genre = $this -> genre[$i];
            $res .= $genre . (
                $i < count($this -> genre) - 1
                ? ", "
                : ""
            );
        }

        return $res;
    }

    public function getMovieInfo() {
        
        return "Title: " . $this -> title . "<br />" . 
                "Year: " . $this -> year . "<br />" .
                "Genre: " . $this -> getGenreStr() . "<br />" . //STRINGA ESTRATTA DALL'ARRAY GENRE
                "Language: " . $this -> language . "<br />";

    }

}