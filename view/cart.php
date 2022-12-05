<article>
    <center>
        <h2 class="text-danger font-thu-phap fw-bold m-3 p-0">Tour Của  Qúy Khách</h2>
    </center>
    <div class="w-75 border border-primaryk m-5 d-block mx-auto">
        <form action="index.php?act=thanhToan" method="post" class="row">
            <div class="col-6">
                <div class="py-2 m-3 bg-light">
                    <h3 class="text-center color-main ">Thông tin người đặt</h3>
                </div>
                <div class="py-2 m-3 bg-light px-4 py-5"> <br><input class="rounded form-control" type="text" name="namee" placeholder="Họ và tên" required>
                    <br>
                    <input class="rounded  form-control" type="phone" placeholder="Số điện thoại" name="phone" required>
                    <br>
                    <input class="rounded  form-control" type="email" placeholder="Email" name="email" required>
                    <br>
                    <input class="rounded  form-control" type="text" placeholder="Địa chỉ" name="address" required>
                    <br>
                    <input class="rounded  form-control" type="text" placeholder="Mã giảm giá" name="maGiamGia">
                    <br>
                    <input class="" type="radio" value="Thanh toán tại văn phòng" name="thanhToann" required> Thanh toán tại văn phòng
                    <br> 
                    <input class="" type="radio" value="Chuyển khoản" name="thanhToann"> Chuyển khoản
                </div>
            </div>

            <div class="col-6">
                <div class="py-2 m-3 bg-light">
                    <h3 class="text-center color-main">Thông tin dịch vụ</h3>
                </div>
                <?php
                                if (isset($_SESSION['user'])) {
                                        $tongtien = 0;
                                        foreach ($loadbooking as $cart) {
                                                extract($cart);
                                                $tongtien += (float)$price;
                                                $hinh_tour = "upload/" . $image_tour;
                                        echo '
                                                <div class="m-3">
                                                <img class="rounded w-100" src="' . $hinh_tour . '" alt="" height="300">
                                                <h6 class="text-danger">' . $name_tour . '</h6>
                                                <b>Ngày khởi hành: ' . $day_start . '</b>
                                                <br>
                                                <b>Số người: </b>
                                                <input readonly class=" w-25 form-control" type="number" value="' . $number_customers . '">
                                                <b>Ghi chú: </b>
                                                <br>
                                                <textarea readonly class="w-100" name="" id="" cols="30" rows="5">
                                                ' . $note . '
                                                </textarea>
                                                <br>
                                                <b >Giá tour:  <b class="text-danger giatien">' . number_format($price, 0, '', '.') . ' VNĐ</b></b>
                                                <br>
                                                <b>Trạng thái: <b class="text-danger">' . $status . '</b></b>
                                                <br>
                                                <br>
                                                <center><a href="index.php?act=xoaBookingCart&idBook=' . $id_booking . '" class="xoabtn btn btn-danger"><i class="fas fa-trash-alt"></i></a></center>
                                                <hr>
                                                </div>
                                        ';
                                        }
                                        echo '
                                        <h4 class="text-danger">Tổng tiền: ' . number_format($tongtien, 0, '', '.') . ' VNĐ</b></h4>
                                       <center>
                                        <button type="submit" class=" btn btn-success m-5">Thanh toán</button>                                      
                                       </center>
                                       ';
                                }
                                ?>
            </div>
        </form>
    </div>
</article>