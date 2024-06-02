<?php
require_once 'models/movie.php';
require_once 'models/genre.php';
require_once 'models/actor.php';

$genre1 = new Genre;

$genre1 -> setGenre('Actions');
// var_dump($genre1);

$genre2 = new Genre;
$genre2 -> setGenre('Fantasy');

$actor1 = new Actor('Dwayne', 'Johnson');
$actor2 = new Actor("Auli'i", "Cravalho");

$actor3 = new Actor("Jay", "Baruchel");
$actor4 = new Actor("Gerard", "Butler");

$movie1_cast = [$actor1, $actor2];
$movie2_cast = [$actor3, $actor4];




$movie1 = new Movie("Oceania", 1999, $movie1_cast, $genre1);
$movie2 = new Movie("Dragon Trainer", 2010, $movie2_cast, $genre2);

var_dump($movie1);

var_dump("---------------");

var_dump($movie2);
