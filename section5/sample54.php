<?php
  class Item {
    public static $tax = 20;

    public static function getTax(){
      return self::$tax;
    }
  }

  Item::$tax = 8;
  echo Item::$tax;
