<?php
  echo '西暦を入力してください >';
  $era = trim(fgets(STDIN));

  if (is_numeric($era) && $era <= date('Y')):
    if($era >= 2018):
      echo '令和です';
    elseif($era >= 1988):
      echo '平成です';
    elseif($era >= 1925):
      echo '昭和です';
    elseif($era >= 1911):
      echo '大正です';
    elseif($era >= 1867):
      echo '明治です';
    else:
      echo '明治以前です';
    endif;
  else:
    echo '今年よりも前の半角数字で入力してください';
  endif;