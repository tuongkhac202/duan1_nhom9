<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Công ty Yến Tường</title>
  <link rel="icon" href="upload/logo150.png" sizes="16x16">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- link font thư pháp -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="view/css/footer.css">
  <link rel="stylesheet" href="view/css/style.css" />
</head>

<body>
  <div class="container-fluid p-0 bao">
    <header>
      <div class="row m-0 g-2 nav p-1 d-flex justify-content-center align-items-center">

        <div class="col-xl-1 offset-xl-1 d-none d-xl-block logo">
          <a href="index.php" class="text-decoration-none text-white">
            <img class="img-fluid" src="upload/logo150.png" alt="" /></a>
        </div>
        <?php if (isset($_SESSION['user'])) : ?>
          <div class="col-xl-10 col-12 text-center">
            <div class="row col-xl-11 col-md-12 text-center menu">
              <div class="row menu align-items-center d-flex">
                <div class="col text-center">
                  <a class="text-decoration-none text-white " href="index.php">
                    <h2 class="font-thu-phap m-0">Trang Chủ</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=duLich">
                    <h2 class="font-thu-phap m-0">Du Lịch</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=gioiThieu">
                    <h2 class="font-thu-phap m-0">Giới Thiệu</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=lienHe">
                    <h2 class="font-thu-phap m-0">Liên hệ</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=handbook">
                    <h2 class="font-thu-phap m-0">Cẩm Nang</h2>
                  </a>
                </div>
                <div class="col text-center text-white">
                  <a href="index.php?act=dangNhap" class="text-white"><i class="fas fa-user"></i></a> &nbsp; |&nbsp;
                  <a href="index.php?act=cart" class="text-white"><i class="fas fa-shopping-cart"></i></a>
                  <br>
                </div>

                <div class="col">
                  <div class="text-start text-white">
                    <?php
                    echo 'Xin chào: ' . $_SESSION['user']['name'] . "<br> ";
                    ?>
                    <?php
                    if ($_SESSION['user']['role'] == 1) {
                      echo '<a href="admin/index.php" class="text-white text-decoration-none link-info" >Đăng nhập Admin</a>';
                    }
                    ?>
                    <?php
                    echo '<a href="index.php?act=dangXuat" class="text-white text-decoration-none link-danger">Đăng xuất <i class="fas fa-sign-out-alt"></i></a>';
                    ?>
                  </div>
                </div>

              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="col-xl-10 col-12 text-center">
            <div class="row col-xl-11 col-md-12 text-center menu">
              <div class="row menu align-items-center d-flex">
                <div class="col text-center">
                  <a class="text-decoration-none text-white " href="index.php">
                    <h2 class="font-thu-phap m-0">Trang Chủ</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=duLich">
                    <h2 class="font-thu-phap m-0">Du Lịch</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=gioiThieu">
                    <h2 class="font-thu-phap m-0">Giới Thiệu</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=lienHe">
                    <h2 class="font-thu-phap m-0">Liên hệ</h2>
                  </a>
                </div>
                <div class="col text-center">
                  <a class="text-decoration-none text-white" href="index.php?act=handbook">
                    <h2 class="font-thu-phap m-0">Cẩm Nang</h2>
                  </a>
                </div>

                <div class="col text-center text-white">
                  <a href="index.php?act=dangNhap" class="text-white"><i class="fas fa-user"></i></a> &nbsp; |&nbsp;
                  <a href="index.php?act=cart" class="text-white"><i class="fas fa-shopping-cart"></i></a>
                  <br>
                </div>
              </div>
            </div>
          </div>
        <?php endif ?>
      </div>
    </header>