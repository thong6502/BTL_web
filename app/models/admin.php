<?php
include("../../../config/dbconnect.php");
class data_admin
{
  function admin_login($user, $pass)
  {
    global $conn;
    $sql = "SELECT * FROM admin WHERE user = $user AND pass = $pass";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      return true;
    } else {
      return false;
    }
  }
  function hien_thi_admin() {
    global $conn;
    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
    return $result;
}

}
