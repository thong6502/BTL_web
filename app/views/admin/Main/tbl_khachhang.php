<main role="main" class="container">
    <div class="content mt-5">
        <?php
        include('./../../models/khachhang.php');
        $get_data = new data_khachhang();
        $select = $get_data->hien_thi_khachhang();
        ?>
        <h2 class="text-center mb-4">Danh sách Khách hàng</h2>
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Họ Tên</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th colspan="2">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($select)) {
                    foreach ($select as $kh) {
                ?>
                        <tr>
                            <td><?php echo htmlspecialchars($kh['id_kh']); ?></td>
                            <td><?php echo htmlspecialchars($kh['user']); ?></td>
                            <td><?php echo htmlspecialchars($kh['hoten']); ?></td>
                            <td><?php echo htmlspecialchars($kh['diachi']); ?></td>
                            <td><?php echo htmlspecialchars($kh['sdt']); ?></td>
                            <td><a href="./update/update_kh.php?id=<?php echo htmlspecialchars($kh['id_kh']); ?>" class="btn btn-warning btn-sm">Update</a></td>
                            <td><a href="khachhang_delete.php?del=<?php echo htmlspecialchars($kh['id_kh']); ?>" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>Không có dữ liệu</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>