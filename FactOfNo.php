<?php
  function factorial($n) {
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
  }
  if (isset($_GET['n'])) {
    $n = (int)$_GET['n'];
    echo "Factorial of $n = " . factorial($n);
  }
?>
 
<form method='get'>
  <input type='number' name='n' placeholder='Enter number'>
  <button type='submit'>Calculate</button>
</form>