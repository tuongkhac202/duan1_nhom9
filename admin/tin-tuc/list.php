<style>
table td p {
    width: 300px !important;
    height: 50px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <div class="py-3 d-flex justify-content-between">
            <h4 class="">DANH SÁCH TIN TỨC</h4>
            <a class="btn btn-warning" href="index.php?act=add-tintuc">Nhập thêm</a>
            </div>
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
          $suatintuc = "index.php?act=sua-tintuc&matt=" . $id_handbook;
          $xoatintuc = "index.php?act=xoa-tintuc&matt=" . $id_handbook;
          $hinhpath = "../upload/" . $img;
          if (is_file($hinhpath)) {
            $img = "<img src='" . $hinhpath . "' height='60' width='100'>";
          } else {
            $img = "không tìm thấy ảnh";
          }
          echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>' . $id_handbook . '</td>
          <td>' . $title . '</td>
          <td style="width: 300px;">' . $content . '</td>
          <td>' . $img . '</td>
          <td>
           <a href="' . $suatintuc . '"  class="suabtn"><input type="button" value="Sửa" class="btn btn-warning"></a>
           <a href="' . $xoatintuc . '"   class="xoabtn"><input type="button" value="Xóa" class="btn btn-danger" Onclick="return ConfirmDelete();"></a>
          </td>
          </tr>
          ';
        }
        ?>
                    </table>
                </div>
            </div>
           
                        
        </div>
    </main>
</div>