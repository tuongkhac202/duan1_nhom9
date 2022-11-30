<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
include 'dao/pdo.php';
include 'dao/tour.php';
include 'view/header.php';
include 'dao/khach-hang.php';
include 'dao/binh-luan.php';
include 'dao/booking.php';
include 'dao/handbook.php';
include 'dao/forgotpassword.php';

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

            // cẩm nang
        case 'handbook':
            include 'view/handbook.php';
            break;
            //chi tiết cẩm nang
        case 'handbook-detail':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $handbook_this = load_handbook_one($id);
                extract($handbook_this);
                include 'view/handbook-detail.php';
            } else {
                include "view/home.php";
            }
            break;

            // danh sách du lịch
        case 'dl':
            include 'view/list-tour.php';
            break;

            //giỏ hàng
        case 'cart':
            $loadbooking = booking_cart($_SESSION['user']['id_customer']);
            include 'view/cart.php';
            break;
            // xóa tour cho khách hàng
            case 'xoaBookingCart':
                $idBook = $_GET['idBook'];
                booking_delete_cart($_SESSION['user']['id_customer'],$idBook);
                $loadbooking = booking_cart($_SESSION['user']['id_customer']);
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

            // bình luận tour
        case 'binh-luan-tour':
            $id = $_GET['id'];
            $tthis = load_tour_one($id);
            if (isset($_SESSION['user'])) {
                if (isset($_POST['bl'])) {
                    $makh = $_SESSION['user']['id_customer'];
                    $nd = $_POST['ndbl'];
                    $matour = $_POST['idtour'];
                    $ngay = date('Y/m/d');
                    binh_luan_insert($makh, $matour, $nd, $ngay);
                }
            }
            include 'view/tour-detail.php';
            break;

            //giới thiệu
        case 'gt':
            include 'view/introduce.php';
            break;

            // book tour trong chi tiết tour
        case 'bo':
            if (isset($_SESSION['user'])) {
                $makh = $_SESSION['user']['id_customer'];
                $matour = $_POST['matour'];
                $songuoi = $_POST['songuoi'];
                $ngaybook = date('Y/m/d');
                $ghichu = $_POST['ghichu'];
                insert_booking($makh, $matour, $songuoi, $ngaybook, $ghichu);
                include 'view/cart.php';
            } else {
                $id = $_POST['matour'];
                $tthis = load_tour_one($id);
                include 'view/tour-detail.php';
            }
            break;


            //lọc tour 
            case 'filter-tour':
            $loai = $_POST['loai'];
            $diadiem = $_POST['diadiem'];
            $gia = $_POST['gia'];
            $listft = filter_tour($loai, $diadiem, $gia);
            include 'view/list-filter-tour.php';
            break;

            //quên mật khẩu
        case 'forgot_password':
            if (isset($_POST['send_code']) && ($_POST['send_code'])) {
                $email = $_POST['email'];
                var_dump($email);

                $check_email = check_email($email);
                var_dump($check_email);
                $user_id = $check_email['id_customer'];
                $user_name = $check_email['name'];
                $code = random_int(100000, 999999);
                $ex_code = date("Y-m-d H:i:s", strtotime("+10 minutes"));
                $date = date("Y-m-d H:i:s");
                $sql = "insert into get_code(id_customer,expiry,date,code) values(?,?,?,?)";
                pdo_execute($sql, $user_id, $ex_code, $date, $code);
                send_email($email, $code, $user_name);
                echo "<script>
                alert('Gửi mail thành công');
                window.location.href='index.php?act=update_password';
                </script>";
            }

            include 'view/forgot_pass.php';
            break;


        case 'update_password':
            if (isset($_POST['update_pass']) && ($_POST['update_pass'])) {
                $code = $_POST['code'];
                $check_code = get_code($code);
                $get_code_id = $check_code['get_code_id'];
                $user_id = $check_code['id_customer'];
                $newpass = $_POST['new_password'];
                $renewpass = $_POST['renew_password'];
                $date = date("Y-m-d H:i:s");
                $ex_code = $check_code['expiry'];
                $status = $check_code['status'];
                if ($date > $ex_code) {
                    echo "<script>
                alert('Mã code đã hết hạn');
                window.location.href='index.php?act=update_password';
                </script>";
                } else if ($status == 1) {
                    echo "<script>
                alert('Mã đã được sử dụng');
                window.location.href='index.php?act=update_password';
                </script>";
                } else if ($newpass != $renewpass) {
                    echo "<script>
                alert('Mật khẩu không khớp');
                window.location.href='index.php?act=update_password';
                </script>";
                }

                if (is_array($check_code)) {
                    update_status($get_code_id);
                    update_password($newpass, $user_id);
                    echo "<script>
                            alert('Cập nhật thành công');
                            window.location.href='index.php?act=dn';
                            </script>";
                }
            }
            include 'view/update_password.php';

            break;

        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';
