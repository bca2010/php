<?php
  $n = isset($_GET['n']) ? (int)$_GET['n'] : 0;
  echo ($n % 2 == 0) ? "$n is Even" : "$n is Odd";
?>
 
<!-- HTML Form -->
<form method='get'>
  <input type='number' name='n' placeholder='Enter number'>
  <button type='submit'>Check</button>
</form>