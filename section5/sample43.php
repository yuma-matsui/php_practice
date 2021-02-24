<?php
  class Item{
    public $name; // 商品名
    public $price; // 価格

      //コンストラクター
    public function __construct($name, $price){
      $this->name = $name;
      $this->price = $price;
    }

      // 価格を取得する
    public function getPrice($end = '') {
      return number_format($this->price) . $end;
    }
  }

  $php_basic = new Item('PHP入門', 3900);
  // $php_basic->price = 3900;
  // $php_basic->name = 'PHP入門';

  echo $php_basic->getPrice('$');