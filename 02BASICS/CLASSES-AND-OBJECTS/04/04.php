<?php declare(strict_types=1);
//Codelex trainig courses
//Section "classes-and-objects" - exercise 04
//Author - K.Pokkers

require_once 'Movie.php';
require_once 'MovieCollection.php';

$movies = new MovieCollection();

$movies->setMovies(new Movie('Casino Royale', 'Eon Productions', 'PG13'));
$movies->setMovies(new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG'));
$movies->setMovies(new Movie('Glass', 'Buena Vista International', 'PG'));

echo 'Movies with rating PG' . PHP_EOL;
echo PHP_EOL;
foreach ($movies->getPG() as $movie) {
    echo $movie->getTitle() . ', ' . $movie->getStudio() . ', ' . $movie->getRating() . PHP_EOL;
    echo '------------------------------------------------------------------' . PHP_EOL;
}






