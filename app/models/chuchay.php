<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
class data_chuchay{
    public function hienthi_chuchay(){
        global $conn;
        $sql = "SELECT * FROM tbl_chuchay";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function sua_chuchay($id_textchay, $noidung){
        global $conn;
        $sql = "UPDATE tbl_chuchay SET noidung = '$noidung' WHERE id_textchay = $id_textchay";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
}

?>