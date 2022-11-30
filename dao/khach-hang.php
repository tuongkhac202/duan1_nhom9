
<?php
function listKhachHang()
{
    $sql = "select * from customers";
    $khachHang = pdo_query($sql);
    return $khachHang;
}
function delete_customers($id)
{
    $sql = "delete from customers where id_customer ='$id'";
    pdo_execute($sql);
}
// đăng ký
function insert_customers($name, $pass, $birth, $phone, $email)
{
    $sql = "insert into customers(name,pass_word,birth_day,phone_number,email) values ('$name','$pass','$birth','$phone','$email')";
    pdo_execute($sql);
}
function select_khachHang($maKhachHang)
{
    $sql = "select * from customers where id_customer='$maKhachHang'";
    $khachHang = pdo_query_one($sql);
    return $khachHang;
}


function update_khachHang($maKhachHang, $email, $ten, $pass)
{
    $sql = "update customers set email = '$email', name = '$ten' where id_customer ='$maKhachHang'";
    pdo_execute($sql);
}

function update_khachHang_admin($maKhachHang, $tenkh, $email, $sdt, $vaitro)
{
    $sql = "update customers set email = '$email', phone_number = '$sdt', name = '$tenkh', role ='$vaitro' where id_customer='$maKhachHang'";
    pdo_execute($sql);
}

function update_mk($maKhachHang, $passnew)
{
    $sql = "update customers set mat_khau ='$passnew' where ma_kh ='$maKhachHang'";
    pdo_execute($sql);
}

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