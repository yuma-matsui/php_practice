<?php

  interface ItemInterface{
    public function getPrice();
  }

  class Book implements ItemInterface{
    private $price;

    public function getPrice(){
      return $this->price;
    }
  }

  class Pencil implements ItemInterface{
    private $price;

    public function getPrice(){
      return $this->price;
    }
  }