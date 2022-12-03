<?php
// thêm địa điểm
function insert_places($tendiaDiem, $diachi, $hinh)
{
    $sql = "insert into places(name_place, address_place, image_place) values ('$tendiaDiem','$diachi','$hinh')";
    pdo_execute($sql);
}
// xóa địa điểm
function delete_places($id)
{
    $sql = "delete from places where id_place =" . $id;
    pdo_execute($sql);
}
// danh sách địa điểm
function load_list_diaDiem()
{
    $sql = "select * from places ORDER BY id_place desc";
    $listDiaDiem = pdo_query($sql);
    return $listDiaDiem;
}
// load một địa điểm
function load_one($id)
{
    $sql = "select * from places where id_place=" . $id;
    $diaDiem = pdo_query_one($sql);
    return $diaDiem;
}
// cập nhật địa điểm
function update_places($madiaDiem, $tendiaDiem, $diachi, $hinh)
{
    $sql = "update places set name_place = '$tendiaDiem', address_place ='$diachi', image_place = '$hinh' where id_place = '$madiaDiem'";
    pdo_execute($sql);
}
