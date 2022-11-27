<article>
  <div class="row tourtim m-0 p-0">
    <h1>Danh sách tour phù hợp với yêu cầu của quý khách </h1>
  </div>
  <!-- miền bắc -->
  <div class="mien mien-bac">
    <div class="contentt text-center text-white">

      <h3 class="py-4 m-0 font-thu-phap">Tour Miền Bắc</h3>
    </div>

    <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

      <div class="row m-0 col-8 offset-xl-2 p-xl-0">
        <?php
        foreach ($listft as $tour) {
          extract($tour);
          $hinh_tour = "upload/" . $image_tour;
          if ($category == "Bắc") {
            echo '
    <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
    <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
        <a href="index.php?act=ctt&id=' . $id_tour . '">
            <img
            class="img-fluid w-100 h-100 rounded-top"
            src="' . $hinh_tour . '"
            alt=""
          />
           </a>
        </div>
        <div class="content rounded-bottom bg-light p-3">
          <div class="title-tour text-center">
           <h6><a href="index.php?act=ctt&id=' . $id_tour . '" class="text-black text-decoration-none link-warning">' . $name_tour . '</a></h6>
          </div>
          <div class="add-time justify-content-start">
            <p><i class="far fa-flag"></i>&ensp; ' . $name_place . '</p>
            <p><i class="far fa-clock"></i> &ensp;' . $day_start . ' - ' . $day_end . '</p>
          </div>
          <div class="row m-0 footer-tour">
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . $price . ' đ</p></div>
            <div class="col text-center">
              <button class="btn btn-danger"><a href="index.php?act=ctt&id=' . $id_tour . '" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
            </div>
          </div>
        </div>
  </div>
    
    ';
          }
        }
        ?>
      </div>
    </div>
  </div>

  <!-- miền trung -->
  <div class="mien mien-trung">
    <div class="contentt text-center text-white">

      <h3 class="py-4 m-0 font-thu-phap">Tour Miền Trung</h3>
    </div>

    <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

      <div class="row m-0 col-8 offset-xl-2 p-xl-0">
        <?php
        foreach ($listft as $tour) {
          extract($tour);
          $hinh_tour = "upload/" . $image_tour;
          if ($category == "Trung") {
            echo '
    <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
    <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
        <a href="index.php?act=ctt&id=' . $id_tour . '">
            <img
            class="img-fluid w-100 h-100 rounded-top"
            src="' . $hinh_tour . '"
            alt=""
          />
           </a>
        </div>
        <div class="content rounded-bottom bg-light p-3">
          <div class="title-tour text-center">
           <h6><a href="index.php?act=ctt&id=' . $id_tour . '" class="text-black text-decoration-none link-warning">' . $name_tour . '</a></h6>
          </div>
          <div class="add-time justify-content-start">
            <p><i class="far fa-flag"></i>&ensp; ' . $name_place . '</p>
            <p><i class="far fa-clock"></i> &ensp;' . $day_start . ' - ' . $day_end . '</p>
          </div>
          <div class="row m-0 footer-tour">
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . $price . ' đ</p></div>
            <div class="col text-center">
              <button class="btn btn-danger"><a href="index.php?act=ctt&id=' . $id_tour . '" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
            </div>
          </div>
        </div>
  </div>
    
    ';
          }
        }
        ?>
      </div>
    </div>
  </div>


  <!-- miền nam -->
  <div class="mien mien-nam">
    <div class="contentt text-center text-white">

      <h3 class="py-4 m-0 font-thu-phap">Tour Miền Nam</h3>
    </div>

    <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

      <div class="row m-0 col-8 offset-xl-2 p-xl-0">
        <?php
        foreach ($listft as $tour) {
          extract($tour);
          $hinh_tour = "upload/" . $image_tour;
          if ($category == "Nam") {
            echo '
    <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
    <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
        <a href="index.php?act=ctt&id=' . $id_tour . '">
            <img
            class="img-fluid w-100 h-100 rounded-top"
            src="' . $hinh_tour . '"
            alt=""
          />
           </a>
        </div>
        <div class="content rounded-bottom bg-light p-3">
          <div class="title-tour text-center">
           <h6><a href="index.php?act=ctt&id=' . $id_tour . '" class="text-black text-decoration-none link-warning">' . $name_tour . '</a></h6>
          </div>
          <div class="add-time justify-content-start">
            <p><i class="far fa-flag"></i>&ensp; ' . $name_place . '</p>
            <p><i class="far fa-clock"></i> &ensp;' . $day_start . ' - ' . $day_end . '</p>
          </div>
          <div class="row m-0 footer-tour">
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . $price . ' đ</p></div>
            <div class="col text-center">
              <button class="btn btn-danger"><a href="index.php?act=ctt&id=' . $id_tour . '" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
            </div>
          </div>
        </div>
  </div>
    
    ';
          }
        }
        ?>
      </div>
    </div>
  </div>

</article>