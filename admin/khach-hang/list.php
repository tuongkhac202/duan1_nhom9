<div id="layoutSidenav_content">
        <main>
                <div class="container-fluid px-4">
                        <h4 class="mt-4">DANH SÁCH KHÁCH HÀNG</h4>
                        <div class="card mb-4">
                                <div class="card-body">
                                        <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                        <tr>
                                                                <th></th>
                                                                <th>Mã khách hàng</th>
                                                                <th>Tên khách hàng</th>
                                                                <th>Mật khẩu</th>
                                                                <th>Ngày sinh</th>
                                                                <th>Số điện thoại</th>
                                                                <th>Email</th>
                                                                <th>Tích điểm</th>
                                                                <th>Vai trò</th>
                                                                <th>Actions</th>
                                                        </tr>
                                                </thead>

                                                <?php
                                                foreach ($_SESSION['khachHang'] as $KhachHangactourang) 
                                                {
                                                        extract($KhachHangactourang);
                                                        $suaKhachHang = "index.php?act=suaKhachHang&makh=" . $id_customer;
                                                        $xoaKhachHang = "index.php?act=xoaKhachHang&makh=" . $id_customer;
                                                        echo '
                                                        <tr>
                                                        <td><input type="checkbox"></td>
                                                        <td>' . $id_customer . '</td>
                                                        <td>' . $name . '</td>
                                                        <td>' . $pass_word . '</td>
                                                        <td>' . $birth_day . '</td>
                                                        <td>' . $phone_number . '</td>
                                                        <td>' . $email . '</td>
                                                        <td>' . $point . '</td>
                                                        <td>' . $role . '</td>
                                                        <td>
                                                         <a href="' . $suaKhachHang . '"  ><input type="button" value="Sửa" class="btn btn-warning"></a>
                                                         <a href="' . $xoaKhachHang . '"  ><input type="button" value="Xóa"  class="btn btn-danger" Onclick="return ConfirmDelete();"></a>
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
                        </form>

                </div>
        </main>
</div>