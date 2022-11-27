<article>
        <div class="row my-5 g-2 nav p-1 align-items-center text-center title_hb">
                <h1 class="text-danger">CẨM NANG DU LỊCH</h1>

        </div>
        <div class="row">
        <div class="row col-8">
       
        <?php
        $handbook = load_handbook_all();
        foreach ($handbook as $handbooks) {
                extract($handbooks);
                $hinh_handbook = "upload/" . $img;
                echo '
       
                        <div class="col-12 m-5">
                                <img class="rounded  "  src="' . $hinh_handbook . '" width="800" height="400">
                                <p class=" text-danger">Cẩm nang du lịch</p>
                                <h4 class="text-info "><a class="text-decoration-none" href="index.php?act=handbook-detail&id='.$id_handbook.'">' . $title . '</a></h4>
                        </div>
                </div>
          </div>';
        }
?>
        <div class="row">
                <div class="col-8">
                        <div class="col-4 m-5">
                                <img class="rounded " src="upload/khoanh-khac-lu-hanh.png" alt="" width="800" height="400">
                                <p class=" text-danger">Cẩm nang du lịch</p>
                                <h4 class="text-info"><a href="index.php?act=handbook&id=">18 mẹo tiết kiệm tiền đi du lịch dễ dàng hơn lúc nào hết</h4>
                        </div>
                </div>
                <div class="col-4 ">
                        <div class="col-4 m-5">
                                <img class="rounded" src="upload/mien-bac-bg.png" alt="" width="300">
                                <p class=" text-danger">Cẩm nang du lịch</p>
                                <h6 class="text-info">Những lưu ý dành cho khách du lịch Tây Bắc lần đầu</h6>
                        </div>
                        <div class="col-4 m-5">
                                <img class="rounded" src="upload/mien-bac-bg.png" alt="" width="300">
                                <p class=" text-danger">Cẩm nang du lịch</p>
                                <h6 class="text-info">Những lưu ý dành cho khách du lịch Tây Bắc lần đầu</h6>
                        </div>
                        <div class="col-4 m-5">
                                <img class="rounded" src="upload/mien-bac-bg.png" alt="" width="300">
                                <p class=" text-danger">Cẩm nang du lịch</p>
                                <h6 class="text-info">Những lưu ý dành cho khách du lịch Tây Bắc lần đầu</h6>
                        </div>
                </div>
        </div>
        <?php
         $handbook = load_handbook_all2();
         foreach ($handbook as $handbooks) {
                 extract($handbooks);
                 $hinh_handbook = "upload/" . $img;
                 echo'
                 <hr class="text-primary">
                 <div class="row">
                         <div class=" col-4 m-5">
                                 <img class="rounded" src="'.$hinh_handbook.'" alt="" width="500">
                                 <p class=" text-danger">Cẩm nang du lịch</p>
                         </div>
                         <div class="col-5 m-5">
                                 <h4 class="text-info"><a class="text-decoration-none" href="index.php?act=handbook-detail&id='.$id_handbook.'"></a>' . $title .'</h4>
                         </div>
         
                 </div>';
         }
        ?>
        </div>

</article>