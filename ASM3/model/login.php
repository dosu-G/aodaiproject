<?php
// gọi lại file database 
require_once 'database.php';
class login extends DATABASE
{
    // gọi lại function construct
    public function __construct(){
        parent::__construct();
    }
    // Hàm check user
    public function getInfoUser($username){
        $sql="SELECT * FROM `taikhoanuser` WHERE `username` = '$username'";
        return $this->queryOne($sql);
    }
    public function insertLogin($username,$pass,$email,$phone){
        $sql = "INSERT INTO taikhoanuser (username,pass,email,phone) VALUE ('$username','$pass','$email','$phone')";
        return $this->execute($sql);
    }
}
?>