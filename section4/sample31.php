<?php
  //足し算をする関数
  function sum($num1, $num2){
    $answer = $num1 + $num2;
    return $answer;
  }

  $item_sum = sum(60, 100);
  echo $item_sum;