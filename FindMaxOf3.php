<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int)$_POST['c'];
    $max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);
    echo "Maximum: $max";
  }
?>
 
<form method='post'>
  <input type='number' name='a' placeholder='A'>
  <input type='number' name='b' placeholder='B'>
  <input type='number' name='c' placeholder='C'>
  <button type='submit'>Find Max</button>
</form>