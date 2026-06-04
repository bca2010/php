<?php
  $arr = [10, 20, 30, 40, 50];
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pos  = (int)$_POST['pos'];
    $item = (int)$_POST['item'];
    array_splice($arr, $pos, 0, $item);
    echo "Array after insertion: " . implode(', ', $arr);
  } else {
    echo "Original Array: " . implode(', ', $arr);
  }    ?>
 
<form method='post'>
  <input type='number' name='item' placeholder='New item'>
  <input type='number' name='pos'  placeholder='Position (0-5)'>
  <button type='submit'>Insert</button>
</form>