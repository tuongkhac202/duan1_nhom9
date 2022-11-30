
<?php
function send_email($user, $code, $user_name)
{
    require "PHPMailer-master/src/PHPMailer.php"; //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
    require "PHPMailer-master/src/SMTP.php"; //nhúng thư viện vào để dùng
    require 'PHPMailer-master/src/Exception.php'; //nhúng thư viện vào để dùng
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true: enables exceptions
    try {
        $mail->SMTPDebug = 2; // 0,1,2: chế độ debug. khi mọi cấu hình đều tốt thì chỉnh lại 0
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com'; //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $nguoigui = 'yenttbpc03450@fpt.edu.vn';
        $matkhau = 'yenyen12a';
        $tennguoigui = 'Công ty Yến Tường';
        $mail->Username = $nguoigui; // SMTP username
        $mail->Password = $matkhau; // SMTP password
        $mail->SMTPSecure = 'ssl'; // encryption TLS/SSL
        $mail->Port = 465; // port to connect to
        $mail->setFrom($nguoigui, $tennguoigui);
        $to = "$user";
        $to_name = "$user_name";

        $mail->addAddress($to, $to_name); //mail và tên người nhận
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = '';
        $noidungthu = "<span>Xin chào ,$user_name</span><br><br><span>Mã lấy lại mật khẩu của:$code</span>";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true,
            ),
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $e->ErrorInfo;
    }
}
function check_email($email)
{
    $sql = "SELECT * FROM customers WHERE email=?";
    return pdo_query_one($sql, $email);
}
function get_code($code)
{
    $sql = "SELECT * FROM get_code where code=?";
    return pdo_query_one($sql, $code);
}
function update_status($get_code_id)
{
    $sql = "UPDATE get_code SET status = 1 WHERE get_code_id=?";
    pdo_execute($sql, $get_code_id);
}

?>