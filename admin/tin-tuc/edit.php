<?php
if (is_array($tt)) {
  extract($tt);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
  $img = "<img src='" . $hinhpath . "' height='60'>";
} else {
  $img = "ko tìm thấy ảnh";
}

?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h4 class="mt-4">CHỈNH SỬA TIN TỨC</h4>
      <div class="card mb-4">
        <div class="card-body">
    <form action="index.php?act=update_tintuc" method="post" class="formcontent mt" enctype="multipart/form-data">
      <input hidden type="text" name="matt" value="<?php echo $id_handbook ?>">
      <br />

      <div class="row mb10">
        Tiêu đề
        <br />
        <input type="text" name="tentour" value="<?php echo $title ?>" />
      </div>
      <br />
      <div class="row mb10">
        Nội dung
        <br />
        <textarea name="mota" id="editor" cols="30" rows="10">
              <?php echo $content ?>
              </textarea>
      </div>
      <br />
      <div class="row mb10">
        Ảnh
        <br />
        <input type="file" name="anh" value=""/>
        <?php echo $img ?>
      </div>
      <br />

    




      <br />
      <input class="btn btn-success" value="Cập nhật" type="submit" name="capnhattt"></input>
      <button class="btn btn-warning" type="reset">Nhập lại</button>
      <button class="btn btn-info"><a href="index.php?act=list-tintuc" style="text-decoration: none;">Danh sách tin tức</a></button>
      <?php

      if (isset($thongbao) && ($thongbao != "")) {
        echo "<br>" . $thongbao;
      }

      ?>
    </form>





    </div> 
      </div>
    </div>
  </main>
</div>