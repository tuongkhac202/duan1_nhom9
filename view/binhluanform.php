<div class="justify-content-evenly g-1 mb">
    <div class="boxtitle p-2">BÌNH LUẬN</div>
    <div class="boxcontent2">
        <table border="0">
            <tr>
                <th>Mã tour</th>
                <th>Nội dung bình luận</th>
                <th>Mã khách hàng</th>
                <th>Ngày bình luận</th>
            </tr>
            <?php

            foreach ($danhSachBinhLuan as $bl) {
                extract($bl);
                echo '
                <tr>
                <td>' . $id_tour . '</td>
                <td>' . $content . '</td>
                <td>' . $id_customer . '</td>
                <td>' . $day_comment . '</td>
                </tr>
                ';
            }
            ?>
        </table>
    </div>




    <div class="boxfooter p-2">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" hidden name="idtour" value="<?= $id_tour ?>">
            <input type="text" placeholder="Nhập nội dung bình luận" name="ndbl" class="form-control" style="margin-bottom: 5px;">
            <input type="submit" value="Gửi bình luận" name="bl" style="width: 20%" class="btn btn-danger">
        </form>
    </div>
    <?php
    if (isset($_POST['bl']) && ($_POST['bl'])) {
        $makhachHang = $_SESSION['user']['id_customer'];
        $nd = $_POST['ndbl'];
        $matour = $_POST['idtour'];
        echo $makhachHang;
        $ngay = date('Y/m/d');
        binh_luan_insert($makhachHang, $matour, $nd, $ngay);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
</div>