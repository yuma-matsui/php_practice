<?php
  $items = [
    ['PHP入門', 1500],
    ['JS入門', 2000]
  ];
  $file = new SplFileObject('data/items.csv', 'a');
  
  foreach($items as $item) {
    $file->fputcsv($item);
  }