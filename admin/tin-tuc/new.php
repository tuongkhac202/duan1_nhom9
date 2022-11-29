
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h4 class="mt-4">THÊM MỚI TIN TỨC</h4>
      <div class="card mb-4">
        <div class="card-body">

          <form action="index.php?act=add-tintuc" method="post" class="formcontent mt" enctype="multipart/form-data">
         <br>

            <div class="row mb10">
        Tiêu đề
        <br />
        <input type="text" name="tieuDe" value="" />
      </div>
      <br />
      <div class="row mb10">
        Nội dung
        <br />
        <textarea name="noiDung" id="" cols="30" rows="10">
              </textarea>
      </div>
      <br />

      <div class="row mb10">
        Ảnh
        <br />
        <input type="file" name="anh" value=""/>
  
      </div>
      <br />

            <br />
            <input class="btn btn-success" value="Thêm mới" type="submit" name="themmoi-tintuc"></input>
            <button  class="btn btn-warning"type="reset">Nhập lại</button>
            <button class="btn btn-info"><a href="index.php?act=list-tintuc" style="text-decoration: none;">Danh sách tin tức</a></button>
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