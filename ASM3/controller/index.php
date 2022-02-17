<?php
session_start();
   // require các model cần thiết
   require_once '../model/product.php';
//    ---------------------------------
// 
   $act = 'index';
   if(isset($_GET['act'])==true){
       $act = $_GET['act'];
   }
   $produc = new product();

   if(isset($_SESSION['id'])){
$info_user = $produc->getInfoUser($_SESSION['id']);
   }

   switch ($act) {
       case 'logout':
         session_destroy();
         header('location: index.php?act=index');
           break;
       case 'index':
           $ds = $produc->getAllmaloai();
           require_once '../view/view_index.php';
           break;
       case 'sanpham':
           require_once '../view/view_product.php';
           break;
       case 'chitietsanpham':
          // kiểm tra điều kiện id có tồn tại hay không
          if(isset($_GET['id'])==true){
              $id = $_GET['id'];
            //   $listrelease = $produclistproductrelase()
              $pro_detail = $produc->getProductById($id);
          }
            require_once '../view/view_single.php';
            break;
        case 'sanphambyid':
            // kiểm tra id người lựa chọn
            if(isset($_GET['id'])==true){
                $id = $_GET['id'];
                $ds = $produc->getAllmaloai();
                $listProbyid = $produc->listproductbyid($id);
            }
            require_once '../view/view_productByid.php';
            break;
        case 'login':
            header('location: login.php?act=login');
            break;
        case 'cart':
            if(isset($_GET['id'])==true){
                $id = $_GET['id'];
                $cartlist=$produc->cartPro($id);
                $itemCart = [
                    'id' => $cartlist['idsanpham'],
                    'name' => $cartlist['tensanpham'],
                    'price'=> $cartlist['giasanpham'],
                    'img' =>$cartlist['hinhanh1'],
                    'quantity'=>1
                ];
                if(isset($_SESSION['cart'][$id])){
                    $_SESSION['cart'][$id]['quantity']+=1;
                }
                else{
                    $_SESSION['cart'][$id]= $itemCart;
                }
            }
            require_once '../view/cart/view_cart.php';
            break;
        case 'deleteCart':
            if(isset($_GET['id'])==true){
                $id=$_GET['id'];
                unset($_SESSION['cart'][$id]);
            }
            require_once  '../view/cart/view_cart.php';
            break;
        case 'sanphamAsc':
            $proAsc = $produc->productasc();
            require_once '../view/product_asc.php';
            break;
        case 'sanphamDesc':
            $proDesc = $produc->productDesc();
            require_once '../view/product_desc.php';
            break;
        case 'searchsanpham':
                $key = $_POST['search'];
                $sProduct = $produc->searchPro($key);
                require_once '../view/view_searchProduct.php';
            break;
       default:
           # code...
           break;
   }

?>