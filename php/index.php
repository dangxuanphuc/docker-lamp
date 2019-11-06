<?php
  $host = 'db';
  $user = 'user';
  $password = '123456';
  $db = 'hus_web';
  $conn = new mysqli($host, $user, $password, $db);
  if($conn -> mysqli_connect_error){
    echo 'connection failed'. $conn->mysqli_connect_error;
  }
  echo 'successfully connected to MYSQL';
?>
