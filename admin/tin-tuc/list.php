
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h4 class="mt-4">DANH SÁCH TIN TỨC</h4>
      <div class="card mb-4">
        <div class="card-body">

      <table class="table table-bordered table-striped table-hover">
  <thead>
  <tr>
          <th></th>
          <th>Mã tin</th>
          <th>Tiêu đề </th>
          <th>Nội dung</th>
          <th>Ảnh</th>
          <th>Action</th>
       
        </tr>
  </thead>

        <?php
        foreach ($list_tintuc as $tt) {
          extract($tt);

          $suatt = "index.php?act=suatt&matt=" . $id_handbook;
          $xoatt = "index.php?act=xoatt&matt=" . $id_handbook;
          $hinhpath = "../upload/" . $img;
          if (is_file($hinhpath)) {
            $img = "<img src='" . $hinhpath . "' height='60' width='100'>";
          } else {
            $img = "ko tìm thấy ảnh";
          }

          echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>' . $id_handbook . '</td>
          <td>' . $title . '</td>
          <td>' . $content . '</td>
          <td>' . $img . '</td>


          <td>
           <a href="' . $suatt . '"  class="suabtn"><input type="button" value="Sửa" class="btn btn-warning"></a>
           <a href="' . $xoatt . '"   class="xoabtn"><input type="button" value="Xóa" class="btn btn-danger"></a>
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
        <button class="btn btn-warning"><a href="index.php?act=add-tintuc">Nhập thêm</a></button>
      </form>



      </div>
  </main>
</div>