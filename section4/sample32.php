<?php
  //合計を計算する
  function sum(...$numbers){ // $numbersには配列として数値が渡る。
    $answer = 0;
    foreach ($numbers as $num){ //配列に入った各可変パラメータを取り出し$answerに加算。
      $answer += $num;
    }
    return $answer;
  }

  $item_sum = sum(100, 100, 120, 100, 2, 50 ,100, 235, 35321);
  echo $item_sum;