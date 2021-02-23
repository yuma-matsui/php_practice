<?php
  $colors = ['黒', '白', '赤'];
  // echo count($colors);

  // $my_color = array_shift($colors);
  // echo $my_color;
  // print_r($colors);

  $colors_string = implode(',', $colors);
  $colors_string .= ',緑,黄,橙';
  $new_array = explode(',', $colors_string);
  print_r($new_array);

