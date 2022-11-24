<?php
session_start();
include 'dao/pdo.php';
include 'dao/tour.php';
include 'view/header.php';
include 'dao/khach-hang.php';
include 'dao/binh-luan.php';
include 'dao/booking.php';



// code dưới này
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
            // liên hệ
        case 'lh':
            include 'view/contact.php';
            break;
            // đăng ký
        case 'dk':
            if (isset($_POST['dangky'])) {

                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $birth = $_POST['birth'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                insert_customers($name, $pass, $birth, $phone, $email);
                $tb = "Đăng ký thành công";
            }
            include 'view/register.php';
            break;
            //  dăng nhập
        case 'dn':
            if (isset($_POST['dn'])) {
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $check = checkUser($name, $pass);
                if (is_array($check)) {
                    $_SESSION['user'] = $check;

                    header('Location:index.php');
                } else {
                    header('Location:index.php?act=dn');
                }
            }
            include 'view/login.php';
            break;

            // đăng xuất
        case 'dx':
            session_unset();
            include 'view/home.php';
            break;


            // tin tức
        case 'handbook':
            include 'view/handbook.php';
            break;

            // danh sách du lịch 
        case 'dl':
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

            // book tour trong chi tiết tour
        case 'bo':
            $makh = $_SESSION['user']['id_customer'];
            $matour = $_POST['matour'];
            $songuoi = $_POST['songuoi'];
            $ngaybook = date('Y/m/d');
            $ghichu = $_POST['ghichu'];
            insert_booking($makh, $matour, $songuoi, $ngaybook, $ghichu);
            include 'view/cart.php';
            break;


            //lọc tour trang chủ
        case 'filter-tour':
            $loai = $_POST['loai'];
            $diadiem = $_POST['diadiem'];
            $gia = $_POST['gia'];
            $listft = filter_tour($loai, $diadiem, $gia);
            include 'view/list-filter-tour.php';
            break;








        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}











include 'view/footer.php';
