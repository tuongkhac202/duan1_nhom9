
<?php
// LẤY DANH SÁCH KHÁCH HÀNG
function listKhachHang()
{
    $sql = "select * from customers";
    $KhachHangactourang = pdo_query($sql);
    return $KhachHangactourang;
}
// XÓA KHÁCH HÀNG
function delete_customers($id)
{
    $sql = "delete from customers where id_customer ='$id'";
    pdo_execute($sql);
}
// đăng ký
function insert_customers($name, $pass, $birth, $phone, $email, $point)
{
    $sql = "insert into customers(name,pass_word,birth_day,phone_number,email,point) values ('$name','$pass','$birth','$phone','$email', '$point')";
    pdo_execute($sql);
}
function select_khachHang($makhachHang)
{
    $sql = "select * from customers where id_customer='$makhachHang'";
    $KhachHangactourang = pdo_query_one($sql);
    return $KhachHangactourang;
}

//  cập nhật khách hàng
function update_khachHang($makhachHang, $email, $ten, $pass)
{
    $sql = "update customers set email = '$email', name = '$ten' where id_customer ='$makhachHang'";
    pdo_execute($sql);
}
//  cập nhật khách hàng admin
function update_khachHang_admin($makhachHang, $tenkh, $email, $sdt, $vaitro)
{
    $sql = "update customers set email = '$email', phone_number = '$sdt', name = '$tenkh', role ='$vaitro' where id_customer='$makhachHang'";
    pdo_execute($sql);
}

function update_mk($makhachHang, $passnew)
{
    $sql = "update customers set mat_khau ='$passnew' where ma_kh ='$makhachHang'";
    pdo_execute($sql);
}
//  kiểm tra đăn nhập
function checkUser($name, $pass)
{
    $sql = "select * from customers where name='$name' and pass_word='$pass'";
    $user = pdo_query_one($sql);
    return $user;
}
function update_password($password, $user_id)
{
    $sql = "UPDATE customers SET pass_word=? WHERE id_customer=?";
    pdo_execute($sql, $password, $user_id);
}

?>