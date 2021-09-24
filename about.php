<!DOCTYPE html>
<html lang="en">

<!-- title should be on top  -->
<?php $title = 'ConsoLegal | About Us'; ?>
<?php include './incl/head.php'; ?>

<body>
   <!---------- navbar  ---------->
   <?php include './incl/nav.php'; ?>

   <!-- about us home  -->
   <section id="about-us-home">
      <div class="row container-md mx-auto ">
         <div class="col-md-6 lt order-2 order-md-1">
            <div class="content">
               <h2 class="heading">We're A Team Of Creators and Innovators</h2>
               <p class="sub-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quaerat nam labore iure debitis distinctio ex.</p>
               <a class="btn an-btn">Get Started</a>
            </div>
         </div>
         <div class="col-md-6 rt order-1 order-md-2">
            <div class="img-container">
               <img src="https://images.unsplash.com/photo-1576097492331-cad3b737fd9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=464&q=80" alt="" class="img-fluid">
            </div>
         </div>

      </div>


   </section>

   <!-- quick cards  -->
   <section class="quick-cards">
      <div class="head">
         <h3 class="title">The Values We <br> Live By</h3>
         <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Eligendi, temporibus?</p>
      </div>

      <div class="cards-container container-md mx-auto ">
         <div class="cards">
            <div class="img"><img src="image/national-top-50.svg" alt="" class="img-fluid"></div>
            <h3 class="title">Title for quick card</h3>
            <p class="sub-title">Lorem ipsum dolor </p>
            <p class="desc">adipisicing elit. Ipsa porro quia nemo iure, excepturi nobis nisi culpa.</p>
         </div>
         <div class="cards">
            <div class="img"><img src="image/national-top-50.svg" alt="" class="img-fluid"></div>
            <h3 class="title">Title for quick card</h3>
            <p class="sub-title">Lorem ipsum dolor </p>
            <p class="desc">adipisicing elit. Ipsa porro quia nemo iure, excepturi nobis nisi culpa.</p>
         </div>
         <div class="cards">
            <div class="img"><img src="image/national-top-50.svg" alt="" class="img-fluid"></div>
            <h3 class="title">Title for quick card</h3>
            <p class="sub-title">Lorem ipsum dolor </p>
            <p class="desc">adipisicing elit. Ipsa porro quia nemo iure, excepturi nobis nisi culpa.</p>
         </div>
      </div>

   </section>



   <!--------- footer  ----------->
   <?php include './incl/footer.php'; ?>

</body>

</html>