<?php foreach ($tthis as $tt):  ?>

<div class="row m-0 tour-detail">



    <div class="col-12 title-detail text-center">
        <h1 class="color-main font-thu-phap my-3 align-items-center text-">Chi Tiết Tour Du Lịch</h1>
        <center><hr width="50%" align="center"></center>
    </div>
    <div class="row col-12 mx-0 my-5">




        <div class="row m-0 col-7">
            <div class="col-12">
                <h2 class="font-thu-phap text-danger">Tour Miền <?php echo $tt['category'] ?> - Tour Du Lịch
                    <?php echo $tt['name_place'] ?></h2>
                   
            </div>
            <div class="col-12">

                <?php echo  '<img src="upload/'.$tt["image_tour"].'" alt="" class="img-fluid w-100">'  ?>

            </div>
        </div>

        <div class="row m-0 col-5 form-book">
            <form action="" class="bg-light p-3">
                <div class="row mx-0 my-1 col-12">
                    <div class="col-1"><i class="fas fa-clock"></i></div>
                    <div class="col-11">Thời gian: </div>
                </div>
                <div class="row mx-0 my-1 col-12">
                    <div class="col-1"><i class="fas fa-calendar-alt"></i></div>
                    <div class="col-11">Ngày khởi hành: </div>
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
                    <div class="col-11">Số người: <input type="number " class="form-control w-50 d-inline"></div>
                </div>
                <div class="row mx-0 my-1 col-12">
                    <div class="col-1"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="col-11">Điểm đến: </div>
                </div>
                <div class="row mx-0 my-1 col-12">
                    <div class="col-1"><i class="fas fa-qrcode"></i></div>
                    <div class="col-11">Mã tour: <?php echo $tt['id_tour'] ?></div>
                </div>
                <div class="row mx-0 my-1 col-12">
                    <div class="col-1"><i class="fas fa-dollar-sign"></i></div>
                    <div class="col-11 text-danger">Giá tour: <?php echo $tt['price'] ?>đ</div>
                </div>
                <div class="row mx-0 my-1 col-12">
                   
                    <div class="col-12 text-danger">
                        <textarea name="" id="" cols="30" rows="10" class="w-100 form-control" placeholder="Ghi chú"></textarea>
                    </div>
                </div>
                <div class="row mx-0 my-1 col-12">
                   <div class="col-12 text-center my-2">
                    <input type="submit" class="btn btn-danger" value="ĐẶT TOUR">
                   </div>
                </div>
            </form>

        </div>




    </div>




</div>
<?php endforeach  ?>