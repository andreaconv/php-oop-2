<?php

class Product {
  private $name;
  private $image;
  private $category;
  private $price;

  //voglio un solo valore obbligatorio che è il nome del prodotto
  function __construct($_name,){
    $this->setName($_name);
  }

  //SETTER
  public function setName($_name){
    $this->name = $_name;
  }
  public function setImage($_image){
    $this->image = $_image;
  }
  public function setCategory($_category){
    $this->category = $_category;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }

  //GETTER
  public function getName(){
    return $this->name;
  }
  public function getImage(){
    return $this->image;
  }
  public function getCategory(){
    return $this->category;
  }
  public function getPrice(){
    return $this->price;
  }

}