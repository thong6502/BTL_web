<?php
  include("../../config/dbconnect.php");
  class data_admin
  {
    function admin_login($user, $pass){
      global $conn;
      $sql = "SELECT * FROM tbl_admin WHERE user = $user AND pass = $pass";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        return true;
      }else{
        return false;
      }
    }
  }
?>