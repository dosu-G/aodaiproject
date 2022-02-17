<?php
// require vào
require_once "../model/loaihang.php";
require_once "../model/sanpham.php";
$act = "index";
if(isset($_GET['act'])==true){
    $act = $_GET['act'];
}
$maloai = new loaihang();
$sanpham = new sanpham();
switch ($act) {
    case 'index':
        $ds=$maloai->getAllLoaiHang();
        require_once "../view/view_index.php";
        break;
    case 'addnew':
        // gọi đến form thêm loại hàng
        require_once "../view/view_addnew_loaihang.php";
        break;
    case 'insert':
        if(isset($_POST['send'])==true){
            $tenloai = $_POST['tenloai'];
            $thutu = $_POST['id'];
            $maloai->insertLoaiHang($thutu,$tenloai);
            header('Location:index.php');
        }
        break;
    case 'delete':
        // kiểm tra 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $maloai->deleteLoaiHang($id);
            header('Location:index.php');
        }
        break;
    case 'edit':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $ds = $maloai->getLoaiHangById($id);
            require_once '../view/view_edit_loaihang.php';
        }
        break;
    case 'update':
        if(isset($_GET['id'])==true){
            $id = $_GET['id'];
            $tenloai = $_POST['tenloai'];
            $maloai->updateLoaiHang($id,$tenloai);
            header('Location:index.php');
        }
        break;
    case 'view_sanpham':
        $ds = $sanpham->getAllSanPham();
        require_once '../view/view_sanpham.php';
        break;
    case 'add_sanpham':
        $ds=$maloai->getAllLoaiHang();
        require_once '../view/add_sanpham.php';
        break;
    case 'insert-sanpham':
        // kiểm tra dữ liệu
        if(isset($_POST['send'])==true){
            $idsanpham = $_POST['idsanpham'];
            $tensanpham = $_POST['tensp'];
            $gia = $_POST['price'];
            $maggia = $_POST['magiamgia'];
            $solg = $_POST['solg'];
            $maloai = $_POST['maloai'];
            $mota = $_POST['mota'];
            // nơi lưu ảnh
            $target_dir ="img/file/";
            $file = basename($_FILES['filename']['name']);
            $target_file = $target_dir . $file;
            move_uploaded_file($_FILES["filename"]["tmp_name"],$target_file);

            $files = $_FILES['filename']['name'];
            $sanpham->insertproduct($idsanpham,$tensanpham,$gia,$maggia,$solg,$maloai,$files,$mota);
            header('Location:index.php?act=view_sanpham');
        }
        break;
    case 'sanpham_edit':
        if(isset($_GET['id'])==true){
            $id = $_GET['id'];
            $ds=$maloai->getAllLoaiHang();
            $list= $sanpham->getAllSanPhamByid($id);
            require_once "../view/edit_sanpham.php";
        }
        break;
    case 'sanpham_delete':
        if(isset($_GET['id'])==true){
            $id = $_GET['id'];
            $sanpham->deleteIdProduct($id);
            header('Location:index.php?act=view_sanpham');
        }
        break;
    case 'update_sanpham':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // lấy các giá trị về 
            $tensanpham = $_POST['tensp'];
            $gia = $_POST['price'];
            $maggia = $_POST['magiamgia'];
            $solg = $_POST['solg'];
            $maloai = $_POST['maloai'];
            $sanpham->updateProduct($id,$tensanpham,$gia,$maggia,$solg,$maloai);
            header('Location:index.php?act=view_sanpham');
        }
        break;
    case 'detail':
        if(isset($_GET['id'])==true){
            $id = $_GET['id'];
            $list= $sanpham->getAllSanPhamByid($id);
            require_once "../view/detail_product.php";
        }
        break;
    default:
        # code...
        break;
}

?>