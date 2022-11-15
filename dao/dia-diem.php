<?php
function insert_loai($tenloai,$diachi,$hinh){
    $sql = "insert into places(name_place, address_place, image_place) values ('$tenloai','$diachi','$hinh')";
    pdo_execute($sql);
}

function delete_loai($id){
    $sql ="delete from places where id_place =".$id;
    pdo_execute($sql);
}

function load_list(){
    $sql="select * from places";
    $listloai=pdo_query($sql);
    return $listloai;
}

function load_one($id){
    $sql="select * from places where id_place=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}


function update_loai($maloai,$tenloai,$diachi,$hinh){
    $sql = "update places set name_place = '$tenloai', address_place ='$diachi', image_place = '$hinh' where id_place = '$maloai'";
                pdo_execute($sql);
}

?>