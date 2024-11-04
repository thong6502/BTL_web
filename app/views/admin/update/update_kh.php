<?php
include("../../../../config/dbconnect.php");
include('./../../../models/khachhang.php');


$id_kh = $_GET['id'] ?? null;
if (!$id_kh) {
    die("Invalid request. No customer ID provided.");
}

$data = new data_khachhang();

$customer = $data->get_khach_hang_by_id($id_kh);
if (!$customer) {
    die("Customer not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];

    $result = $data->sua_khach_hang($hoten, $sdt, $diachi);

    if ($result) {
        echo "<script>alert('Cập nhập thành công!');
                      window.location.href = '../admin.php';
              </script>";
    } else {
        echo "<script>alert('Lỗi!');</script>";
    }
}
?>

<body>
    <h2>Update Khách Hàng</h2>
    <form method="POST" action="">
        <label for="hoten">Họ tên:</label>
        <input type="text" id="hoten" name="hoten" value="<?php echo htmlspecialchars($customer['hoten']); ?>" required>
        <br>

        <label for="sdt">Số điện thoại:</label>
        <input type="text" id="sdt" name="sdt" value="<?php echo htmlspecialchars($customer['sdt']); ?>" required>
        <br>

        <label for="diachi">Địa chỉ:</label>
        <input type="text" id="diachi" name="diachi" value="<?php echo htmlspecialchars($customer['diachi']); ?>" required>
        <br>

        <input type="submit" value="Update">
        <a href="../admin.php">quay lại</a>
    </form>
</body>
</html>
