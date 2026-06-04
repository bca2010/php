<?php
  if (isset($_GET['str'])) {
    $s = $_GET['str'];
    echo "Original   : $s<br>";
    echo "Length     : " . strlen($s)         . "<br>";
    echo "Uppercase  : " . strtoupper($s)     . "<br>";
    echo "Lowercase  : " . strtolower($s)     . "<br>";
    echo "Reversed   : " . strrev($s)         . "<br>";
    echo "Word Count : " . str_word_count($s) . "<br>";
    echo "Replace(a->@): " . str_replace('a','@',$s) . "<br>";
    echo "Substring(0,5): " . substr($s, 0, 5) . "<br>";
  }
?>
 
<form method='get'>
  <input type='text' name='str' placeholder='Enter a string'>
  <button type='submit'>Run</button>
</form>