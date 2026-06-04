<?php
  echo "Current Date        : " . date('d-m-Y')          . "<br>";
  echo "Current Time        : " . date('H:i:s')          . "<br>";
  echo "Day Name            : " . date('l')              . "<br>";
  echo "Month Name          : " . date('F')              . "<br>";
  echo "Unix Timestamp      : " . time()                 . "<br>";
  echo "Formatted DateTime  : " . date('D, d M Y H:i:s') . "<br>";
  echo "Tomorrow            : " . date('d-m-Y', strtotime('+1 day')) . "<br>";
?>