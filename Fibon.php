<?php
  function fib($n) {
    return ($n <= 1) ? $n : fib($n-1) + fib($n-2);
  }
  if (isset($_GET['n'])) {
    $n = (int)$_GET['n'];
    $series = [];
    for ($i = 0; $i < $n; $i++) $series[] = fib($i);
    echo "Fibonacci: " . implode(', ', $series);
  }
?>
 
<form method='get'>
  <input type='number' name='n' placeholder='How many terms?'>
  <button type='submit'>Generate</button>
</form>