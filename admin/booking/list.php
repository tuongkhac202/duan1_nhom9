<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4">DANH SÁCH BOOKING</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã đơn hàng</th>
                                <th>Mã khách hàng</th>
                                <th>Mã tour</th>
                                <th>Ngày đặt tour</th>
                                <th>Số lượng người trong tour</th>
                                <th>Ghi chú của khách hàng</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <?php
          foreach ($listbook as $bo) 
          {
          extract($bo);
          $xoabook="index.php?act=xoabook&mabook=".$id_booking;
          echo '
          <tr>
          <td><input type="checkbox"></td>
          <td>'.$id_booking.'</td>
          <td>'.$id_customer.'</td>
          <td>'.$id_tour.'</td>
          <td>'.$day_booking.'</td>
          <td>'.$number_customers.'</td>
          <td>'.$note.'</td>
          <td>'.$status.'</td>
          <td>
          <a href="'.$xoabook.'" class="xoabtn"><input class="btn btn-danger" type="button" value="Xóa" Onclick="return ConfirmDelete();"></a>
          </td>
          </tr>
          ';
          }
          ?>
                    </table>
                </div>
            </div>
            <!-- <form action="" class="mtt">
                <input type="button" value="Chọn tất cả  " class="btn btn-success">
                <input type="button" value="Bỏ chọn tất cả " class="btn btn-success">
                <input type="button" value="Xóa các mục đã chọn" class="btn btn-danger">
            </form> -->
        </div>
    </main>
</div>
