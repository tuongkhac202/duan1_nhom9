<div class="row m-4">
        <form class="col-6 offset-3  bg-light rounded p-4" action="index.php?act=update_password" method="post">
                <h1 class="text-center font-thu-phap">Cập nhật mật khẩu</h1>
                <input class="col form-control m-2" type="text" name="code" placeholder="Mã code">
                <input class="col form-control m-2" type="password" name="new_password" placeholder="Mật khẩu mới">
                <input class="col form-control m-2" type="password" name="renew_password"
                        placeholder="Nhập lại mật khẩu mới">
                <center>
                        <input class="btn btn-warning d-flex justify-content-center mt-2" type="submit"
                                name="update_pass" value="Cập nhật">
                </center>

        </form>
</div>