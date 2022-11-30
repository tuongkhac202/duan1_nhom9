<div id="layoutSidenav_content">
        <main>
                <div class="container-fluid px-4">
                        <h4 class="mt-4">CHỈNH SỬA KHÁCH HÀNG</h4>
                        <div class="card mb-4">
                                <div class="card-body">

                                        <?php
if (is_array($kh)) {
  extract($kh);
}
?>





                                        <form action="index.php?act=updatekh" method="post" class="formcontent mt"
                                                enctype="multipart/form-data">
                                                <input hidden type="text" name="makh"
                                                        value="<?php echo $id_customer ?>">
                                                <br />
                                                <div class="row mb10">
                                                        <label for="">Mã khách hàng</label>
                                                        <br />
                                                        <input type="text" name="makh" value="<?php echo $id_customer?>"
                                                                disabled />
                                                </div>
                                                <br>
                                                <div class="row mb10">
                                                        <label for=""> Tên khách hàng</label>
                                                        <br />
                                                        <input type="text" name="tenkh" value="<?php echo $name ?>" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        <label for=""> Email</label>
                                                        <br />
                                                        <input type="email" name="email" value="<?php echo $email ?>" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        <label for=""> Số điện thoại</label>
                                                        <br />
                                                        <input type="number" name="sdt"
                                                                value="<?php echo $phone_number ?>" />
                                                </div>
                                                <br />


                                                <div class="row mb10">
                                                        <label for=""> Vai trò</label>
                                                        <br />
                                                        <input type="text" name="vaitro" id=""
                                                                placeholder="Vai trò 0: khách, 1: admin"
                                                                value="<?php echo $role ?>">
                                                </div>
                                                <br />




                                                <br />
                                                <input value="Cập nhật" type="submit" name="capnhatkh"
                                                        class="btn btn-success"></input>
                                                <button type="reset" class="btn btn-warning">Nhập lại</button>
                                                <button class="btn btn-info"><a href="index.php?act=dskh"
                                                                style="text-decoration: none;">Danh sách khách
                                                                hàng</a></button>
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