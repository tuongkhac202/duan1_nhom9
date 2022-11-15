
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h4 class="mt-4">DANH SÁCH ĐỊA ĐIỂM DU LỊCH</h4>
      <div class="card mb-4">
        <div class="card-body">



          <table id="datatablesSimple"  class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th></th>
                <th>Mã địa điểm</th>
                <th>Tên địa điểm</th>
                <th>Địa chỉ</th>
                <th>Hình ảnh</th>
                <th>Action</th>
              </tr>
            </thead>
          
            <tbody>
            <?php
        foreach ($listloai as $loai) {
          extract($loai);

          $sualoai = "index.php?act=sualoai&maloai=" . $id_place;
          $xoaloai = "index.php?act=xoaloai&maloai=" . $id_place;
          $hinhpath = "../upload/" . $image_place;
          if (is_file($hinhpath)) {
            $image_place = "<img src='" . $hinhpath . "' height='60' width='100'>";
          } else {
            $image_place = "ko tìm thấy ảnh";
          }

          echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>' . $id_place . '</td>
          <td>' . $name_place . '</td>
          <td>' . $address_place . '</td>
          <td>' . $image_place . '</td>
          <td>
           <a href="' . $sualoai . '" class="suabtn"><input type="button" value="Sửa" class="btn btn-warning"></a>
           <a href="' . $xoaloai . '" class="xoabtn"><input type="button" value="Xóa" class="btn btn-danger"></a>
          </td>
          </tr>
          ';
        }
        ?>

            </tbody>
          </table>
         






        </div> 
      </div>


      <form action="" class="mtt" >
      <input type="button" value="Chọn tất cả  " class="btn btn-success">
        <input type="button" value="Bỏ chọn tất cả " class="btn btn-success">
        <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger">
        <button class="btn btn-warning"><a href="index.php?act=addloai" >Nhập thêm</a></button>
      </form>


      
    </div>
  </main>
</div>