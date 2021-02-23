<?php
  $colors = ['黒', '白', '赤'];
  $colors[] = '紫';
  $colors[] = '黄';
  $colors[] = '緑';
  $colors[] = '青';

  echo '好きな色を選んでください 1.黒 2.白 3.赤 4.紫 5.黄 6.緑 7.青';
  $favorite_color = (int)trim(fgets(STDIN)) - 1;

  if ($favorite_color <= 6 && $favorite_color >= 0){
    echo $colors[$favorite_color] . "色ですね?";
  } else {
    echo '1〜7の半角英数字で入力してください。';
  }

  // for($i = 0; $i < count($colors); $i++){
  //   print($colors[$i] . "\n");
  // }