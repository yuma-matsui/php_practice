<?php

  // function sum(int $a, int $b): int {
  //   return $a + $b;
  // }
  // $sum = sum(30, 40);
  // echo $sum;

  //コールバック関数を引数に取る関数
  // function echo_price($callback){
  //   echo number_format($callback(1000, 5999)) . "円";
  // }

  // アロー関数 ※バージョン7.4以降で使用可能
  // $get_sum = fn($a, $b) => $a + $b;
  // $sum = $get_sum(10, 35);
  // echo $sum;

  //無名関数・クロージャー ※中括弧を閉じた直後に ; が必要
  // $get_sum = function($a, $b){
  //   return $a + $b;
  // }; 
  // echo echo_price($get_sum);

  // 引数としてそのまま無名関数を渡すこともできる。 ※wordpressで使用される。
  // echo_price(function($a, $b){
  //   return $a * $b;
  // });