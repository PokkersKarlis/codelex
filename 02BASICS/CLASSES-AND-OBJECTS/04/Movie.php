<?php

class Movie

{
    public string $title;
    public string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getRating(): string
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getStudio(): string
    {
        return $this->studio;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

}