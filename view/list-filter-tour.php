<article>

        <div class="row tourtim m-0 p-0">
                <center>
                        <h1 class="font-thu-phap text-danger m-0 py-3">Danh sách tour phù hợp với yêu cầu của quý khách
                        </h1>
                </center>
        </div>
        <!-- lọc tour -->
        <div class="row d-none d-xl-block p-3 filter">
                <div class="row col-xl-8 offset-xl-2 text-center filter-chirld">
                        <form action="index.php?act=filter-tour" method="post" class="row form-filter">
                                <div class="col text-center">
                                        <select name="loai" id="loaitour" class="form-select w-100">
                                                <option value="">Loại tour</option>
                                                <option value="Bắc">Bắc</option>
                                                <option value="Trung">Trung</option>
                                                <option value="Nam">Nam</option>
                                                <option value="all">Tất cả</option>
                                        </select>
                                </div>

                                <div class="col text-center">
                                        <input type="text" placeholder="Địa điểm" class="form-control w-100"
                                                name="diadiem" />
                                </div>
                                <div class="col text-center">
                                        <input type="text" placeholder="Giá" class="form-control w-100" name="gia" />
                                </div>
                                <div class="col text-center">
                                        <input type="submit" class="btn btn-danger w-100" value="Tìm kiếm" />
                                </div>
                        </form>
                </div>
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
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . number_format($price, 0, ',', '.') . ' đ</p></div>
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
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . number_format($price, 0, ',', '.') . ' đ</p></div>
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
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . number_format($price, 0, ',', '.') . ' đ</p></div>
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