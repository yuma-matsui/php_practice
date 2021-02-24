<?php
  class Item {
    protected $unit; //個数

    public function __construct($unit){
      $this->unit = $unit;
    }

    public function getUnit() {
      return $this->unit . '個';
    }
  }

  class Book extends Item {
    private $page; // ページ数

    public function __construct($unit, $page){
      parent:: __construct($unit);
      $this->page = $page;
    }

    public function getUnit() {
      return $this->unit . '冊';
    }
  }

  $eraser = new Item(10);
  echo $eraser->getUnit() . "\n";

  $book = new Book(5, 100);
  echo $book->getUnit();