<?php
  class Item{
    public $name; // 商品名
    public $price; // 価格

      // 価格を取得する
    public function getPrice($end = '') {
      return number_format($this->price) . $end;
    }
  }

  $php_basic = new Item();
  $php_basic->price = 3900;

  echo $php_basic->getPrice('$');