<?php
  function make_list($list, $head = "・"){ //初期値を設定したい引数は必ず第二引数以降に配置する。
    foreach ($list as $key => $val){
      echo $head . $key . " : " . $val . "\n";
    }
  }

  $pref = [
    'hokkaido' => '北海道',
    'aomori' => '青森県',
    'iwate' => '岩手県'
  ];

  make_list($pref);
  make_list($pref, "> ");