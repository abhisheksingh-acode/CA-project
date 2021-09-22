<!DOCTYPE html>
<html lang="en">
<!-- title should be on top  -->
<?php $title = 'ConsoLegal | Contact Us'; ?>
<?php include './incl/head.php'; ?>

<body>
   <!---------- navbar  ---------->
   <?php include './incl/nav.php'; ?>

   <!----- contact us home  ------->
   <section class="mx-auto" id="contact-us">
      <h3 class="main-title text-center">Contact US</h3>
      <h5 class="sub-title text-center">Any Question and Remarks? Just write us a message</h5>


      <div class="main-row row container-md mx-auto">
         <div class="col-md-5 lt">
            <div class="info-card">
               <div class="top">
                  <h3 class="title">Contact Information</h3>
                  <p class="caption-info">Fill up the form and our Team will get back to you within 24 hours</p>
               </div>

               <div class="contact-info">
                  <div class="box">
                     <span class="icon"><i class="fas fa-phone-alt"></i></span>
                     <span class="text">+91 79857xxxxx</span>
                  </div>
                  <div class="box">
                     <span class="icon"><i class="fas fa-envelope"></i></span>
                     <span class="text">alias@gmail.com</span>
                  </div>
                  <div class="box">
                     <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                     <span class="text">New Delhi, 110044</span>
                  </div>
               </div>

               <div class="social-icons">
                  <span class="icons"><i class="fab fa-facebook-f"></i></span>
                  <span class="icons"><i class="fab fa-whatsapp"></i></span>
                  <span class="icons"><i class="fab fa-instagram"></i></span>
                  <span class="icons"><i class="fab fa-youtube"></i></span>
               </div>
            </div>
         </div>
         <div class="col-md-7 rt">
            <form class="row g-3">
               <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">First Name</label>
                  <input type="email" class="form-control" id="inputEmail4">
               </div>
               <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="inputPassword4">
               </div>
               <div class="col-6">
                  <label for="inputAddress" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="inputAddress" placeholder="xxxx@mail.com">
               </div>
               <div class="col-6">
                  <label for="inputAddress2" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Phone: 123xxxx">
               </div>
               <div class="col-6">
                  <label for="inputAddress" class="form-label">City</label>
                  <input type="email" class="form-control" id="inputAddress" placeholder="">
               </div>
               <div class="col-6">
                  <label for="inputAddress2" class="form-label">Zip Code</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="">
               </div>
               <div class="col-12">
                  <label class="form-check-label" for="gridCheck">
                     Message
                  </label>
                  <input class="form-control" type="text" id="gridCheck">
               </div>
               <div class="col-12 p-4 ps-0">
                  <button type="submit" class="btn an-btn">Send Message</button>
               </div>
            </form>
         </div>
      </div>

   </section>






   <!--------- footer  ----------->
   <?php include './incl/footer.php'; ?>
</body>

</html>