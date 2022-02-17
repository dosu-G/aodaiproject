<?php 
// import các file database 
include_once 'database.php';
class product extends DATABASE{
    function __construct(){
        parent::__construct();
}
    function getAllmaloai(){
        $sql = "SELECT * FROM maloai";
        $kq = $this->query($sql);
        return $kq;
    }
    public function getallproduct(){
        $sql = "SELECT * FROM sanpham";
        $kq = $this->query($sql);
        return $kq;
    }
    public function getProductById($id){
        $sql = "SELECT * FROM sanpham WHERE idsanpham='$id'";
        $kq = $this->query($sql);
        return $kq;
    }
    public function listproductbyid($id){
        $sql = "SELECT * FROM sanpham WHERE idmaloai='$id'";
        $kq = $this->query($sql);
        return $kq;
    }
    public function listproductrelase(){
        $sql = "SELECT * FROM sanpham ORDER BY  RAND() LIMIT 4";
        $kq = $this->query($sql);
        return $kq;
    }
    public function addUser($username,$email,$pass,$phone){
        $sql = "INSERT INTO taikhoanuser (username,pass,email,phone) VALUE ('$username','$pass','$email','$phone')";
        $kq = $this->execute($sql);
        return $kq;
    }
    public function productasc(){
        $sql = "SELECT * FROM sanpham ORDER BY giasanpham ASC";
        $kq = $this->query($sql);
        return $kq;
    }
    public function productDesc(){
        $sql = "SELECT * FROM sanpham ORDER BY giasanpham DESC";
        $kq = $this->query($sql);
        return $kq;
    }
    public function searchPro($key){
        $sql = "SELECT * FROM sanpham WHERE tensanpham LIKE '%$key%' ";
        $kq = $this->query($sql);
        return $kq;
    }
  
    public function taikhoan($username,$pass){
        $sql = "SELECT * FROM taikhoanuser WHERE username='$username' AND pass='$pass' AND sort";
        $kq=$this->queryOne($sql);
        // $result = $kq->rowCount();
        return $kq;
    }
    // Hàm check user
    public function getInfoUser($id){
        $sql="SELECT * FROM `taikhoanuser` WHERE `idkh` = '$id'";
        return $this->queryOne($sql);
    }


    // -----------------------------------------------
    public function cartPro($id){
        $sql = "SELECT * FROM sanpham WHERE idsanpham='$id'";
        return $this->queryOne($sql);
    }
}
?>