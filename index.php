<?php
session_start();
include 'dao/pdo.php';
include 'dao/tour.php';
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
        //  dăng nhập
        case 'dn':
            include 'view/login.php';
            break;
        // tin tức
        case 'news':
            include 'view/news.php';
            break;

         // danh sách du lịch 
         case 'dl':
            $tours=load_tour();
            include 'view/list-tour.php';
            break;










            
        default:
        include 'view/home.php';
            break;
    }
}else{
    include 'view/home.php';
}











include 'view/footer.php';
