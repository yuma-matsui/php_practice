<?php
  //タイムゾーンを合わせる関数
  // date_default_timezone_set('Asia/Tokyo');

  // $today = time();
  // $format_date = date('y/m/d', $today);
  // echo $format_date;

  $today = new DateTime();
  $today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
  echo $today->format('Y/m/d');