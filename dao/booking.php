<?php



// function book_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "INSERT INTO comments(id_customer, id_tour, content, day_comment) VALUES ('$ma_kh','$ma_hh','$noi_dung','$ngay_bl')";
//     pdo_execute($sql);
// }
function select_all_booking(){
$sql ="select * from bookings order by id_booking ";
$listbook = pdo_query($sql);
return $listbook;
}

function booking_delete($ma_book){
    $sql = "DELETE FROM bookings WHERE id_booking=?";
    if(is_array($ma_book)){
        foreach ($ma_book as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_book);
    }
}
?>