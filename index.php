<?php

class Movie {
   
    public $title;
    public $year;
    public $genre;
    public $language;

    public function __construct($title, $year, $genre, $language) { //COSTRUTTORE
        $this -> title = $title;
        $this -> year = $year;
        $this -> genre = $genre;
        $this -> language = $language;
    }

}

$movie1 = new Movie("Pulp Fiction", "1994","Pulp", "American-english");

$movie2 = new Movie("The Big Lebowski", "1998", "comedy", "American-english");

echo "<pre>";
var_dump($movie1);
echo "<br><br>";
var_dump($movie2);
echo "</pre>";


?>