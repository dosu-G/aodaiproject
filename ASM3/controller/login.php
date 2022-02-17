<?php
session_start();
 // gọi model login tương tác 
require_once '../model/login.php';
$auth = new login();
$act = null;
if(isset($_GET['act'])==true){
    $act = $_GET['act'];
}
// xử lí switch case 
switch ($act) {
    case 'login':
        require_once '../view/login/view_login.php';
        break;
    case 'dk':
        if(isset($_POST['send'])==true){
            // tạo ra biến mảng erro 
            $erro =[];
            // lấy dữ liệu
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            if(empty($username)){
                $erro['username'] = "Bạn chưa nhập tên !";
            }
            // bắt lỗi email
            if(empty($email)){
                $erro['email'] = "Bạn chưa nhập Email";
            }
            if(empty($phone)){
                $erro['phone'] =" Không được để trống số điện thoại";
            }
            if(empty($pass)){
                $erro['pass'] = "Không được để trống mật khẩu !";
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $erro['validateEmail']= "Bạn chưa nhập chính xác Email";
            }
            if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                $erro['validateUser']= "Chỉ cho phép nhập ký tự khoảng trắng và chữ cái!";
            }
            if (!preg_match ("/^[0-9]*$/",$phone)){  
                $erro['validatePhone'] = "Bạn chưa nhập đúng số điện thoại!";         
            }
            else{
                $auth->insertLogin($username,$pass,$email,$phone);
            }
        }
        require_once '../view/login/view_login.php';
        break;
    case 'checklogin':
        if(isset($_POST['sendLogin'])){
            $erroLogin = [];
            $username = $_POST['usernameLogin'];
            $password = $_POST['passLogin'];
            // Xử lý thông tin 
            if(empty($username) || empty($password)){
                $erroLogin['user']="Bạn chưa nhập tên đăng nhập!";
                $erroLogin['pass']="Bạn chưa nhập mật khẩu";
            }
            else{
                $info = $auth->getInfoUser($username);
                if(!$info){
                   $erroLogin['emptyuser'] = "Không tài tại tài khoản";
                }
                else{
                    $erroLogin['success'] = "Chào mừng '.$username.' !";
                    $_SESSION['id'] = $info['idkh'];
                    $_SESSION['name'] = $info['username'];
                }
            }
            // else{
            //     $info = $auth->getInfoUser($username);
            //     if(!$info){
            //        echo "Bạn chưa nhập username";
            //     }else{
            //         if($info['pass'] != $password){
            //             echo 'Mật khẩu không chính xác'; 
            //          }else{
            //              echo 'Đăng nhập thành công !';
            //              $_SESSION['id'] = $info['idkh'];
            //              header('location : index.php?act=index');
            //          }
            //     }

            // }
        }
        require_once '../view/login/view_login.php';
        break;
    default:
        # code...
        break;
}
?>