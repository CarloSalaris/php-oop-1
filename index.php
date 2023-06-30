<?php

class Movie {
   
    public $title;
    public $year;
    public $genre;
    public $language;

}

$movie1 = new Movie();
    $movie1 -> title = "Pulp Fiction";
    $movie1 -> year = "1994";
    $movie1 -> genre = "Pulp";
    $movie1 -> language = "American-english";

$movie2 = new Movie();
    $movie2 -> title = "The Big Lebowski";
    $movie2 -> year = "1998";
    $movie2 -> genre = "comedy";
    $movie2 -> language = "American-english";


echo "<pre>";
var_dump($movie1);
echo "<br><br>";
var_dump($movie2);
echo "</pre>";


?>