<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
        <title>Login to Admin</title>
</head>
<style>
        * {
                padding: 0;
                margin: 0;
        }
        body {
                background: url('../upload/bg-admin.jpg');
                background-repeat: no-repeat;
                background-size: cover;
        }
        .container-fluid{
                margin: 10% auto;
        }
</style>

<body>
        <div class="container-fluid">
                <div class="row text-center">
                        <form action="index.php" method="post" class="col-6 offset-3  bg-light rounded bg-opacity-75 p-4">
                                <h4 class=" font-thu-phap text-white">Đăng Nhập Admin</h4>
                               
                                <input class="col form-control" type="text" name="name" required placeholder="Tên đăng nhập">

                                <input class="col  form-control mt-2" type="password" name="pass" required input placeholder="Mật khẩu">

                                <button type="submit" class="btn btn-primary w-25 mt-2" name="dn">Đăng nhập </button>

                        </form>
                </div>
        </div>
</body>

</html>