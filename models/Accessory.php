<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product {
  private $material;
  private $size;

  function __construct($_name){
    parent::__construct($_name);
  }

  //SETTER
  public function setMaterial($_material){
    $this->material = $_material;
  }
  public function setSize($_size){
    $this->size = $_size;
  }

  // GETTER
  public function getMaterial(){
    return $this->material;
  }
  public function getSize(){
    return $this->size;
  }
}