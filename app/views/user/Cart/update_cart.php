<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_sp'], $_POST['quantity'])) {
    $id_sp = $_POST['id_sp'];
    $quantity = (int) $_POST['quantity'];

    if (isset($_SESSION['cart'][$id_sp]) && $quantity > 0) {
        $_SESSION['cart'][$id_sp]['quantity'] = $quantity;
    }
}

header("Location: cart.php");
exit();
