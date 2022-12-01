<div class="row m-4 text-center">
        <form action="index.php?act=dangKy" method="POST" class="col-6 offset-3  bg-light rounded p-4">
                <h1 class=" font-thu-phap">Đăng Ký</h1>
                <center>
                        <hr size="5px" width="80%" align="center" color="red">
                </center>
                <input class="col form-control" type="text" name="name" required placeholder="Tên đăng nhập">
                <input class="col  form-control mt-2" type="password" name="pass" required input placeholder="Mật khẩu">
                <input class="col form-control mt-2" type="password" name="pass2" required input
                        placeholder="Nhập lại mật khẩu">
                <input class="col form-control mt-2" type="email" name="email" required input placeholder="Email">
                <input class="col form-control mt-2" type="date" name="birth" id="" required placeholder="Ngày sinh">
                <input class="col form-control mt-2" type="text" name="phone" required input
                        placeholder="Số điện thoại">
                <p>Đã có tài khoản? <a class="text-decoration-none text-warning" href="index.php?act=dangNhap">Đăng nhập</a>
                </p>
                <button type="submit" class="btn btn-warning w-25 mt-2" name="dangky">Đăng ký </button>
        </form>
        <?php

    if (isset($tb) && $tb != "") {
        echo $tb;
    }

    ?>
</div>