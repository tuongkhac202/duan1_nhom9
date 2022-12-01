<?php
//  thêm cẩm nang
function insert_handbook($title, $content, $img)
{
    $sql = "insert into handbooks(title,content,img) values ('$title','$content','$img')";
    pdo_execute($sql);
}
//  load 1 cẩm nang
function load_handbook_one($id)
{
    $sql = "select * from handbooks where id_handbook= " . $id;
    return pdo_query($sql);
}
//  load tất cả cẩm nang
function load_handbook_all0()
{
    $sql = "select* from handbooks";
    return pdo_query($sql);
}
//  load cẩm nang 0-2
function load_handbook_all()
{
    $sql = "select* from handbooks limit 0,2";
    return pdo_query($sql);
}
function load_handbook_all1()
{
    $sql = "select* from handbooks limit 2,8";
    return pdo_query($sql);
}
function load_handbook_all2()
{
    $sql = "select* from handbooks limit 8,13";
    return pdo_query($sql);
}
//  cập nhật cẩm nang
function update_handbook($id, $tieude, $noidung, $anh)
{
    $sql = "update handbooks set title = '$tieude', content = '$noidung', img = '$anh' where id_handbook = '$id'";
    pdo_execute($sql);
}
// xóa cẩm nang
function delete_handbook($id)
{
    $sql = "delete from handbooks where id_handbook = '$id'";
    return pdo_query($sql);
}
