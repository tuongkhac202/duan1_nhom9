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
            <h4 class="mt-4">DANH SÁCH BÌNH LUẬN</h4>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã bình luận</th>
                                <th>Nội dung</th>
                                <th>Mã khách hàng</th>
                                <th>Mã tour</th>
                                <th>Ngày bình luận</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <?php
                        foreach ($listBinhLuan as $bl) {
                                extract($bl);
                                $xoaBinhLuan = "index.php?act=xoaBinhLuan&mabl=" . $id_comment;
                                echo '
                                <tr>
                                <td><input type="checkbox"></td>
                                <td>' . $id_comment . '</td>
                                <td><p>' . $content . '</p></td>
                                <td>' . $id_customer . '</td>
                                <td>' . $id_tour . '</td>
                                <td>' . $day_comment . '</td>
                                <td>
                                 <a href="' . $xoaBinhLuan . '" class="xoabtn"><input type="button" class="btn btn-danger" value="Xóa"></a>
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