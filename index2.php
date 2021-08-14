<!DOCTYPE html>
<html lang="en">
<!-- title should be on top  -->
<?php $title = 'index page'; ?>
<?php include './incl/head.php'; ?>

<body>
   <!---------- navbar  ---------->
   <?php include './incl/nav.php'; ?>

   <!---------- header  ---------->
   <section class="mb-5" id="header1">
      <div class="div row container main-row mx-auto">
         <div class="col-12 col-md-6 lt">
            <h3 class="title">Private Limited Company Registration</h3>
            <p class="para">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate magnam, fuga repellendus illum id dolorum!
            </p>
            <div class="buttons">
               <a href="" class="btn">button1</a>
               <a href="" class="btn">button2</a>
            </div>
         </div>

         <div class="col-12 col-md-6 rt">
            <form action="" class="">
               <div class="row g-3">
                  <div class="col-12 col-md-6">
                     <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="col-12 col-md-6">
                     <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="col-12 col-md-6">
                     <input type="text" class="form-control" placeholder="First name">
                  </div>
                  <div class="col-12 col-md-6">
                     <input type="text" class="form-control" placeholder="Last name">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>



   <!--------- footer  ----------->
   <?php include './incl/footer.php'; ?>
   <script>
   </script>
</body>

</html>