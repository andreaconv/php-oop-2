<?php

require_once __DIR__ . '/Product.php';

class Toys extends Product {
  private $characteristics;
  private $size;

  function __construct($_name){
    parent::__construct($_name);
  }

  //SETTER
  public function setCharacteristics($_characteristics){
    $this->characteristics = $_characteristics;
  }
  public function setSize($_size){
    $this->size = $_size;
  }

  // GETTER
  public function getPrimaStr(){
    return $this->characteristics;
  }
  // public function getCharacteristics(){
  //   return $this->characteristics;
  // }
  public function getSize(){
    return $this->size;
  }
}