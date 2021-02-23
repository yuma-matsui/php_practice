<?php
  $books = [
    ['デザイン入門'],
    ['lalavel入門']
  ];

  $books[0][1] = 'デザイン基礎'; 
  $books[1][1] = 'PHP入門';
  $books[2][0] = 'JavaScript入門';
  
  // echo $books[0][0] . "\n";
  // echo $books[2][0];
  print_r($books);