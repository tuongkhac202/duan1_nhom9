<article>

    <?php
    $phuongThucThanhToan = $_POST['thanhToann'];
    $tongtien = 0;
    foreach ($loadbooking as $cart) :
        extract($cart);
        $tongtien += (float)$price;
    ?>
        <div class="w-75 border border-primaryk m-5 d-block mx-auto">
            <form action="index.php?act=confirmPay" method="post" class="row">
                <input type="text" hidden name="maBook" value="<?= $id_booking ?>">
                <center>
                    <h2 class="text-danger font-thu-phap fw-bold my-2">Chi Tiết Thanh Toán</h2>
                </center>
                <div class="col-8 offset-2">
                    <table class="table table-hover table-responsive table-border-1 table-bordered">
                        <thead class="bg-success text-white">
                            <th colspan="2">Thông tin khách hàng</th>
                        </thead>
                        <tbody class="table-light">
                        <tr>
                                <td>Mã khách hàng: </td>
                                <td><?= $_SESSION['user']['id_customer'] ?></td>
                            </tr>
                            <tr>
                                <td>Họ và tên khách hàng: </td>
                                <td><?= $_POST['namee'] ?></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại: </td>
                                <td><?= $_POST['phone'] ?></td>
                            </tr>
                            <tr>
                            <td>Email: </td>
                                <td><?= $_POST['email'] ?></td>
                            </tr>
                            <td>Địa chỉ: </td>
                                <td><?= $_POST['address'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="table table-hover table-responsive table-border-1 table-bordered">
                        <thead class="bg-success text-white">
                            <th colspan="2">Thông tin dịch vụ</th>
                           
                        </thead>
                        <tbody class="table-light">
                        <tr>
                                <td>Mã dịch vụ: </td>
                                <td><?= $id_tour?></td>
                            </tr>
                            <tr>
                                <td><?= $name_tour ?></td>
                                <td><?= number_format($price, 0, '', ',') ?> vnđ</td>
                            </tr>
                            <tr>
                                <td>Giảm giá: </td>
                                <td>0 </td>
                            </tr>
                            <tr>
                                <td>Phương thức thanh toán: </td>
                                <td><?= $phuongThucThanhToan ?></td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Tổng cộng: </td>
                                <td class="text-danger fw-bold"><?= number_format($tongtien, 0, '', ',') ?> VNĐ</td>
                            </tr>
                        </tbody>
                    </table>
                <?php endforeach ?>
                <b>Địa chỉ văn phòng: </b>
                <p>Công ty du lịch Yến Tường, Tòa nhà 91B, Phường An Khánh, Quận Ninh Kiều, TP. Cần Thơ, Việt Nam.</p>
                <b>Thông tin chuyển khoản: </b>
                <br>
                <p>NGÂN HÀNG: TECHCOMBANK <br> SỐ TÀI KHOẢN: 09876543212345678 <br> CHỦ TÀI KHOẢN: YEN TUONG COMPANY </p>
                <b>Xin quý khách vui lòng chuyển khoản theo cú pháp: </b>
                <p>TEN KHACH HANG: ... - MA SO KHACH HANG:... - MA SO DICH VU:...
                <br>
                VÍ DỤ: NGUYỄN VĂN THỦM - MÃ SỐ KHÁCH HÀNG: 001 - MÃ SỐ DỊCH VỤ: 22
                </p>
                <!-- <div class="qrcode">
                    <b>Hoặc quét mã QR bên dưới để thanh toán</b>
                    <br>
                    <br>
                    <center>
                        <img src="upload/qrcode_41113624_a2bae233cab714d88f39994ad3394fbc.png" alt="" width="50%" height="">
                    </center>
                </div> -->
                <center>
                    <a href="index.php?act=cart"><button type="button" class=" btn btn-danger m-5">Quay lại giỏ hàng</button></a>
                    <button type="submit" class=" btn btn-success m-5">Xác nhận đã thanh toán</button>
                </center>
                </div>
            </div>
        </div>
</article>