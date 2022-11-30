<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
                crossorigin="anonymous" />
        <title>Login to Admin</title>
</head>
<style>
* {
        padding: 0;
        margin: 0;
}

body {
        background: url('../upload/2201_w030_n002_290b_p1_290.jpg');
}
</style>

<body>
        <div class="container-fluid">
                <div class="row m-4 text-center">
                        <form action="index.php" method="post"
                                class="col-6 offset-3  bg-light rounded bg-opacity-75 p-4">
                                <h4 class=" font-thu-phap">Đăng Nhập Amin</h4>
                                <center>
                                        <hr size="5px" width="80%" align="center" color="red">
                                </center>

                                <input class="col form-control" type="text" name="name" required
                                        placeholder="Tên đăng nhập">

                                <input class="col  form-control mt-2" type="password" name="pass" required input
                                        placeholder="Mật khẩu">

                                <button type="submit" class="btn btn-warning w-25 mt-2" name="dn">Đăng nhập </button>

                        </form>
                </div>
        </div>
</body>

</html>