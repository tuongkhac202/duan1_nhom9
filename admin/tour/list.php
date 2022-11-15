
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h4 class="mt-4">DANH SÁCH TOUR</h4>
      <div class="card mb-4">
        <div class="card-body">





 
    <!-- <form action="index.php?act=listhh" method="post" class="mt" style="margin-bottom: 10px;">

      <input type="text" name="kw">
      <select name="maloai" id="">
        <option value="0" selected>Tất cả</option>
        < ? php
        foreach ($listloai as $loai) {
          extract($loai);
          echo '<option value="' . $category . '">' . $category . '</option>';
        }
        ?>
        
      </select>
      <input type="submit" name="listok" value="Tìm kiếm">

    </form> -->
   
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
        foreach ($listhh as $hh) {
          extract($hh);

          $suahh = "index.php?act=suahh&mahh=" . $id_tour;
          $xoahh = "index.php?act=xoahh&mahh=" . $id_tour;
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
           <a href="' . $suahh . '"  class="suabtn"><input type="button" value="Sửa" class="btn btn-warning"></a>
           <a href="' . $xoahh . '"   class="xoabtn"><input type="button" value="Xóa" class="btn btn-danger"></a>
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
        <button class="btn btn-warning"><a href="index.php?act=addhh">Nhập thêm</a></button>
      </form>



      </div>
  </main>
</div>