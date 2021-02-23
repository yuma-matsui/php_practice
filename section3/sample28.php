<?php
  $colors = ['黒', '白', '', '赤'];

  foreach($colors as $color_name){
    if($color_name === ''){
      //break;
      continue;
    }
    echo $color_name . "\n";
  }