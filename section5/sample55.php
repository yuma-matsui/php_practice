<?php
  class Item{
    public $name;
  }

  $item01 = new Item();
  $item01->name = 'PHP入門';

  $item02 = clone($item01);
  $item01->name = 'JS入門';
  echo $item02->name . "\n";
  echo $item01->name;