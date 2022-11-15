
    <?php
    $kt= checkLogin($_GET['loginName'],$_GET['passWord']);
    if(isset($_GET['login'])){
        if($kt==true){
            $link="index.php?act=listhh";
            $err="";
         }else{
            $err ="lỗi iiiiiiii";
            $link=" checklogin.php ";
         }
    }
    ?>
   <center>
    <?php
echo $err;
    ?>
   <div class="connnn">
        <form action="<?php $link ?>" method="get">
            <img src="" alt="" height="200" width="300">
            <label for="">
            <h5>Tên đăng nhập:</h5>
            <input type="text" name="loginName">
            </label>

            <label for="">
            <h5>Mật khẩu:</h5>
            <input type="password" name="passWord">
            </label>
          <br><br>
         
           <input type="submit" name="login" value="Đăng nhập">
        </form>
    </div>
   </center>


