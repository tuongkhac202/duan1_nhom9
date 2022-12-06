<?php
session_start();
include '../dao/pdo.php';
include '../dao/dia-diem.php';
include "../dao/khach-hang.php";
include "../dao/binh-luan.php";
include "../dao/thong-ke.php";
include "../dao/tour.php";
include "../dao/booking.php";
include "../dao/handbook.php";
if (isset($_POST['dn'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $_SESSION['admin'] = checkUser($name, $pass);
}
if (!isset($_SESSION['admin']) || $_SESSION['admin']['role'] != 1) {
    echo '
    <script>
    window.location.href="login-admin.php";
    </script>
    ';
    // header('Location: login-admin.php');
}
include "header.php";

//controller
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        // địa điểm
        case 'addDiaDiem':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendiaDiem = $_POST['tendiaDiem'];
                $diachi = $_POST['diachi'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hintour"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_places($tendiaDiem, $diachi, $hinh);
                $thongbao = "thêm thành công";
            }
            include "dia-diem/new.php";
            break;

        case 'listDiaDiem':
            $listDiaDiem = load_list_diaDiem();
            include "dia-diem/list.php";
            break;

        case 'xoaDiaDiem':
            if (isset($_GET['madiaDiem']) && ($_GET['madiaDiem'] > 0)) {
                delete_places($_GET['madiaDiem']);
            }
            $listDiaDiem = load_list_diaDiem();
            include "dia-diem/list.php";
            break;

        case 'suaDiaDiem':
            if (isset($_GET['madiaDiem']) && ($_GET['madiaDiem'] > 0)) {
                $diaDiem = load_one($_GET['madiaDiem']);
            }
            include "dia-diem/edit.php";
            break;

        case 'updatediaDiem':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendiaDiem = $_POST['tendiaDiem'];
                $madiaDiem = $_POST['madiaDiem'];
                $diachi = $_POST['diachi'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hintour"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_places($madiaDiem, $tendiaDiem, $diachi, $hinh);
            }
            $listDiaDiem = load_list_diaDiem();
            include 'dia-diem/list.php';
            break;

        // tour
        case 'addtour':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tentour = $_POST['tentour'];
                $iddd = $_POST['iddd'];
                $diaDiemtour = $_POST['cate'];
                $start = $_POST['start'];
                $end = $_POST['end'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hintour']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hintour"]["name"]);

                if (move_uploaded_file($_FILES["hintour"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hintour"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_tour($tentour, $iddd, $diaDiemtour, $start, $end, $gia, $giamgia, $mota, $hinh);
                $thongbao = "thêm thành công";
            }
            $listDiaDiem = load_list_diaDiem();
            include "tour/new.php";
            break;

        case 'listtour':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kw = $_POST['kw'];
                $madiaDiem = $_POST['madiaDiem'];
            } else {
                $kw = "";
                $madiaDiem = 0;
            }

            $listtour = load_list_tour();
            include "tour/list.php";
            break;

        case 'xoatour':
            if (isset($_GET['matour']) && ($_GET['matour'] > 0)) {
                delete_tour($_GET['matour']);
            }
            $listtour = load_list_tour();
            include "tour/list.php";
            break;

        case 'suatour':
            if (isset($_GET['matour']) && ($_GET['matour'] > 0)) {
                $tour = load_one_tour($_GET['matour']);
            }
            $listDiaDiem = load_list_diaDiem();
            include "tour/edit.php";
            break;

        case 'updatetour':
            if (isset($_POST['capnhattour']) && ($_POST['capnhattour'])) {
                $matour = $_POST['matour'];
                $tentour = $_POST['tentour'];
                $diaDiemtour = $_POST['cate'];
                $iddd = $_POST['iddd'];
                $start = $_POST['start'];
                $end = $_POST['end'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hintour']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hintour"]["name"]);

                if (move_uploaded_file($_FILES["hintour"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hintour"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_tour($matour, $iddd, $tentour, $diaDiemtour, $start, $end, $gia, $giamgia, $mota, $hinh);
            }
            $listtour = load_list_tour();
            include 'tour/list.php';
            break;

        //khách hàng
        case 'danhSachKhachHang':
            $listKhachHang = listKhachHang();
            $_SESSION['khachHang'] = $listKhachHang;
            include "khach-hang/list.php";
            break;

        case 'suaKhachHang':
            if (isset($_GET['makh']) && ($_GET['makh'] > 0)) {
                $KhachHang = select_khachHang($_GET['makh']);
            }
            $listKhachHang = listKhachHang();
            include "khach-hang/edit.php";
            break;

        case 'updateKhachHang':
            if (isset($_POST['capnhatkh']) && ($_POST['capnhatkh'])) {
                $makh = $_POST['makh'];
                $tenkh = $_POST['tenkh'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $vaitro = $_POST['vaitro'];

                update_khachHang_admin($makh, $tenkh, $email, $sdt, $vaitro);
            }
            $listKhachHang = listKhachHang();
            $_SESSION['khachHang'] = $listKhachHang;
            include 'khach-hang/list.php';
            break;

        case 'xoaKhachHang':
            if (isset($_GET['makh']) && ($_GET['makh'] > 0)) {
                delete_customers($_GET['makh']);
            }
            $listKhachHang = listKhachHang();
            $_SESSION['khachHang'] = $listKhachHang;
            include "khach-hang/list.php";
            break;

        // bình luận
        case 'danhSachBinhLuan':
            $listBinhLuan = select_all_binh_luan();
            include "binh-luan/list.php";
            break;
        case 'xoaBinhLuan':
            if (isset($_GET['mabl']) && ($_GET['mabl'] > 0)) {
                binh_luan_delete($_GET['mabl']);
            }
            $listBinhLuan = select_all_binh_luan();
            $_SESSION['bl'] = $listBinhLuan;
            include "binh-luan/list.php";
            break;

        // booking

        case 'listbook':
            $listbook = select_all_booking();
            include "booking/list.php";
            break;
        case 'xoabook':
            if (isset($_GET['mabook']) && ($_GET['mabook'] > 0)) {
                booking_delete($_GET['mabook']);
            }
            $listbook = select_all_booking();
            $_SESSION['book'] = $listbook;
            include "booking/list.php";
            break;

        case 'suabooking':
            if (isset($_GET['mabook']) && ($_GET['mabook'] > 0)) {
                $Booking = select_booking($_GET['mabook']);
            }
            $listKhachHang = listKhachHang();
            include "booking/edit.php";
            break;
        case 'updateBooking':
            if (isset($_POST['updatebooking']) && ($_POST['updatebooking'])) {
                $status = $_POST['status'];

                update_booking_admin($mabook,$id_customer,$id_tour,$daybooking,$number_customer,$note,$status);
            }
            $listbook = listBooking();
            $_SESSION['Booking'] =$listbook;
            include 'booking/list.php';
            break;

        // Tin tức
        case 'add-tintuc':
            if (isset($_POST['themmoi-tintuc']) && ($_POST['themmoi-tintuc'])) {
                $tieude = $_POST['tieuDe'];
                $noidung = $_POST['noiDung'];
                $hinh = $_FILES['anh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);
                insert_handbook($tieude, $noidung, $hinh);
                $thongbao = "thêm thành công";
            }
            include "tin-tuc/new.php";
            break;

        case 'list-tintuc':
            $list_tintuc = load_handbook_all0();
            include "tin-tuc/list.php";
            break;

        case 'xoa-tintuc':
            if (isset($_GET['matt']) && ($_GET['matt'] > 0)) {
                delete_handbook($_GET['matt']);
            }
            $list_tintuc = load_handbook_all0();
            include "tin-tuc/list.php";
            break;

        case 'sua-tintuc':
            if (isset($_GET['matt'])) {
                $tt = load_handbook_one($_GET['matt']);
            }
            include "tin-tuc/edit.php";
            break;

        case 'update_tintuc':
            if (isset($_POST['capnhattt']) && ($_POST['capnhattt'])) {
                $matintuc = $_POST['matt'];
                $tieude = $_POST['tieude'];
                $noidung = $_POST['noidung'];
                $hinh = $_FILES['anh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);

                update_handbook($matintuc, $tieude, $noidung, $hinh);
            }
            $list_tintuc = load_handbook_all0();
            include 'tin-tuc/list.php';
            break;

        // thống kê
        case 'thongKe':
            $listtk = thong_ke_tour();
            include "thong-ke/list.php";
            break;
        case 'bieuDoThongKe':
            $listtk = thong_ke_tour();
            include "thong-ke/bieudo.php";
            break;
        // logout admin
        case 'logout-admin':
            session_destroy();
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
