<?php
  require_once 'app/Shop/book.php';
  require_once 'app/review/book.php';

  use app\Shop\Book;
  use app\review\Book as BookReview;

  $book = new Book();
  echo $book->getPrice() . "\n";

  $book_review = new BookReview();
  echo $book_review->getPoint() . "\n";