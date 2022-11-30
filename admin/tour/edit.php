<?php
if (is_array($hh)) {
  extract($hh);
}
$hinhpath = "../upload/" . $image_tour;
if (is_file($hinhpath)) {
  $image_tour = "<img src='" . $hinhpath . "' height='60'>";
} else {
  $image_tour = "ko tìm thấy ảnh";
}

?>




<div id="layoutSidenav_content">
        <main>
                <div class="container-fluid px-4">
                        <h4 class="mt-4">CHỈNH SỬA TOUR</h4>
                        <div class="card mb-4">
                                <div class="card-body">






                                        <form action="index.php?act=updatehh" method="post" class="formcontent mt"
                                                enctype="multipart/form-data">
                                                <input hidden type="text" name="matour" value="<?php echo $id_tour ?>">


                                                <!-- <br>
      <div class="row mb10">
        <select name="maloai" id="">
          <option value="0" selected>Tất cả</option>
          < ?php
          foreach ($listloai as $loai) {
            extract($loai);
            if ($ma_loai == $ma_Loai) {
              $s = "selected";
            } else {
              $s = "";
            }
            echo '<option value="' . $ma_loai . '"'.$s.'>' . $ten_loai . '</option>';
          }
          ?>

        </select>

      </div> -->


                                                <br />

                                                <div class="row mb10">
                                                        Tên tour
                                                        <br />
                                                        <input type="text" name="tentour"
                                                                value="<?php echo $name_tour ?>" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Loại tour
                                                        <br />
                                                        <input type="text" name="cate"
                                                                value="<?php echo $category ?>" />
                                                </div>
                                                <br />
                                                <div class="row mb10">
                                                        Tên địa điểm
                                                        <br />
                                                        <select name="iddd">
                                                                <!-- <option value="<?php echo $_GET['tendd']  ?>"><?php echo $_GET['tendd'] ?></option> -->
                                                                <?php
                  foreach ($listloai as $loai) {
                    extract($loai);
                    echo '<option ';  
                    echo $loai['id_place']==$hh['id_place']?'selected':''; 
                    echo ' value="'.$id_place.'">'.$name_place.'</option>';
                  }
                ?>
                                                        </select>
                                                </div>
                                                <br />
                                                <div class="row mb10">
                                                        Ngày bắt đầu
                                                        <br />
                                                        <input type="date" name="start"
                                                                value="<?php echo $day_start ?>" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Ngày kết thúc
                                                        <br />
                                                        <input type="date" name="end" value="<?php echo $day_end ?>" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Giá
                                                        <br />
                                                        <input type="text" name="gia" value="<?php echo $price ?>" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Giảm giá
                                                        <br />
                                                        <input type="text" name="giamgia"
                                                                value="<?php echo $discount ?>" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Ảnh
                                                        <br />
                                                        <input type="file" name="hinhhh" value="" />
                                                        <?php echo $image_tour ?>
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Mô tả tour
                                                        <br />
                                                        <textarea name="mota" id="editor" cols="30" rows="10">
              <?php echo $tour_detail ?>
              </textarea>
                                                </div>
                                                <br />




                                                <br />
                                                <input class="btn btn-success" value="Cập nhật" type="submit"
                                                        name="capnhathh"></input>
                                                <button class="btn btn-warning" type="reset">Nhập lại</button>
                                                <button class="btn btn-info"><a href="index.php?act=listhh"
                                                                style="text-decoration: none;">Danh sách
                                                                tour</a></button>
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