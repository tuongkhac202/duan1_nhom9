<?php
// thêm booing
function insert_booking($makhachHang, $matour, $songuoi, $ngaybook, $ghichu)
{
    $sql = "insert into bookings(id_customer,id_tour,number_customers,day_booking,note) values ('$makhachHang','$matour','$songuoi','$ngaybook','$ghichu')";
    pdo_execute($sql);
}
// load danh sách booking
function select_all_booking()
{
    $sql = "select * from bookings order by id_booking desc";
    $listbook = pdo_query($sql);
    return $listbook;
}
// xóa booking
function booking_delete($ma_book)
{
    $sql = "DELETE FROM bookings WHERE id_booking=?";
    if (is_array($ma_book)) {
        foreach ($ma_book as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_book);
    }
}
// lấy thông tin booking trong trang cart
function booking_cart($id)
{
    $sql = "select b.*, t.price, t.day_start,t.name_tour,t.image_tour, c.id_customer 
    from bookings b 
    join tours t on b.id_tour=t.id_tour 
    join customers c on b.id_customer=c.id_customer
    where b.id_customer = '$id'
    group by b.id_booking
    ";
    return pdo_query($sql);
}
// xóa booking trong cart
function booking_delete_cart($id, $idBook)
{
    $sql = "delete from bookings where id_customer ='$id' and id_booking = '$idBook'";
    pdo_execute($sql);
}
// xủ lí booking
function booking_handle($id){
    $sql = "update bookings set status ='Đang chờ xử lí...' where id_booking = '$id'";
    pdo_execute($sql);
}
