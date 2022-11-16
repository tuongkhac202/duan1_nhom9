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
            if(isset($_POST['dn'])&&($_POST['dn'])){
                $user = $_POST['name'];
                $pass = $_POST['pass'];
                $checkuser=checkUser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user'] =$checkuser;
                    $thongbao = "Bạn đã đăng nhập thành công!";
                    header('Location:index.php');
                   
                }
                else{
                    $thongbao ="Tài khoản không tồn tại vui lòng kiểm tra hoặc đăng ký !";
                }
            }
            include 'view/login.php';
            break;
        // tin tức
        case 'handbook':
            include 'view/handbook.php';
            break;

         // danh sách du lịch 
         case 'dl':
            $tours=load_tour();
            include 'view/list-tour.php';
            break;

         //giỏ hàng
         case 'cart':
            include 'view/cart.php';
            break;

             // chi tiết tour du lịch
            case 'ctt':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    $tthis = load_tour_one($id);
                    extract($tthis);
                    include 'view/tour-detail.php';
                } else {
                    include "view/home.php";
                }
            break;
                
         //giới thiệu
         case 'gt':
            include 'view/introduce.php';
            break;









            
        default:
        include 'view/home.php';
            break;
    }
}else{
    include 'view/home.php';
}











include 'view/footer.php';
