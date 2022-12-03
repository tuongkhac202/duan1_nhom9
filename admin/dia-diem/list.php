<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="py-3 d-flex justify-content-between">
                <h4>DANH SÁCH ĐỊA ĐIỂM DU LỊCH</h4>
                <a class="btn btn-warning" href="index.php?act=addDiaDiem">Nhập thêm</a>
            </div>
            
            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered table-striped table-hover">
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
        foreach ($listDiaDiem as $diaDiem) 
        {
          extract($diaDiem);
          $suaDiaDiem = "index.php?act=suaDiaDiem&madiaDiem=" . $id_place;
          $xoaDiaDiem = "index.php?act=xoaDiaDiem&madiaDiem=" . $id_place;
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
           <a href="' . $suaDiaDiem . '" class="suabtn"><input type="button" value="Sửa" class="btn btn-warning"></a>
           <a href="' . $xoaDiaDiem . '" class="xoabtn"><input type="button" value="Xóa" class="btn btn-danger" Onclick="return ConfirmDelete();"></a>
          </td>
          </tr>
          ';
        }
        ?>
                        </tbody>
                    </table>
                </div>
            </div>              
        </div>
    </main>
</div>