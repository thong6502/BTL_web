<main role="main" class="container">
    <div class="content mt-5">
        <?php
        // include('./../../models/admin.php');
        include('../../../models/admin.php');

        $get_data = new data_admin();
        $select = $get_data->hien_thi_admin();
        ?>
        <h2 class="text-center mb-4">Danh sách Admin</h2>
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Password</th>
                    <th colspan="2">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!empty($select)) {
                        foreach ($select as $ad) {
                ?>
                        <tr>
                            <td><?php echo htmlspecialchars($ad['id_admin']); ?></td>
                            <td><?php echo htmlspecialchars($ad['user']); ?></td>
                            <td><?php echo htmlspecialchars($ad['password']); ?></td>
                            <td><a href="update_admin.php?up=<?php echo htmlspecialchars($ad['id_admin']); ?>" class="btn btn-warning btn-sm">Update</a></td>
                            <td><a href="admin_delete.php?del=<?php echo htmlspecialchars($ad['id_admin']); ?>" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>Không có dữ liệu</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
