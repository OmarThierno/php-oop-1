<?php

class Movie {
  private string $title;
  private string $description;
  private string $production_year;
  public Genre $genre;
  private array $cast;

  public function __construct(string $title, int $production_year, array $cast, Genre $genre) {
    $this->title = $title;
    $this->production_year = $production_year;
    $this->cast = $cast;
    $this->genre = $genre;
  }
}
