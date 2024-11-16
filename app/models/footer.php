<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
class data_footer{
    public function hienthi_footer(){
        global $conn;
        $sql = "SELECT * FROM tbl_footer";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function sua_footer($id_footer, $diachi, $lienhe, $email){
        global $conn;
        $sql = "UPDATE tbl_footer SET diachi = '$diachi', lienhe = '$lienhe', email = '$email' WHERE id_footer = $id_footer";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
}
?>