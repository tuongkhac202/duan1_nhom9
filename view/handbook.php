<article>
        <div class="row my-5 g-2 nav p-1 align-items-center text-center title_hb">
                <h1 class="text-danger">CẨM NANG DU LỊCH</h1>

        </div>
        <div class="row px-5 gx-5">
                <div class="row col-8 ">
                        <?php
                        $handbook = load_handbook_all();
                        foreach ($handbook as $handbooks) {
                                extract($handbooks);
                                $hinh_handbook = "upload/" . $img;
                                echo '
       
                        <div class="col-12">
                                <img class="rounded  "  src="' . $hinh_handbook . '" width="100%" height="400">
                                <p class=" text-danger">Cẩm nang du lịch</p>
                                <h4 class="text-info "><a class="text-decoration-none" href="index.php?act=handbook-detail&id=' . $id_handbook . '">' . $title . '</a></h4>
                        </div>
                ';
                        }
                        ?>

                </div>   
                <div class="row col-4 ">
                        <?php
                        $handbook = load_handbook_all1();
                        foreach ($handbook as $handbooks) {
                                extract($handbooks);
                                $hinh_handbook = "upload/" . $img;
                                echo '
       
                        <div class="col-12">
                                <img class="rounded  "  src="' . $hinh_handbook . '" width="100%" height="200">
                                <p class=" text-danger">Cẩm nang du lịch</p>
                                <h4 class="text-info "><a class="text-decoration-none" href="index.php?act=handbook-detail&id=' . $id_handbook . '">' . $title . '</a></h4>
                        </div>
                ';
                        }
                        ?>

                </div>   
        <?php
         $handbook = load_handbook_all2();
         foreach ($handbook as $handbooks) {
                 extract($handbooks);
                 $hinh_handbook = "upload/" . $img;
                 echo'
                 <hr class="text-primary">
                 <div class="row col-12">
                         <div class=" col-4 m-5">
                                 <img class="rounded" src="' . $hinh_handbook . '" alt="" width="500">
                                 <p class=" text-danger">Cẩm nang du lịch</p>
                         </div>
                         <div class="col-5 m-5">
                                 <h4 class="text-info"><a class="text-decoration-none" href="index.php?act=handbook-detail&id=' . $id_handbook . '"></a>' . $title . '</h4>
                         </div>
                 </div>';
                }
                ?>
        </div>

</article>