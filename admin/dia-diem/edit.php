<?php
     if(is_array($dm)){
        extract($dm);
    }
    $hinhpath = "../upload/" . $image_place;
    if (is_file($hinhpath)) {
      $image_place = "<img src='" . $hinhpath . "' height='60'>";
    } else {
      $image_place = "ko tìm thấy ảnh";
    }
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">CHỈNH SỬA ĐỊA ĐIỂM </h4>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="index.php?act=updatediaDiem" method="post" class="formcontent mt"
                        enctype="multipart/form-data">
                        <input hidden type="text" name="madiaDiem" value="<?php echo $id_place ?>">
                        <div class=" mb10">
                            Mã địa điểm
                            <br />
                            <input type="text" value="<?php echo $id_place ?>" disabled />
                        </div>
                        <br />
                        <div class=" mb10">
                            Tên địa điểm
                            <br />
                            <input type="text" name="tendiaDiem" value="<?php echo $name_place  ?>" />
                        </div>
                        <br />
                        <div class=" mb10">
                            Địa chỉ
                            <br />
                            <input type="text" name="diachi" value="<?php echo $address_place ?>" />
                        </div>
                        <br />
                        <div class=" mb10">
                            Hình ảnh
                            <br />
                            <input type="file" name="hinh" value="" />
                            <?php echo $image_place ?>
                        </div>
                        <br />
                        <br />
                        <input value="Cập nhật" type="submit" name="capnhat" class="btn btn-success"></input>
                        <button type="reset" class="btn btn-warning">Nhập lại</button>
                        <button class="btn btn-info">
                        <a href="index.php?act=listDiaDiem"
                        style="text-decoration: none;">Danh sách địa điểm
                        </a>
                        </button>
                        <?php
                             if(isset($thongbao)&&($thongbao!="")){
                                echo "<br>". $thongbao;
                               }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>