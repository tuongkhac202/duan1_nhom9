<div class="row m-4 text-center">
        <form action="index.php?act=dangNhap" method="post" class="col-6 offset-3  bg-light rounded p-4">
                <h1 class=" font-thu-phap">Đăng Nhập</h1>
                <center>
                        <hr size="5px" width="80%" align="center" color="red">
                </center>
                <input class="col form-control" type="text" name="name" required placeholder="Tên đăng nhập">
                <input class="col  form-control mt-2" type="password" name="pass" required input placeholder="Mật khẩu">
                <p>Chưa có tài khoản? <a class="text-decoration-none text-warning" href="index.php?act=dangKy">Đăng ký</a>
                </p>
                <p><a class="text-decoration-none text-warning" href="index.php?act=forgot_password">Quên mật khẩu</a>
                </p>
                <button type="submit" class="btn btn-warning w-25 mt-2" name="dn">Đăng nhập </button>
        </form>
</div>