<?php
session_start();
include 'dao/pdo.php';
include 'view/header.php';


// code dưới này
if(isset($_GET['act']) && $_GET['act'] !=""){
    $act = $_GET['act'];
    switch ($act) {
        // liên hệ
        case 'lh':
            include 'view/contact.php';
            break;
        // đăng ký
        case 'dk':
            include 'view/register.php';
            break;












            
        default:
        include 'view/home.php';
            break;
    }
}else{
    include 'view/home.php';
}











include 'view/footer.php';
?>