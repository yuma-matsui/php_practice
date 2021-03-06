<?php
  class Item{
    public $name; // 商品名
    private $price; // 価格

    // コンストラクター __construct
    public function __construct($name, $price = 0){
      $this->name = $name;
      $this->price = $price;
    }

    // 価格を設定する setter
    public function setPrice($price){
      if($price < 0){
        return false;
      }
      $this->price = $price;
      return true;
    }

    // 価格を取得する getter
    public function getPrice($end = '') {
      return number_format($this->price) . $end;
    }
  }

  $php_basic = new Item('PHP入門', 2300);
  $php_basic->setPrice(-100);

  echo $php_basic->getPrice('円');