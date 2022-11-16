<?php
session_start();
include '../dao/pdo.php';
 include "header.php";
include '../dao/dia-diem.php';
include "../dao/khach-hang.php";
include "../dao/binh-luan.php";
include "../dao/thong-ke.php";
include "../dao/tour.php";
include "../dao/booking.php";


// done địa điểm, khách hàng, bình luận, 
// tên địa điểm còn phân ra chưa gộp lại chung vs mã tour
//controller
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
            // địa điểm done
        case 'addloai':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $diachi = $_POST['diachi'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinhhh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_places($tenloai,$diachi,$hinh);
                $thongbao = "thêm thành công";
            }
            include "dia-diem/new.php";
            break;

        case 'listloai':
            $listloai = load_list();
            include "dia-diem/list.php";
            break;

        case 'xoaloai':
            if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                delete_places($_GET['maloai']);
            }
            $listloai = load_list();
            include "dia-diem/list.php";
            break;

        case 'sualoai':
            if (isset($_GET['maloai']) && ($_GET['maloai'] > 0)) {
                $dm = load_one($_GET['maloai']);
            }
            include "dia-diem/edit.php";
            break;


        case 'updateloai':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $maloai = $_POST['maloai'];
                $diachi = $_POST['diachi'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinhhh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_places($maloai, $tenloai,$diachi,$hinh);
            }
            $listloai = load_list();
            include 'dia-diem/list.php';
            break;


            // tour
        case 'addhh':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tentour = $_POST['tentour'];
                $iddd = $_POST['iddd'];
                $loaitour =$_POST['cate'];
                $start =$_POST['start'];
                $end =$_POST['end'];
                $gia = $_POST['gia'];
                $giamgia =$_POST['giamgia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinhhh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhhh"]["name"]);

                if (move_uploaded_file($_FILES["hinhhh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinhhh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }



                insert_tour( $tentour,$iddd, $loaitour, $start, $end, $gia, $giamgia, $mota, $hinh);
                $thongbao = "thêm thành công";
            }
            $listloai = load_list();
            include "tour/new.php";
            break;


        case 'listhh':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kw = $_POST['kw'];
                $maloai = $_POST['maloai'];
            } else {
                $kw = "";
                $maloai = 0;
            }

            $listhh = load_list_tour();
            include "tour/list.php";
            break;

        case 'xoahh':
            if (isset($_GET['mahh']) && ($_GET['mahh'] > 0)) {
                delete_tour($_GET['mahh']);
            }
            $listhh = load_list_tour();
            include "tour/list.php";
            break;

        case 'suahh':
            if (isset($_GET['mahh']) && ($_GET['mahh'] > 0)) {
                $hh = load_onehh($_GET['mahh']);
            }
            $listloai = load_list();
            include "tour/edit.php";
            break;

        case 'updatehh':
            if (isset($_POST['capnhathh']) && ($_POST['capnhathh'])) {
                $matour = $_POST['matour'];
                $tentour = $_POST['tentour'];
                $loaitour =$_POST['cate'];
                $iddd = $_POST['iddd'];
                $start =$_POST['start'];
                $end =$_POST['end'];
                $gia = $_POST['gia'];
                $giamgia =$_POST['giamgia'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinhhh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhhh"]["name"]);

                if (move_uploaded_file($_FILES["hinhhh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["hinhhh"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_tour($matour,$iddd, $tentour, $loaitour, $start, $end, $gia, $giamgia, $mota, $hinh);
            }
            $listhh = load_list_tour();
            include 'tour/list.php';
            break;














            //khách hàng done da1
        case 'dskh':
            $listkh = listkh();
            $_SESSION['kh'] = $listkh;
            include "khach-hang/list.php";
        

            break;

        case 'suakh':
            if (isset($_GET['makh']) && ($_GET['makh'] > 0)) {
                $kh = select_kh($_GET['makh']);
            }
            $listkh = listkh();
            include "khach-hang/edit.php";
            break;


        case 'updatekh':
            if (isset($_POST['capnhatkh']) && ($_POST['capnhatkh'])) {
                $makh = $_POST['makh'];
                $tenkh = $_POST['tenkh'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $vaitro = $_POST['vaitro'];
             
                update_kh_admin($makh,$tenkh,$email,$sdt,$vaitro);
            }
            $listkh = listkh();
            $_SESSION['kh'] = $listkh;
            include 'khach-hang/list.php';
            break;


        case 'xoakh':
            if (isset($_GET['makh']) && ($_GET['makh'] > 0)) {
                delete_customers($_GET['makh']);
            }
            $listkh = listkh();
            $_SESSION['kh'] = $listkh;
            include "khach-hang/list.php";
            break;




            // bình luận done
        case 'dsbl':
            $listbl = select_all_binh_luan();
            include "binh-luan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['mabl']) && ($_GET['mabl'] > 0)) {
                binh_luan_delete($_GET['mabl']);
            }
            $listbl = select_all_binh_luan();
            $_SESSION['bl'] = $listbl;
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





// thống kê
        case 'tk':
            $listtk = thong_ke_tour();
            include "thong-ke/list.php";
            break;
case 'bdtk':
    $listtk = thong_ke_tour();
    include "thong-ke/bieudo.php";
    break;




        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>