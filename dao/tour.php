<?php
function load_tour($cate)
{
    $sql = "select tours.*, places.name_place from tours join places on tours.id_place = places.id_place  where category = '$cate' limit 6";
    $tour = pdo_query($sql);
    return $tour;
}

function load_tour_3($cate)
{
    $sql = "select tours.*, places.name_place from tours join places on tours.id_place = places.id_place where category = '$cate' order by id_tour  limit 3";
    $tour = pdo_query($sql);
    return $tour;
}
function load_tour_one($id)
{
    $sql = "select tours.*, places.name_place from tours join places on tours.id_place = places.id_place  where id_tour =" . $id;
    $tour = pdo_query($sql);
    return $tour;
}

function insert_tour($ten, $iddd, $diaDiem, $batdau, $ketthuc, $gia, $giamgia, $mota, $hinh)
{
    $sql = "insert into tours(name_tour,id_place, category, day_start, day_end, price, discount, tour_detail, image_tour) values ('$ten','$iddd','$diaDiem','$batdau','$ketthuc','$gia', '$giamgia', '$mota', '$hinh')";
    pdo_execute($sql);
}

function delete_tour($id)
{
    $sql = "delete from tours where id_tour =" . $id;
    pdo_execute($sql);
}
function load_list_tour()
{
    $sql = "select * from tours,places";
    $sql .= " where tours.id_place=places.id_place ";
    $sql .= " order by id_tour ";

    $list_tour = pdo_query($sql);
    return $list_tour;
}


function load_one_tour($id)
{
    $sql = "select * from tours where id_tour=" . $id;
    $tour = pdo_query_one($sql);
    return $tour;
}

function update_tour(
    $ma,
    $id_place,
    $name_tour,
    $diaDiem,
    $batdau,
    $ketthuc,
    $gia,
    $giamgia,
    $mota,
    $hinh
) {
    if ($hinh !== "") {
        $sql = "update tours set name_tour='$name_tour',id_place = '$id_place', category='$diaDiem', day_start = '$batdau', day_end='$ketthuc' , price = '$gia', discount ='$giamgia', tour_detail ='$mota', image_tour ='$hinh' where id_tour = '$ma'";
    } else {
        $sql = "update tours set name_tour='$name_tour',id_place = '$id_place', category='$diaDiem', day_start = '$batdau', day_end='$ketthuc' , price = '$gia', discount ='$giamgia', tour_detail ='$mota' where id_tour = '$ma'";
    }
    pdo_execute($sql);
}

function filter_tour($diaDiem, $diadiem, $gia)
{
    $sql = "select tours.*, places.name_place 
    from tours join places on tours.id_place = places.id_place 
    where 1 ";
    if ($diaDiem == "Bắc" || $diaDiem == "Trung" || $diaDiem == "Nam") {
        $sql .= " and category = '$diaDiem' ";
    }
    if ($diadiem !== "") {
        $sql .= " and name_place like N'%$diadiem%' ";
    }
    if ($gia !== "") {
        $sql .= " and price <= '$gia'";
    }
    return pdo_query($sql);
}
function load_tour_goiy()
{
    $sql = "select tours.*, places.name_place from tours join places on tours.id_place = places.id_place  limit 9";
    $tour = pdo_query($sql);
    return $tour;
}
