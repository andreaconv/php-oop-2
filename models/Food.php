<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
  private $weight;
  private $ingredients;

  function __construct($_name){
    parent::__construct($_name);
  }

  //SETTER
  public function setWeight($_weight){
    $this->weight = $_weight;
  }
  public function setIngredients($_ingredients){
    $this->ingredients = $_ingredients;
  }

  // GETTER
  public function getWeight(){
    return $this->weight;
  }
  public function getIngredients(){
    return $this->ingredients;
  }
}