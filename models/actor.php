<?php

class Actor {
  private string $name;
  private string $surname;
  private int $age;

  public function __construct(string $name, string $surname) {
    $this-> name = $name;
    $this-> surname = $surname;
  }
}