<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/BTL_web/config/dbconnect.php');
class data_banner{
    public function hienthi_banner(){
        global $conn;
        $sql = "SELECT * FROM tbl_banner";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function them_banner($img_path){
        global $conn;
        $sql = "INSERT INTO tbl_banner (img_path) VALUES ('$img_path')";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function sua_banner($id_banner, $img_path){
        global $conn;
        $sql = "UPDATE tbl_banner SET img_path = '$img_path' WHERE id_banner = $id_banner";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function xoa_banner($id_banner){
        global $conn;
        $sql = "DELETE FROM tbl_banner WHERE id_banner = $id_banner";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function search_banner_by_id($id_banner){
        global $conn;
        $sql = "SELECT * FROM tbl_banner WHERE id_banner = $id_banner";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
}

?>