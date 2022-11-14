   <footer>
        <div class="row m-0 p-0">
              
<<<<<<< HEAD

                <div class="row m-0 col-12 px-5 email-footer bg-main align-items-center justify-content-center p-4">
                        <div class="row col-12 justify-content-center">
                        <div class="col-1 text-white">
                <div class="row m-0 color-main col-12 p-0 email-footer bg-main align-items-center p-4">
=======
                <div class="row m-0 col-12 p-0 email-footer bg-main align-items-center p-4">
>>>>>>> 831270e93aed390a105eaa7cf8f0fd614d381bed
                        <div class="col-2 text-end text-white">

                        <i class="fas fa-envelope-square fa-4x"></i>
                        </div>
                        <div class="col-6 text-white text-start">
                       
               
                           <b>Đăng ký nhận bản tin</b>
                           <p>Nhập email để nhận các chương trình khuyến mãi kèm nhiều ưu đãi hấp dẫn </p>
               
                        </div>

                 <div class="col-4 d-flex align-items-center justify-content-evenly text-end">

                 <input id="email" type="email" placeholder="Email" class=" form-control w-75 d-inline">
                           <input id="submit" type="submit" value="Đăng ký" class="btn btn-danger d-inline">
                 </div>
                        </div>
                
                   

          </div>
                <div class="row m-0 col-12 align-items-center footer">
                        <div class="col-3 text-white p-4 text-center">
                                <img src="upload/logo.png" alt="" class="img-fluid">
                        </div>
                        <div class=".row m-0 col-4 text-white p-4 align-self-start"> 
                           <h1 class="col-8 offset-2 font-thu-phap">Mạng Xã Hội</h3>
                          <div class="col-6 offset-3 text-start">
                          <p><i class="fab fa-facebook-square"></i>&nbsp; Facebook</p>
                           <p><i class="fab fa-instagram-square"></i>&nbsp; Instagram</p>
                           <p><i class="fab fa-youtube"></i>&nbsp; Youtube</p>
                           <p><i class="fab fa-google-plus-square"></i>&nbsp; Google</p>
                          </div>

                  </div>
                        <div class="col-4 text-white p-4 align-self-start">
                       
                           <h1 class="font-thu-phap">Liên Hệ</h1>
                           <div class="lh text-start">
                           <p>CÔNG TY DỊCH VỤ DU LỊCH YẾN TƯỜNG(YENTUONG TOURIST)</p>
                           <p>Trụ sở:288 Đ.Nguyễn Văn Linh,Hưng Lợi,Ninh Kiều,TP Cần Thơ</p>
                           <p>Tel:079.548.3987</p>
                           <p>Email:yentuong@yentuongrourst.com</p>
                           <p>Tổng đài:1900 9999</p>
                           </div>

                   
                        </div>
                </div>
        </div>
           
   </footer>

   <!-- Trần Tường thêm -->
   <!-- js slider -->
   <script>
           let slideIndex = 0;
           showSlides();

           function showSlides() {
                   let i;
                   let slides = document.getElementsByClassName("mySlides");
                   for (i = 0; i < slides.length; i++) {
                           slides[i].style.display = "none";
                   }
                   slideIndex++;
                   if (slideIndex > slides.length) {
                           slideIndex = 1
                   }
                   slides[slideIndex - 1].style.display = "block";
                   setTimeout(showSlides, 4000); // Change image every 2 seconds
           }
   </script>
   <!--end js slider -->

   </div>
   </body>

   </html>