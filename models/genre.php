<?php

class Genre {
  private string $name;
  public string $description;

  public function setGenre(string $name) {
    if(strlen($name) < 20) {
      $this->name = $name;
    }
  }
}