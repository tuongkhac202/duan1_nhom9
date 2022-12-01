<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">DANH SÁCH TOUR</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã tour</th>
                                <th>Tên địa điểm</th>
                                <th>Phân loại tour</th>
                                <th>Tên tour</th>
                                <th>Ảnh</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày kết thúc</th>
                                <th>Giá</th>
                                <th>Giảm giá</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php
        foreach ($listtour as $tour) {
          extract($tour);

          $suatour = "index.php?act=suatour&matour=" . $id_tour ."&tenDiaDiem=".$name_place;
          $xoatour = "index.php?act=xoatour&matour=" . $id_tour;
          $hinhpath = "../upload/" . $image_tour;
          if (is_file($hinhpath)) {
            $image_tour = "<img src='" . $hinhpath . "' height='60' width='100'>";
          } else {
            $image_tour = "ko tìm thấy ảnh";
          }
          echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>' . $id_tour . '</td>
          <td>' . $name_place . '</td>
          <td>' . $category . '</td>
          <td>' . $name_tour . '</td>
          <td>' . $image_tour . '</td>
          <td>' . $day_start . '</td>
          <td>' . $day_end . '</td>
          <td>' . $price . '</td>
          <td>' . $discount . '</td>
          <td>
           <a href="' . $suatour . '"  class="suabtn"><input type="button" value="Sửa" class="btn btn-warning"></a>
           <a href="' . $xoatour . '"   class="xoabtn"><input type="button" value="Xóa" class="btn btn-danger"></a>
          </td>
          </tr>
          ';
        }
        ?>
                    </table>
                </div>
            </div>
            <form action="" class="mtt">
                <input type="button" value="Chọn tất cả  " class="btn btn-success">
                <input type="button" value="Bỏ chọn tất cả " class="btn btn-success">
                <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger">
                <button class="btn btn-warning"><a href="index.php?act=addtour">Nhập thêm</a></button>
            </form>
        </div>
    </main>
</div>