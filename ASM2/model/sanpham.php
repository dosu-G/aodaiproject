<?php
require_once 'database.php';
class sanpham extends DATABASE {
    function __construct(){
        parent::__construct();
    }
    public function getAllSanPham(){
        $sql = "SELECT * FROM sanpham";
        $kq = $this->query($sql);
        return $kq;
    }
    public function insertproduct($idsanpham,$tensanpham,$gia,$maggia,$solg,$maloai,$hinh,$mota){
        $sql = "INSERT INTO sanpham (idsanpham,magiamgia,tensanpham,giasanpham,soluong,idmaloai,hinhanh1,mota) 
        VALUE ('$idsanpham','$maggia','$tensanpham','$gia','$solg','$maloai','$hinh','$mota')
        ";
        $kq = $this->execute($sql);
        return $kq;
    }
    public function deleteIdProduct($id){
        $sql ="DELETE FROM sanpham WHERE idsanpham='$id'";
        $kq = $this->execute($sql);
        return $kq;
    }
    public function getAllSanPhamByid($id){
        $sql = "SELECT * FROM sanpham WHERE idsanpham='$id'";
        $kq = $this->query($sql);
        return $kq;
    }
    public function updateProduct($id,$tensanpham,$gia,$maggia,$solg,$maloai){
        $sql = "UPDATE sanpham SET tensanpham='$tensanpham',giasanpham='$gia',magiamgia='$maggia',soluong='$solg',idmaloai='$maloai' 
        WHERE idsanpham='$id'";
        $kq = $this->execute($sql);
        return $kq;
    }
}

?>