<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_sp'])) {
    $id_sp = $_POST['id_sp'];

    if (isset($_SESSION['cart'][$id_sp])) {
        unset($_SESSION['cart'][$id_sp]);
    }
}

header("Location: cart.php");
exit();
