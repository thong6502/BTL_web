<?php
  session_start();
  if (!isset($_SESSION['check_login_admin'])) {
    $_SESSION['check_login_admin'] = false;
  }
?>