<?php
require_once 'pdo.php';

function thong_ke_tour(){
    $sql = "select tours.id_tour, category, bookings.id_booking, "
            ."count(category) so_luong,"
            ."count(bookings.id_booking) so_luot,"
            ."min(price) gia_min,"
            ."max(price) gia_max "
            ." from tours join bookings on tours.id_tour=bookings.id_tour "
            ."group by tours.id_tour, category";
    return pdo_query($sql);
}

function thong_ke_binh_luan(){
    $sql = "SELECT hh.ma_hh, hh.ten_hh,"
            . " COUNT(*) so_luong,"
            . " MIN(bl.ngay_bl) cu_nhat,"
            . " MAX(bl.ngay_bl) moi_nhat"
            . " FROM binh_luan bl "
            . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
            . " GROUP BY hh.ma_hh, hh.ten_hh"
            . " HAVING so_luong > 0";
    return pdo_query($sql);
}