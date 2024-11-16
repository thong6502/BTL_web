<?php
include($_SERVER['DOCUMENT_ROOT'] . "/BTL_web/config/dbconnect.php");
class data_admin
{
  function login($user, $password)
  {
    global $conn;
    $sql = "SELECT * FROM tbl_admin WHERE user = '$user' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      session_start();
      $_SESSION['check_login_admin'] = true;
      return true;
    } else {
      return false;
    }
  }
  function register($user, $password) {
    global $conn;
    $sql = "INSERT INTO tbl_admin(user, password) VALUES('$user', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
  }
}
