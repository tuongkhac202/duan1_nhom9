<div id="layoutSidenav_content">
        <main>
                <div class="container-fluid px-4">
                        <h4 class="mt-4">THÊM MỚI TOUR DU LỊCH</h4>
                        <div class="card mb-4">
                                <div class="card-body">
                                        <form action="index.php?act=addtour" method="post" class="formcontent mt"
                                                enctype="multipart/form-data">
                                                <br>


                                                <div class="row mb10">
                                                        Tên tour
                                                        <br />
                                                        <input type="text" name="tentour" value="" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Tên địa điểm
                                                        <br />
                                                        <select name="iddd">
                                                                <?php
                  foreach ($listDiaDiem as $loai) {
                    extract($loai);
                    echo '<option value="'.$id_place.'">'.$name_place.'</option>';
                  }
                ?>


                                                        </select>
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Loại tour
                                                        <br />
                                                        <input type="text" name="cate" value="" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Ngày bắt đầu
                                                        <br />
                                                        <input type="date" name="start" value="" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Ngày kết thúc
                                                        <br />
                                                        <input type="date" name="end" value="" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Giá
                                                        <br />
                                                        <input type="text" name="gia" value="" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Giảm giá
                                                        <br />
                                                        <input type="text" name="giamgia" value="" />
                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Ảnh
                                                        <br />
                                                        <input type="file" name="hintour" value="" />

                                                </div>
                                                <br />

                                                <div class="row mb10">
                                                        Mô tả tour
                                                        <br />
                                                        <textarea name="mota" id="" cols="30" rows="10">
              </textarea>
                                                </div>
                                                <br />




                                                <br />
                                                <input class="btn btn-success" value="Thêm mới" type="submit"
                                                        name="themmoi"></input>
                                                <button class="btn btn-warning" type="reset">Nhập lại</button>
                                                <button class="btn btn-info"><a href="index.php?act=listtour"
                                                                style="text-decoration: none;">Danh sách
                                                                tour</a></button>
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