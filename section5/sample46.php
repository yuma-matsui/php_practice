<?php
  class Item {

    /* ※privateで設定したプロパティは継承したクラス内でも使用できなくなる。
    protectedはクラス内と継承クラス内のみで使用可能。 */
    protected $unit; //個数

    public function __construct($unit){
      $this->unit = $unit;
    }

    public function getUnit() {
      return $this->unit . '個';
    }
  }

  // メソッドのオーバーライド 
  class Book extends Item {
    public function getUnit() {
      return $this->unit . '冊';
    }
  }

  $eraser = new Item(10);
  echo $eraser->getUnit() . "\n";

  $book = new Book(5);
  echo $book->getUnit();