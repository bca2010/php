<?php
  if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $rev = strrev($n);
    echo ($n == $rev) ? "$n is Palindrome" : "$n is Not Palindrome";
  }
?>
 
<form method='get'>
  <input type='number' name='n' placeholder='Enter number'>
  <button type='submit'>Check</button>
</form>