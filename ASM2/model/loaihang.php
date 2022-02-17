<?php
require_once "database.php";
class loaihang extends DATABASE {
   function __construct(){
       parent::__construct();
   }
   function getAllLoaiHang(){
       $sql = "SELECT * FROM maloai";
       $kq = $this->query($sql);
       return $kq;
   }
   function insertLoaiHang($id,$tenloai){
       $sql = "INSERT INTO maloai (idmaloai,tenloai) VALUE ('$id','$tenloai')";
       $kq = $this->execute($sql);
       return $kq;
   }
   function deleteLoaiHang($id){
       $sql = "DELETE FROM maloai WHERE idmaloai='$id'";
       $kq = $this->execute($sql);
       return $kq;
   }
   function getLoaiHangById($id){
       $sql = "SELECT idmaloai,tenloai FROM  maloai WHERE idmaloai='$id'";
       $kq = $this->query($sql);
       return $kq;
   }
   function updateLoaiHang($id,$tenloai){
       $sql = "UPDATE maloai SET tenloai='$tenloai' WHERE idmaloai='$id'";
       $kq = $this->execute($sql);
       return $kq;
   }
}
?>