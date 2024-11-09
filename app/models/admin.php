<?php
// include("../../../config/dbconnect.php");
include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");//dẫn tuyệt đối
  // include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/app/global.php"); 
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
