<?php

class MovieCollection
{
    private array $movies = [];

    public function setMovies(Movie $movie): void
    {
        $this->movies[] = $movie;
    }

    public function getPG(): array
    {
        return array_filter($this->movies, function (Movie $getRating) {
            return $getRating->getRating() === 'PG';
        }
        );
    }
}