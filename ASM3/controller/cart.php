<?php
session_start();
 // gọi model login tương tác 
require_once '../model/cart.php';
$cart = new cart();
$act = null;
if(isset($_GET['act'])==true){
    $act = $_GET['act'];
}
// xử lí switch case 
switch ($act) {
    case 'cart':
        require_once '../view/cart/view_cart.php';
        break;
    default:
        # code...
        break;
}
?>