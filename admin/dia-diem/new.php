<div id="layoutSidenav_content">
        <main>
                <div class="container-fluid px-4">
                        <h4 class="mt-4">THÊM MỚI ĐỊA ĐIỂM</h4>
                        <div class="card mb-4">
                                <div class="card-body">
                                        <form action="index.php?act=addDiaDiem" method="post" class="formcontent mt"
                                                enctype="multipart/form-data">
                                                <div class=" mb10">
                                                        Mã địa điểm (tự động)
                                                        <br />
                                                        <input type="text" name="madd" disabled />
                                                </div>
                                                <br />
                                                <div class=" mb10">
                                                        Tên địa điểm
                                                        <br />
                                                        <input type="text" name="tenloai" required />
                                                </div>
                                                <br />
                                                <div class=" mb10">
                                                        Địa chỉ
                                                        <br />
                                                        <input type="text" name="diachi" required />
                                                </div>
                                                <br />
                                                <div class=" mb10">
                                                        Ảnh địa điểm
                                                        <br />
                                                        <input type="file" name="hinh" required />
                                                </div>
                                                <br />
                                                <br />
                                                <input value="Thêm mới" type="submit" name="themmoi"
                                                        class="btn btn-success"></input>
                                                <button type="reset" class="btn btn-warning">Nhập lại</button>
                                                <button class="btn btn-info"><a href="index.php?act=listDiaDiem"
                                                                style="text-decoration: none;">Danh sách địa
                                                                điểm</a></button>
                                                <?php
    
           if(isset($thongbao)&&($thongbao!="")){
            echo "<br>". $thongbao;
           }
        
        ?>
                                        </form>






                                </div>
                        </div>

                </div>
        </main>
</div>