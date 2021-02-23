<?php
  $tax = 10;
  //足し算の結果を返す
  function sum($a, $b){
    global $tax; //関数内でグローバル変数を使用するための宣言
    $ret = ($a + $b) * ($tax / 100 + 1);
    return $ret;
  }

  $num1 = 100;
  $num2 = 300;

  $answer = sum($num1, $num2);
  echo $answer;