<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
class data_logo{
    public function hienthi_logo(){
        global $conn;
        $sql = "SELECT * FROM tbl_logo";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function sua_logo($id_logo, $img_path){
        global $conn;
        $sql = "UPDATE tbl_logo SET img_path = '$img_path' WHERE id_logo = $id_logo";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
}

?>