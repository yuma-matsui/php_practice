<?php
  $gender = '男性';
  $age = 21;

  // if($gender == '男性' && $age >= 20){
  //   echo '成人男性ですね?';
  // }

  // if($gender == '男性' || $age >= 20){
  //   echo '男性または成人ですね？';
  // }

  if($gender == '男性' xor $age >= 20){
    echo '20才ではない男性か、20歳の女性ですね?';
  }