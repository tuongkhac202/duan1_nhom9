<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin - YenTuong company</title>
        <link rel="icon" href="../upload/logo150.png" sizes="16x16">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3 font-thu-phap" href="../index.php"><img src="../upload/logo.png" alt=""
                                height="60"> Yến Tường</a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                                class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
                <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for..."
                                        aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                                                class="fas fa-search"></i></button>
                        </div>
                </form> -->
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto me-0 ms-md-0 w-100 d-flex justify-content-end me-3">
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-user fa-fw"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                                        <li>
                                                <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item" href="index.php?act=logout-admin">Logout</a></li>
                                </ul>
                        </li>
                </ul>
        </nav>
        <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">



                                <div class="sb-sidenav-menu">
                                        <div class="nav">

                                                <a class="nav-link" href="index.php">
                                                        <div class="sb-nav-link-icon"><i
                                                                        class="fas fa-tachometer-alt"></i></div>&nbsp;
                                                        TRANG CHỦ
                                                </a>
                                                <div class="sb-sidenav-menu-heading">Quản trị</div>

                                                <a class="nav-link" href="index.php?act=listDiaDiem">
                                                        <div class="sb-nav-link-icon"><i
                                                                        class="fas fa-location-arrow"></i></div>
                                                        ĐỊA ĐIỂM
                                                </a>
                                                <a class="nav-link" href="index.php?act=listtour">
                                                        <div class="sb-nav-link-icon"><i class="fas fa-plane"></i></div>
                                                        TOUR DU LỊCH
                                                </a>
                                                <a class="nav-link" href="index.php?act=listbook">
                                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                                        BOOKING
                                                </a>

                                                <a class="nav-link" href="index.php?act=danhSachKhachHang">
                                                        <div class="sb-nav-link-icon"><i
                                                                        class="fas fa-address-book"></i></div>
                                                        KHÁCH HÀNG
                                                </a>
                                                <a class="nav-link" href="index.php?act=danhSachBinhLuan">
                                                        <div class="sb-nav-link-icon"><i class="far fa-comment-alt"></i>
                                                        </div>
                                                        BÌNH LUẬN
                                                </a>
                                                <a class="nav-link" href="index.php?act=list-tintuc">
                                                        <div class="sb-nav-link-icon"><i class="far fa-newspaper"></i>
                                                        </div>
                                                        CẨM NANG
                                                </a>
                                                <a class="nav-link" href="index.php?act=thongKe">
                                                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i>
                                                        </div>
                                                        THỐNG KÊ
                                                </a>
                                        </div>
                        </nav>
                </div>