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


<!-- miền bắc -->

<div class="mien mien-bac">
         <div class="contentt text-center text-white">
           <p class="pt-2 mb-1">
             Khám phá lịch sử, văn hóa, con người miền Bắc với
           </p>
           <h3 class="pb-2 m-0 font-thu-phap">Tour Miền Bắc</h3>
         </div>

         <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

         <div class="row m-0 col-8 offset-xl-2 p-xl-0">
         <?php
         $cate ="Bắc";
         $tours = load_tour($cate);
foreach ($tours as $tour) {
    extract($tour);
    $hinh_tour = "upload/".$image_tour;

    echo '
    <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
    <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
        <a href="index.php?act=ctt&id='.$id_tour.'">
            <img
            class="img-fluid w-100 h-100 rounded-top"
            src="'.$hinh_tour.'"
            alt=""
          />
           </a>
        </div>
        <div class="content rounded-bottom bg-light p-3">
          <div class="title-tour text-center">
                        <a href="index.php?act=ctt&id='.$id_tour.'" class="text-black text-decoration-none link-warning"><h6>'.$name_tour.'</h6></a>
          </div>
          <div class="add-time justify-content-start">
            <p><i class="far fa-flag"></i>&ensp; '.$name_place.'</p>
            <p><i class="far fa-clock"></i> &ensp;'.$day_start.' - '.$day_end.'</p>
          </div>
          <div class="row m-0 footer-tour">
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">'.$price.' đ</p></div>
            <div class="col text-center">
              <button class="btn btn-danger"><a href="index.php?act=ctt&id='.$id_tour.'" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
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

<!-- miền trung -->
<div class="mien mien-trung">
         <div class="contentt text-center text-white">
           <p class="pt-2 mb-1">
             Khám phá lịch sử, văn hóa, con người miền Trung với
           </p>
           <h3 class="pb-2 m-0 font-thu-phap">Tour Miền Trung</h3>
         </div>

         <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

         <div class="row m-0 col-8 offset-xl-2 p-xl-0">
         <?php
         $cate ="Trung";
         $tours = load_tour($cate);
foreach ($tours as $tour) {
    extract($tour);
    $hinh_tour = "upload/".$image_tour;

    echo '
    <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
    <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
        <a href="index.php?act=ctt&id='.$id_tour.'">
            <img
            class="img-fluid w-100 h-100 rounded-top"
            src="'.$hinh_tour.'"
            alt=""
          />
           </a>
        </div>
        <div class="content rounded-bottom bg-light p-3">
          <div class="title-tour text-center">
                        <a href="index.php?act=ctt&id='.$id_tour.'" class="text-black text-decoration-none link-warning"><h6>'.$name_tour.'</h6></a>
          </div>
          <div class="add-time justify-content-start">
            <p><i class="far fa-flag"></i>&ensp; '.$name_place.'</p>
            <p><i class="far fa-clock"></i> &ensp;'.$day_start.' - '.$day_end.'</p>
          </div>
          <div class="row m-0 footer-tour">
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">'.$price.' đ</p></div>
            <div class="col text-center">
              <button class="btn btn-danger"><a href="index.php?act=ctt&id='.$id_tour.'" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
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


<!-- miền nam -->
<div class="mien mien-nam">
         <div class="contentt text-center text-white">
           <p class="pt-2 mb-1">
             Khám phá lịch sử, văn hóa, con người miền Nam với
           </p>
           <h3 class="pb-2 m-0 font-thu-phap">Tour Miền Nam</h3>
         </div>

         <div class="row m-0 py-5 px-5 gx-xl-5 tour justify-content-center">

         <div class="row m-0 col-8 offset-xl-2 p-xl-0">
         <?php
         $cate ="Nam";
         $tours = load_tour($cate);
foreach ($tours as $tour) {
    extract($tour);
    $hinh_tour = "upload/".$image_tour;

    echo '
    <div class="row m-0 mb-4 col-12 rounded-top rounded-bottom col-xl-4 tourr">
    <div class="col-12 col-xl-12 rounded-top image-tour px-0 ">
        <a href="index.php?act=ctt&id='.$id_tour.'">
            <img
            class="img-fluid w-100 h-100 rounded-top"
            src="'.$hinh_tour.'"
            alt=""
          />
           </a>
        </div>
        <div class="content rounded-bottom bg-light p-3">
          <div class="title-tour text-center">
                        <a href="index.php?act=ctt&id='.$id_tour.'" class="text-black text-decoration-none link-warning"><h6>'.$name_tour.'</h6></a>
          </div>
          <div class="add-time justify-content-start">
            <p><i class="far fa-flag"></i>&ensp; '.$name_place.'</p>
            <p><i class="far fa-clock"></i> &ensp;'.$day_start.' - '.$day_end.'</p>
          </div>
          <div class="row m-0 footer-tour">
            <div class="col px-0 d-flex justify-content-start align-items-center "><i class="far fa-money-bill-alt"></i>&ensp; <p class="text-danger m-0">'.$price.' đ</p></div>
            <div class="col text-center">
              <button class="btn btn-danger"><a href="index.php?act=ctt&id='.$id_tour.'" class="text-white text-decoration-none">ĐẶT LỊCH</a></button>
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











</article>