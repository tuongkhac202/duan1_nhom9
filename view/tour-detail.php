<?php


$tours = load_tour_goiy();

$dsbl = select_all_binh_luan();


foreach ($tthis as $tt) :


?>



    <div class="row m-0 d-flex justify-content-center">
        <div class="row col-10 offset-1  mx-5 px-5 tour-detail">



            <div class="col-12 title-detail text-center">
                <h1 class="color-main font-thu-phap my-3 align-items-center text-">Chi Tiết Tour Du Lịch</h1>
                <center>
                    <hr width="50%" align="center">
                </center>
            </div>

            <div class="row col-12 mx-0 my-5">
                <div class="col-12">
                    <h2 class="font-thu-phap text-danger">Tour Miền <?php echo $tt['category'] ?> - Tour Du Lịch
                        <?php echo $tt['name_place'] ?></h2>

                </div>
                <div class="row m-0 col-7">

                    <div class="col-12">

                        <?php echo  '<img src="upload/' . $tt["image_tour"] . '" alt="" class="img-fluid w-100 h-100">'  ?>

                    </div>
                </div>



                <!-- đặt tour (book) -->
                <div class="row m-0 col-5 form-book">
                    <form action="index.php?act=bo" method="post" class="bg-light border border-2 rounded-2 border-dark p-3">
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-clock"></i></div>
                            <div class="col-11">Thời gian: <?php $first_date = strtotime('' . $tt['day_end'] . '');
                                                            $second_date = strtotime('' . $tt['day_start'] . '');
                                                            $datediff = ($first_date - $second_date);
                                                            echo floor($datediff / (60 * 60 * 24)); ?> ngày</div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-calendar-alt"></i></div>
                            <div class="col-11">Ngày khởi hành: <?php echo $tt['day_start']  ?></div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-car-side"></i></div>
                            <div class="col-11">Phương tiện: xe chuyên dụng</div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-hotel"></i></div>
                            <div class="col-11">Khách sạn: tiêu chuẩn</div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-users"></i></div>
                            <div class="col-11">Số người: <input type="number" name="songuoi" class="form-control w-50 d-inline"></div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="col-11">Điểm đến: <?php echo $tt['name_place']  ?></div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-qrcode"></i></div>
                            <div class="col-11">Mã tour: <?php echo $tt['id_tour'] ?></div>
                            <input type="text" hidden value="<?php echo $tt['id_tour'] ?>" name="matour">
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-1"><i class="fas fa-dollar-sign"></i></div>
                            <div class="col-11 text-danger">Giá tour: <?php echo $tt['price'] ?> VNĐ</div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-12 text-danger">
                                <textarea name="ghichu" id="" cols="30" rows="5" class="w-100 form-control" placeholder="Ghi chú"></textarea>
                            </div>
                        </div>
                        <div class="row mx-0 my-1 col-12">
                            <div class="col-12 text-center my-2">
                                <input type="submit" class="btn btn-danger" name="book" value="ĐẶT TOUR">
                            </div>
                        </div>
                        <?php
                        if (!isset($_SESSION['user'])) {
                            echo ' <div class="col-12 text-center">
                                     Bạn cần đăng nhập để có thể đặt tour !
                                   </div>';
                        }
                        ?>
                    </form>

                </div>


                <div class="col-12 mt-5 mb-2 ">
                    <h2 class="font-thu-phap text-danger  ">Lịch Trình Tour
                        <?php echo $tt['name_place'] ?></h2>
                </div>





                <?php
                $mota = $tt['tour_detail'];
                $mota2 = str_replace('Sáng:', ' Sáng: <br>', $mota);
                $mota3 = str_replace('Chiều:', '<br> Chiều: <br>', $mota2);
                ?>







                <div class="row m-0 col-7 ">


                    <div class="row col-12 py-4 m-0 px-0">

                        <div class="row m-0 col-12 px-0  mota ">
                            <p class="col-12 p-0 " style="text-align: justify;">
                                <?php echo $mota3 ?>
                            </p>
                        </div>
                    </div>








                    <!-- bình luận -->
                    <div class="row col-12 p-0 m-0">
                        <div class="col-12 p-0 text-center text-white bg-danger rounded-top d-flex align-items-center justify-content-center boxtitle ">
                            <h4>BÌNH LUẬN CỦA KHÁCH HÀNG</h4>
                        </div>
                        <div class="row m-0 col-12 p-0 boxcontent2">
                            <table class="table text-center w-100 p-3 bg-light mb-1">
                                <tr>
                                    <th>Mã tour</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Mã khách hàng</th>
                                    <th>Ngày bình luận</th>
                                </tr>
                                <?php

                                foreach ($dsbl as $bl) {
                                    extract($bl);
                                    echo '
                             <tr ">
                            <td>' . $id_tour . '</td>
                             <td style="word-wrap: break-word;">' . $content . '</td>
                            <td>' . $id_customer . '</td>
                             <td>' . $day_comment . '</td>
                             </tr>
                           ';
                                }
                                ?>
                            </table>
                        </div>




                        <div class="boxfooter p-0">
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                <input type="text" hidden name="idtour" value="<?php echo $_GET['id'] ?>">
                                <input type="text" placeholder="Nhập nội dung bình luận" name="ndbl" class="form-control w-100" style="margin-bottom: 5px;">
                                <input type="submit" value="Gửi bình luận" name="bl" class="btn btn-danger w-25">
                            </form>

                        </div>
                        <?php
                        if (isset($_SESSION['user'])) {
                            if (isset($_POST['bl'])) {
                                $makh = $_SESSION['user']['id_customer'];
                                $nd = $_POST['ndbl'];
                                $matour = $_POST['idtour'];
                                $ngay = date('Y/m/d');

                                binh_luan_insert($makh, $matour, $nd, $ngay);
                            }
                        } else {
                            $tb = "Bạn cần đăng nhập để có thể bình luận !";
                        }

                        ?>
                        <div class="div p-0 text-center">
                            <?php
                            if (!isset($_SESSION['user'])) {
                                echo $tb;
                            }
                            ?>
                        </div>

                    </div>

                    <!-- bình luận -->










                </div>















                <div class="row m-0 px-0 col-5 bg-light">
                    <div class="col-12 bg-danger rounded-top text-white d-flex justify-content-center align-items-center">
                        <h5 class="m-0 px-0 py-3">TOUR GỢI Ý</h5>
                    </div>

                    <div class="col-12 m-0 px-3">
                        <?php
                        foreach ($tours as $tour) {
                            extract($tour);
                            echo '  <div class="row col-12 p-0 my-3 tour-suggest align-items-center">
            <div class="col-5 img-suggest"><img src="upload/' . $image_tour . '" alt="" class="img-fluid"></div>
            <div class="col-7 overflow-hidden"><a href="index.php?act=ctt&id=' . $id_tour . '" class="text-decoration-none text-black link-warning text-start">' . $name_tour . '</a></div>
        </div>';
                        }
                        ?>
                    </div>

                </div>






            </div>
        </div>
    </div>











<?php endforeach  ?>