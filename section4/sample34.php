<?php
  // $color = ['黒', '白', '赤'];
  // array_pop($color); //リファレンス渡し → 参照元の値が変わってしまう
  // print_r($color);

  // $price = 10000;
  // $new_price = number_format($price);
  // echo $price;
  // echo "\n";
  // echo $new_price;

  function add_head(&$target){
    for($i=0; $i<count($target); $i++){
      $target[$i] = '● ' . $target[$i];
    }
  }
  $color = ['黒', '白', '赤'];
  print_r($color);
  add_head($color);
  add_head($color);
  add_head($color);
  print_r($color);
