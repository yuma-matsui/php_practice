<?php
  echo '数字を入力してください >';
  $number = trim(fgets(STDIN));

  /* if ($number >= 10){
    echo '10以上です';
  } else {
    echo "10以下です";
  } */

  if ($number > 10):
    echo '10よりも大きいです';
  else:
    echo '10以下です';
  endif;