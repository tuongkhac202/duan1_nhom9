<?php
require_once 'pdo.php';
// thêm bình luận
function binh_luan_insert($ma_khachHang, $ma_tour, $noi_dung, $ngay_bl)
{
    $sql = "INSERT INTO comments(id_customer,id_tour,content,day_comment) VALUES (?,?,?,?)";
    pdo_execute($sql, $ma_khachHang, $ma_tour, $noi_dung, $ngay_bl);
}
// select tất cả bình luận
function select_all_binh_luan()
{
    $sql = "select * from comments order by id_comment desc ";
    $listBinhLuan = pdo_query($sql);
    return $listBinhLuan;
}
// xóa bình luận
function binh_luan_delete($ma_bl)
{
    $sql = "DELETE FROM comments WHERE id_comment=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}

