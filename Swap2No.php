<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    echo "Before Swap: a=$a, b=$b<br>";
    $temp = $a; $a = $b; $b = $temp;
    echo "After Swap:  a=$a, b=$b";
  }
?>
 
<form method='post'>
  <input type='number' name='a' placeholder='A'>
  <input type='number' name='b' placeholder='B'>
  <button type='submit'>Swap</button>
</form>