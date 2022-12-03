<article>
    <div class="w-75 border border-primaryk m-5 d-block mx-auto">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="py-2 m-3 bg-light">
                    <h3 class="text-center color-main ">Thông tin người đặt</h3>
                </div>
                <div class="py-2 m-3 bg-light px-4 py-5"> <br><input class="rounded form-control" type="text"
                        placeholder="Họ và tên">
                    <br><input class="rounded  form-control" type="phone" placeholder="Số điện thoại">
                    <br><input class="rounded  form-control" type="email" placeholder="Email">
                    <br><input class="rounded  form-control" type="text" placeholder="Mã giảm giá">
                    <br>
                    <input class="" type="radio" value="Thanh toán tại văn phòng" name="thanhToan" > Thanh toán tại văn phòng
                    <!-- mã qr -->
                   
                </div>
            </div>

            <div class="col-6 offset-3">
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
                                                <hr>
                                                </div>
                                        ';
                                        }
                                        echo '
                                        <h4 class="text-danger">Tổng tiền: ' . number_format($tongtien, 0, '', '.') . ' VNĐ</b></h4>
                                        <b>Địa chỉ văn phòng: </b>
                                        <p>Công ty Yến Tường, Tòa nhà 91B, Phường An Khánh, Quận Ninh Kiều, TP. Cần Thơ, Việt Nam.</p>
                                        <b>Thông tin chuyển khoản: </b>
                                        <br>
                                        <p>NGÂN HÀNG: TECHCOMBANK <br> SỐ TÀI KHOẢN: 09876543212345678 <br> CHỦ TÀI KHOẢN: YEN TUONG COMPANY  </p>
                                        <div class="qrcode">
                                        <b>Hoặc quét mã QR bên dưới để thanh toán</b>
                                        <br>
                                        <br>
                                        <center>
                                        <img src="upload/qrcode_41113624_a2bae233cab714d88f39994ad3394fbc.png" alt="" width="50%" height="">
                                        </center>
                                        </div>
                                       <center>
                                       <a href="index.php?act=cart"><button type="button" class=" btn btn-danger m-5">Quay lại giỏ hàng</button></a>                                       
                                        <a href="index.php?act=thanhToan"><button type="button" class=" btn btn-success m-5">Xác nhận đã thanh toán</button></a>                                       
                                       </center>
                                       ';
                                }
                                ?>
            </div>
        </div>
    </div>
</article>