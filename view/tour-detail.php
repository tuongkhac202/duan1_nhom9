<?php foreach ($tthis as $tt):  ?>

<div class="row m-0 tour-detail">



    <div class="col-12 title-detail text-center">
<h1 class="color-main font-thu-phap my-3 align-items-center">Chi Tiết Tour Du Lịch</h1>
    </div>



    <div class="row col-12 mx-0 my-5">
        
    <div class="row m-0 col-7">
        <div class="col-12"><h2 class="font-thu-phap text-danger">Tour Miền <?php echo $tt['category'] ?> - Tour Du Lịch <?php echo $tt['name_place'] ?></h2></div>
        <div class="col-12">
       
       <?php echo  '<img src="upload/'.$tt["image_tour"].'" alt="" class="img-fluid w-100">'  ?>

        </div>
    </div>
    
    </div>



</div>
<?php endforeach  ?>
