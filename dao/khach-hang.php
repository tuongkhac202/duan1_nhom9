
<?php
function listkh()
{
    $sql = "select * from customers";
    $kh = pdo_query($sql);
    return $kh;
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
function select_kh($makh)
{
    $sql = "select * from customers where id_customer='$makh'";
    $kh = pdo_query_one($sql);
    return $kh;
}

// function check_kh($ten,$pass){
//     $sql="select * from customers where ho_ten='$ten' and mat_khau = '$pass'" ;
//     $kh=pdo_query_one($sql);
//     return $kh;
// }
// function check_email($email){
//     $sql="select * from customers where email='$email'" ;
//     $kh=pdo_query_one($sql);
//     return $kh;
// }
function update_kh($makh, $email, $ten, $pass)
{
    $sql = "update customers set email = '$email', name = '$ten' where id_customer ='$makh'";
    pdo_execute($sql);
}

function update_kh_admin($makh, $tenkh, $email, $sdt, $vaitro)
{
    $sql = "update customers set email = '$email', phone_number = '$sdt', name = '$tenkh', role ='$vaitro' where id_customer='$makh'";
    pdo_execute($sql);
}

function update_mk($makh, $passnew)
{
    $sql = "update customers set mat_khau ='$passnew' where ma_kh ='$makh'";
    pdo_execute($sql);
}
// function checkLogin($name,$pass){
// $sql ="select * from customers where id_customer =2 and name ='$name'  and pass_word ='$pass' and  role = 1";
// $login = pdo_query($sql);
// return $login;
// }
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