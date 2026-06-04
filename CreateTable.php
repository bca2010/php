<?php
  $conn = new mysqli('localhost', 'root', '', 'MyDatabase');
 
  if ($conn->connect_error)
    die('Connection failed: ' . $conn->connect_error);
 
  $sql = 'CREATE TABLE IF NOT EXISTS Students (
            id      INT AUTO_INCREMENT PRIMARY KEY,
            name    VARCHAR(100) NOT NULL,
            age     INT NOT NULL,
            email   VARCHAR(100)
          )';
 
  echo ($conn->query($sql) === TRUE)
       ? 'Table created successfully.'
       : 'Error: ' . $conn->error;
 
  $conn->close();
?>