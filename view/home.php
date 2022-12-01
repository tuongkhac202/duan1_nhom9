<article>
        <!-- ảnh banner -->
        <div class="row m-0 banner">
                <div class="col-12 p-0">
                        <!-- Slideshow container -->
                        <div class="slideshow-container m-0">

                                <!-- Full-width images with number and caption text -->
                                <div class="mySlides fade">
                                        <img src="upload/BANNER1.jpg" style="width:100%">
                                </div>

                                <div class="mySlides fade">
                                        <img src="upload/BANNER2.jpg" style="width:100%">
                                </div>

                                <div class="mySlides fade">
                                        <img src="upload/BANNER3.jpg" style="width:100%">
                                </div>

                                <div class="mySlides fade">
                                        <img src="upload/BANNER4.jpg" style="width:100%">
                                </div>

                        </div>

                </div>
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
                                        <input type="text" placeholder="Địa điểm" class="form-control w-100" name="diadiem" />
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

        <!-- chọn loại tour -->
        <div class="row d-xl-block d-none p-2 chon-tour">
                <div class="row col-6 offset-3 gy-1 chon2">
                        <div class="col text-center justify-content-center">
                                <a href="" class="text-white link-primary text-decoration-none">
                                        <img src="upload/tour-mua-thu.png" alt="" />
                                        <h6 class="mt-1">TOUR MÙA THU</h6>
                                </a>
                        </div>
                        <div class="col text-center justify-content-center">
                                <a href="" class="text-white link-primary text-decoration-none">
                                        <img src="upload/tour-tet.png" alt="" />
                                        <h6 class="mt-1">TOUR TẾT</h6>
                                </a>
                        </div>
                        <div class="col text-center justify-content-center">
                                <a href="" class="text-white link-primary text-decoration-none">
                                        <img src="upload/tour-hh.png" alt="" />
                                        <h6 class="mt-1">TOUR HÀNH HƯƠNG</h6>
                                </a>
                        </div>
                        <div class="col text-center justify-content-center">
                                <a href="" class="text-white link-primary text-decoration-none">
                                        <img src="upload/tour-world.png" alt="" />
                                        <h6 class="mt-1">WORLD</h6>
                                </a>
                        </div>
                </div>
        </div>

        <!-- tour bắc -->
        <div class="mien mien-bac">
                <div class="contentt text-center text-white py-4">
                        <p class="pt-2 mb-1">
                        <h5> <i> Khám phá lịch sử, văn hóa, con người miền Bắc với</i></h5>
                        </p>
                        <h1 class="pb-2 m-0 font-thu-phap">Tour Miền Bắc</h1>
                </div>

                <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

                        <div class="row m-0 col-8 offset-xl-2 p-xl-0">
                                <?php
                                $cate = "Bắc";
                                $tours = load_tour_3($cate);
                                foreach ($tours as $tour) {
                                        extract($tour);
                                        $hinh_tour = "upload/" . $image_tour;

                                echo '
                                        <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
                                        <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
                                            <a href="index.php?act=chiTietTour&id=' . $id_tour . '">
                                                <img
                                                class="img-fluid w-100 h-100 rounded-top"
                                                src="' . $hinh_tour . '"
                                                alt=""
                                              />
                                               </a>
                                            </div>
                                            <div class="content rounded-bottom bg-light p-3">
                                              <div class="title-tour text-center">
                                                <h6> <a href="index.php?act=chiTietTour&id=' . $id_tour . '" class="text-black text-decoration-none link-warning">' . $name_tour . '</a></h6>
                                              </div>
                                              <div class="add-time justify-content-start">
                                                <p><i class="far fa-flag"></i>&ensp; ' . $name_place . '</p>
                                                <p><i class="far fa-clock"></i> &ensp;' . $day_start . ' - ' . $day_end . '</p>
                                              </div>
                                              <div class="row m-0 footer-tour">
                                                <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . number_format($price, 0, ',', '.') . ' đ</p></div>
                                                <div class="col text-center">
                                                  <button class="btn btn-danger"><a href="index.php?act=chiTietTour&id=' . $id_tour . '" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
    
                                ';
                                }
                                ?>
                        </div>
                </div>
        </div>



        <!-- tour trung -->
        <div class="mien mien-trung">
                <div class="contentt text-center text-white py-4">
                        <p class="pt-2 mb-1">
                        <h5> <i> Khám phá lịch sử, văn hóa, con người miền Trung với</i></h5>
                        </p>
                        <h1 class="pb-2 m-0 font-thu-phap">Tour Miền Trung</h1>
                </div>

                <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

                        <div class="row m-0 col-8 offset-xl-2 p-xl-0">
                                <?php
                                $cate = "Trung";
                                $tours = load_tour_3($cate);
                                foreach ($tours as $tour) {
                                        extract($tour);
                                        $hinh_tour = "upload/" . $image_tour;

                                echo '
                                        <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
                                        <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
                                            <a href="index.php?act=chiTietTour&id=' . $id_tour . '">
                                                <img
                                                class="img-fluid w-100 h-100 rounded-top"
                                                src="' . $hinh_tour . '"
                                                alt=""
                                              />
                                               </a>
                                            </div>
                                            <div class="content rounded-bottom bg-light p-3">
                                              <div class="title-tour text-center">
                                                  <h6><a href="index.php?act=chiTietTour&id=' . $id_tour . '" class="text-black text-decoration-none link-warning">' . $name_tour . '</a></h6>
                                              </div>
                                              <div class="add-time justify-content-start">
                                                <p><i class="far fa-flag"></i>&ensp; ' . $name_place . '</p>
                                                <p><i class="far fa-clock"></i> &ensp;' . $day_start . ' - ' . $day_end . '</p>
                                              </div>
                                              <div class="row m-0 footer-tour">
                                                <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . number_format($price, 0, ',', '.') . ' đ</p></div>
                                                <div class="col text-center">
                                                  <button class="btn btn-danger"><a href="index.php?act=chiTietTour&id=' . $id_tour . '" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                        
                                ';
                                }
                                ?>
                        </div>
                </div>
        </div>




        <!-- tour nam-->
        <div class="mien mien-nam">
                <div class="contentt text-center text-white py-4">
                        <p class="pt-2 mb-1">
                        <h5> <i> Khám phá lịch sử, văn hóa, con người miền Nam với</i></h5>
                        </p>
                        <h1 class="pb-2 m-0 font-thu-phap">Tour Miền Nam</h1>
                </div>

                <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

                        <div class="row m-0 col-8 offset-xl-2 p-xl-0">
                                <?php
                                $cate = "Nam";
                                $tours = load_tour_3($cate);
                                foreach ($tours as $tour) {
                                        extract($tour);
                                        $hinh_tour = "upload/" . $image_tour;

                                echo '
                                        <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
                                        <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
                                            <a href="index.php?act=chiTietTour&id=' . $id_tour . '">
                                                <img
                                                class="img-fluid w-100 h-100 rounded-top"
                                                src="' . $hinh_tour . '"
                                                alt=""
                                              />
                                               </a>
                                            </div>
                                            <div class="content rounded-bottom bg-light p-3">
                                              <div class="title-tour text-center">
                                                  <h6><a href="index.php?act=chiTietTour&id=' . $id_tour . '" class="text-black text-decoration-none link-warning">' . $name_tour . '</a></h6>
                                              </div>
                                              <div class="add-time justify-content-start">
                                                <p><i class="far fa-flag"></i>&ensp; ' . $name_place . '</p>
                                                <p><i class="far fa-clock"></i> &ensp;' . $day_start . ' - ' . $day_end . '</p>
                                              </div>
                                              <div class="row m-0 footer-tour">
                                                <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">' . number_format($price, 0, ',', '.') . ' đ</p></div>
                                                <div class="col text-center">
                                                  <button class="btn btn-danger"><a href="index.php?act=chiTietTour&id=' . $id_tour . '" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                        
                                ';
                                }
                                ?>
                        </div>
                </div>
        </div>

        <div class="row m-0 py-5  khoanh-khac-lu-hanh justify-content-center">
                <div class="col-12 col-xl-12 p-2 text-center lu-hanh-title">
                        <h1><i class="text-white font-thu-phap mb-0">Khoảnh Khắc Lữ Hành</i></h1>
                </div>
                <div class="row col-12 col-xl-10 g-4  m-0 anh-lu-hanh">
                        <div class="col-6 col-xl-4"><img class="img-fluid" src="upload/lu-hanh-1.png" alt=""></div>
                        <div class="col-6 col-xl-4"><img class="img-fluid" src="upload/lu-hanh-2.png" alt=""></div>
                        <div class="col-6 col-xl-4"><img class="img-fluid" src="upload/lu-hanh-3.png" alt=""></div>
                        <div class="col-6 col-xl-4"><img class="img-fluid" src="upload/lu-hanh-4.png" alt=""></div>
                        <div class="col-6 col-xl-4"><img class="img-fluid" src="upload/lu-hanh-5.png" alt=""></div>
                        <div class="col-6 col-xl-4"><img class="img-fluid" src="upload/lu-hanh-6.png" alt=""></div>
                </div>
        </div>
</article>