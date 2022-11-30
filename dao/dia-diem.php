<?php
function insert_places($tendiaDiem, $diachi, $hinh)
{
    $sql = "insert into places(name_place, address_place, image_place) values ('$tendiaDiem','$diachi','$hinh')";
    pdo_execute($sql);
}

function delete_places($id)
{
    $sql = "delete from places where id_place =" . $id;
    pdo_execute($sql);
}

function load_list_diaDiem()
{
    $sql = "select * from places";
    $listDiaDiem = pdo_query($sql);
    return $listDiaDiem;
}

function load_one($id)
{
    $sql = "select * from places where id_place=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_places($madiaDiem, $tendiaDiem, $diachi, $hinh)
{
    $sql = "update places set name_place = '$tendiaDiem', address_place ='$diachi', image_place = '$hinh' where id_place = '$madiaDiem'";
    pdo_execute($sql);
}
