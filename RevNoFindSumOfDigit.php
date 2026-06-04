<?php
  if (isset($_GET['n'])) {
    $n    = (int)$_GET['n'];
    $rev  = (int)strrev($n);
    $sum  = array_sum(str_split($n));
    echo "Original: $n | Reversed: $rev | Digit Sum: $sum";
  }
?>
 
<form method='get'>
  <input type='number' name='n' placeholder='Enter number'>
  <button type='submit'>Calculate</button>
</form>