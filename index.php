<?php

class Movie {
   
    public $title;
    public $year;
    public $genre;
    public $language;

    public function __construct($title, $year, $language, ...$genre) { //COSTRUTTORE
        
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

$movie1 = new Movie("Pulp Fiction", "1994", "American-english", "Pulp", "Action");

$movie2 = new Movie("The Big Lebowski", "1998", "American-english", "comedy");

echo "<pre>";
var_dump($movie1);
echo "<br><br>";
var_dump($movie2);
echo "</pre>";

echo $movie1 -> getMovieInfo();
echo "<br>";

echo "<br><br>";
echo $movie2 -> getMovieInfo();



?>