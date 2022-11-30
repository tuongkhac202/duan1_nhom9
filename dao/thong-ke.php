<?php
require_once 'pdo.php';

function thong_ke_tour()
{
    $sql = "select tours.id_tour, category, bookings.id_booking, "
        . "count(category) so_luong,"
        . "count(bookings.id_booking) so_luot,"
        . "min(price) gia_min,"
        . "max(price) gia_max "
        . " from tours left join bookings on tours.id_tour=bookings.id_tour "
        . "group by category";
    return pdo_query($sql);
}
