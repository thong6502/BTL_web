<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'btl_web';
  
    $conn = mysqli_connect($server, $user, $pass, $database);
  
    if (!$conn) {
      die("Kết nối thất bại: " . mysqli_connect_error());
    }
?>