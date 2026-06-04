<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n = (int)$_POST['n'];
    $prime = ($n > 1);
    for ($i = 2; $i <= sqrt($n); $i++) {
      if ($n % $i == 0) { $prime = false; break; }
    }
    echo $prime ? "$n is Prime" : "$n is Not Prime";
  }
?>
 
<form method='post'>
  <input type='number' name='n' placeholder='Enter number'>
  <button type='submit'>Check Prime</button>
</form>