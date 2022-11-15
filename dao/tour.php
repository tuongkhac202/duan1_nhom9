<?php
function load_tour(){
    $sql ="select tours.*, places.name_place from tours join places on tours.id_place = places.id_place  limit 6";
    $tour = pdo_query($sql);
    return $tour;
}
function load_tour_one($id){
    $sql ="select tours.*, places.name_place from tours join places on tours.id_place = places.id_place  where id_tour =".$id;
    $tour = pdo_query($sql);
    return $tour;
}

function insert_tour($ten,$iddd,$loai,$bd,$kt,$gia,$giamgia,$mota,$hinh){
    $sql = "insert into tours(name_tour,id_place, category, day_start, day_end, price, discount, tour_detail, image_tour) values ('$ten','$iddd','$loai','$bd','$kt','$gia', '$giamgia', '$mota', '$hinh')";
    pdo_execute($sql);
}

function delete_tour($id){
    $sql ="delete from tours where id_tour =".$id;
    pdo_execute($sql);
}
function load_list_tour(){
    $sql="select * from tours,places";
    $sql.=" where tours.id_place=places.id_place ";
    $sql.=" order by id_tour ";
    
    $list_tour=pdo_query($sql);
    return $list_tour;
}
// function load_listhh($kw,$maloai){
//     $sql="select * from tours where 1";
  
//     if($kw!=""){
//         $sql.=" and category like '%".$kw."%'";
//     }
//     if($maloai>0){
//         $sql.=" and id_place = '".$maloai."'";
//     }
//     $sql.=" order by id_tour";
//     $listhh=pdo_query($sql);
//     return $listhh;
// }



function load_listhh_top10(){
    $sql="select * from hang_hoa where 1 order by ma_hh desc limit 0,9";
    $listhh=pdo_query($sql);
    return $listhh;
}


function load_listhh_trangchu(){
    $sql="select * from hang_hoa where 1 order by ma_hh limit 0,9";
    $listhh=pdo_query($sql);
    return $listhh;
}



function load_loaihh($id){
    if($id>0){
    $sql="select * from loai where ma_loai=".$id;
    $hh=pdo_query_one($sql);
    extract($hh);
    return $ten_loai;
}else{
    return "";
}

}

function load_onehh($id){
    $sql="select * from tours where id_tour=".$id;
    $hh=pdo_query_one($sql);
    return $hh;
}

function load_hh_cungloai($mahh,$maloai){
    $sql="select * from hang_hoa where ma_Loai =".$maloai." and ma_hh <>".$mahh;
    $listhh=pdo_query($sql);
    return $listhh;
}


function update_tour($ma,$iddd,$ten,$loai,$bd,$kt,$gia,$giamgia,$mota,$hinh){
    if($hinh!==""){
    $sql = "update tours set name_tour='$ten',id_place = '$iddd', category='$loai', day_start = '$bd', day_end='$kt' , price = '$gia', discount ='$giamgia', tour_detail ='$mota', image_tour ='$hinh' where id_tour = '$ma'";
    }else{
        $sql = "update tours set name_tour='$ten',id_place = '$iddd', category='$loai', day_start = '$bd', day_end='$kt' , price = '$gia', discount ='$giamgia', tour_detail ='$mota' where id_tour = '$ma'";
    }
                pdo_execute($sql);
}

?>