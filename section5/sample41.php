<?php
  class Item{
    public $name; // 商品名
    public $price; // 価格
  }

  // PHP入門
  $php_basic = new Item();
  $php_basic->name = 'PHP入門';
  $php_basic->price = 1500;

  echo $php_basic->name, ' / ', $php_basic->price;

  // JS入門
  $js_basic = new Item();
  $js_basic->name = 'JS入門';
  $js_basic->price = 1200;

  echo "\n";
  echo $js_basic->name, ' / ', $js_basic->price;