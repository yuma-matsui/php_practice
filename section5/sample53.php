<?php
  class Item {
    private $name;
    private $price;

    public function __construct($name, $price){
      $this->name = $name;
      $this->price = $price;
    }

    // 画面出力の際に自動的に呼び出される
    public function __toString(){
      return $this->name . ' / ' . number_format($this->price) . '円';
    }
  }

  $item = new Item('PHP入門', 1500);
  echo $item;