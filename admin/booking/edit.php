<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">CHỈNH SỬA BOOKING</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <?php
                        if (is_array($Booking)) {
                                extract($Booking);
                              }
                    ?>
                    <form action="index.php?act=updateBooking" method="post" class="formcontent mt"
                        enctype="multipart/form-data">
                        <input hidden type="text" name="mabook" value="<?php echo $id_booking ?>">
                        <br />
                        <div class="row mb10">
                            <label for="">Mã khách hàng</label>
                            <br />
                            <input type="text" name="makh" value="<?php echo $id_customer?>" disabled />
                        </div>
                        <br>
                        <div class="row mb10">
                            <label for=""> Mã tour</label>
                            <br />
                            <input type="text" name="matour" value="<?php echo $id_tour ?>" disabled/>
                        </div>
                        <br />
                        <div class="row mb10">
                            <label for="">Ngày booking</label>
                            <br />
                            <input type="text" name="email" value="<?php echo $day_booking ?>" disabled/>
                        </div>
                        <br />
                        <div class="row mb10">
                            <label for=""> Số điện thoại</label>
                            <br />
                            <input type="number" name="sdt" value="<?php echo $number_customers ?>" disabled/>
                        </div>
                        <br />
                        <div class="row mb10">
                                <label for="">Trạng Thái</label>
                                <input type="text"
                                value="<?php echo $status ?>" name="status">
                        </div>
                        <br />
                        <br />
                        <input value="Cập nhật" type="submit" name="capnhatbook" class="btn btn-success"></input>
                        <button type="reset" class="btn btn-warning">Nhập lại</button>
                        <!-- <button class="btn btn-info"><a href="index.php?act=danhSachKhachHang"
                                style="text-decoration: none;">Danh sách khách
                                hàng</a></button> -->
                        <?php
                             if (isset($thongbao) && ($thongbao != "")) {
                                echo "<br>" . $thongbao;
                              }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>