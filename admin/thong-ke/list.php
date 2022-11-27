

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h4 class="mt-4">THỐNG KÊ TOUR DU LỊCH</h4>
      <div class="card mb-4">
        <div class="card-body">




      <table class="table table-bordered">
        <tr>
          
          <th>Loại tour</th>
          <th>Số lượng tour</th>
          <th>Số lượt book</th>
          <th>Giá thấp nhất</th>
          <th>Giá cao nhất</th>
    

        </tr>
       
        <?php
          foreach ($listtk as $tk) {
            extract($tk);
            
          echo '
          <tr>
        
          <td>'.$category.'</td>
          <td>'.$so_luong.'</td>
          <td>'.$so_luot.'</td>
          <td>'.$gia_min.'</td>
          <td>'.$gia_max.'</td>
        
        
          </tr>
          ';
          }
          ?>
          
   
      </table>
      </div>
      </div>
      <br>
      <form action="" class="mtt">
        <button  class="btn btn-success"><a href="index.php?act=bdtk" >Biểu đồ thống kê</a></button>
      </form>




    
  </main>
</div>