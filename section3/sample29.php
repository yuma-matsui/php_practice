<?php
  $points = [];

  do{
    echo '点数を入力 > ';
    $point = (int)trim(fgets(STDIN));
    if($point === -1){
      break;
    }
  
    array_push($points, $point);
  
    $sum = 0;

    for ($i=0; $i < count($points); $i++){
      echo $i + 1 . "." . $points[$i] . "\n";

      $sum += $points[$i];
    }

    echo '合計' . $sum . "\n";
    $avg = $sum / count($points);
    echo '平均' . $avg . "\n";
  }while($point !== -1);