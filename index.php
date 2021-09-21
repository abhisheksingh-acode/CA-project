<!DOCTYPE html>
<html lang="en">

<!-- title should be on top  -->
<?php $title = 'index page'; ?>
<?php include './incl/head.php'; ?>

<body>
   <!---------- navbar  ---------->
   <?php include './incl/nav.php'; ?>

   <!---------- header  ------------>
   <header class="mx-0 ">
      <div class="row main-row mx-auto h-100">
         <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center px-md-5">
            <form class="d-flex w-100 mb-3" action="" method="get" id="search">
               <input class="form-control me-2 " type="text" placeholder="Search" name="search" aria-label="Search">
            </form>
            <h5 class="p-2">Our Categories:</h5>

            <div class="row mx-auto p-0 category-grid gy-3">
               <div class="col-6 col-md-4 grid-item"><a href="">Private Limited Company Registration </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">FSSAI License </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">GST Registration </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">MSME Registration </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">IEC Registration </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">ISO Registration </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">Trademark Registration </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">Trademark Assignment </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">PSARA License </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">RERA Registration </a></div>
               <div class="col-6 col-md-4 grid-item"><a href="">RERA Registration For Promoters </a></div>
            </div>
         </div>
         <div class="col-12 col-md-6 mx-auto icons-grid row">
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/Income-tax-return.png" alt="">
                  <span>Income tax</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/Loan.png" alt="">
                  <span>Loan</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/GST.png" alt="">
                  <span>GST</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/Payroll-Managment.png" alt="">
                  <span>Payroll Managment</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/Insurance.png" alt="">
                  <span>Insurance</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/Income-tax-return.png" alt="">
                  <span>Income Tax Return</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/Trade-mark-Registration.png" alt="">
                  <span>Trademark Registration</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/TDS-Return.png" alt="">
                  <span>TDS Return</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/Registration-Certificate.png" alt="">
                  <span>Registration Certificate</span>
               </div>
            </div>
            <!-- <div class="icon col-6 col-md-4">
               <img src="image/web-dev.png" alt="">
               <span>Web development</span>
            </div>
            <div class="icon col-6 col-md-4">
               <img src="image/ecommerce.png" alt="">
               <span>ecommerce services</span>
            </div> -->
            <!-- <div class="icon col-6 col-md-4">
               <img src="image/content.png" alt="">
               <span>content services</span>
            </div> -->
            <!-- <div class="icon col-6 col-md-4">
               <img src="image/gui.webp" alt="">
               <span>Graphic and UI design</span>
            </div>
            <div class="icon col-6 col-md-4">
               <img src="image/marketing.png" alt="">
               <span>marketing services</span>
            </div> -->

         </div>
      </div>

      <!---------- side social bar  ------------>
      <?php include './incl/social.php'; ?>
   </header>


   <!---------- about us  ------------>
   <!-- <section class="" id="about-us">
      <h3 class="side-caption">About Us</h3>


      <div class="row container-md mx-auto gy-4 px-md-5 px-2 main-row">
         <div class="rt col-12 col-sm-4 order-2 order-md-2">
            <form class="mx-auto">
               <h3 class="main-title text-center mb-4">Quick Inquery</h3>
               <div class="mb-3">
                  <input type="text" placeholder="Enter Your Name" class="form-control">
               </div>
               <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Enter Your Email">
               </div>
               <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Enter Your Phone">
               </div>
               <div class="mb-3">
                  <textarea class="form-control" placeholder="Message..."></textarea>
               </div>

               <div class="text-center">
                  <button type="submit" class="btn text-white mx-auto">Submit</button>
               </div>
            </form>
         </div>
         <div class="lt col-12 col-sm-8 order-1 order-md-1">
            <div class="inner-div ms-auto">
               <div class="circle"></div>
               <h3 class="title " data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true"> About US</h3>

               <p class="para" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius perferendis veniam, quia velit neque expedita esse commodi in nostrum, rerum eveniet accusantium saepe eum voluptatum dolorum! Accusantium, consequatur et.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eaque enim mollitia in natus amet eligendi sequi fugiat nostrum nesciunt quis commodi maxime temporibus, minima recusandae deserunt earum a voluptatum?
               </p>
               <div class="button" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-once="true">
                  <a href="" class="btn btn-danger text-white">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </section> -->

   <section class="my-5 py-5" id="about-us">
      <div class="row container-md mx-auto">
         <div class="col-md-5 d-flex align-items-center lt">
            <div class="inner-div ">
               <h1 class="title fw-bold" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true"> About <span class="brandFont">ConsoLegal</span></h1>

               <p class="para my-3" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius perferendis veniam, quia velit neque expedita esse commodi eum voluptatum dolorum! Accusantium, consequatur et. Accusantium, consequatur et.</p>
               <div class="button" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-once="true">
                  <a href="" class="btn an-btn">Read More</a>
               </div>
            </div>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-6 d-flex justify-content-center rt align-items-center">
            <div class="img-container mx-auto text-center">
               <img src="./image/about-us.svg" alt="" class="img-fluid">
            </div>
            <div class="float float1">
               <div class="icon"><i class="fas fa-user"></i></div>
               <div class="main">
                  <div class="caption">Happy clients</div>
                  <div class="nos">200+</div>
               </div>
            </div>
            <div class="float float2">
               <div class="icon"><i class="fas fa-file-alt"></i></div>
               <div class="main">
                  <div class="caption">Projects Delivered</div>
                  <div class="nos">250+</div>
               </div>
            </div>
            <div class="float float3">
               <div class="icon"><i class="fas fa-trophy"></i></div>
               <div class="main">
                  <div class="caption">Awards Received</div>
                  <div class="nos">20+</div>
               </div>
            </div>
            <div class="float float4">
               <div class="icon"><i class="far fa-building"></i></div>
               <div class="main">
                  <div class="caption">Industries Served</div>
                  <div class="nos">30+</div>
               </div>
            </div>
         </div>
         <!-- <div class="col-md-1"></div> -->
      </div>
   </section>










   <section class="my-5 position-relative" id="why-choose">
      <!-- sidebar caption  -->
      <!-- <h3 class="side-caption">Why Choose Us</h3> -->

      <div class="row mx-auto main-row">
         <h2 class="text-center">Why Choose <span class="brandFont fw-bold">ConsoLegal</span></h2>
         <h6 class="text-muted text-center fw-normal">Lorem ipsum dolor sit amet</h6>
         <div class="swiper-container-why-choose mx-auto">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="inner-card bg-danger">
                     <div class="main-div">
                        <div class="img-container">
                           <img src="image/national-top-50.svg" alt="">
                        </div>
                        <h6 class="title">National top 50 consulting firms</h6>
                        <p class="para">
                           Incorporating a Public Company will provide you security &
                           enjoys far more credibility than ot...
                           besides as
                           the most prestigious firm of its kind.
                        </p>
                     </div>
                     <div class="side-image">
                        <img src="" alt="">
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="inner-card bg-warning">
                     <div class="main-div">
                        <div class="img-container">
                           <img src="image/national-top-50.svg" alt="">
                        </div>
                        <h6 class="title">National top 50 consulting firms</h6>
                        <p class="para">
                           Incorporating a Public Company will provide you security &
                           enjoys far more credibility than ot...
                           besides as
                           the most prestigious firm of its kind.
                        </p>
                     </div>
                     <div class="side-image">
                        <img src="" alt="">
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="inner-card bg-primary">
                     <div class="main-div">
                        <div class="img-container">
                           <img src="image/national-top-50.svg" alt="">
                        </div>
                        <h6 class="title">National top 50 consulting firms</h6>
                        <p class="para">
                           Incorporating a Public Company will provide you security &
                           enjoys far more credibility than ot...
                           besides as
                           the most prestigious firm of its kind.
                        </p>
                     </div>
                     <div class="side-image">
                        <img src="" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-next-btn" title="next"><i class="fas fa-long-arrow-alt-right"></i></div>
            <!-- <div class="swiper-prev-btn"><i class="fas fa-chevron-left"></i></div> -->
         </div>
      </div>
   </section>


   <!---------- our services  ------------>
   <section class="my-5 position-relative" id="our-service">
      <!-- side caption  -->
      <h3 class="side-caption">Services</h3>
      <!-- side caption  -->
      <div class="row main-row mx-auto p-0">
         <h2 class="text-center mb-4">Services Offered at <span class="brandFont fw-bold">ConsoLegal</span></h2>

         <!-- left section  -->
         <div class="col-12 col-md-3 lt">
            <div class="tabs-div">
               <ul>
                  <li class="tabs tab1 active-li">
                     <input type="radio" checked="checked" name="tabs">
                     <label>
                        Business Registration
                     </label>
                  </li>
                  <li class="tabs tab2">
                     <input type="radio" name="tabs">
                     <label>
                        Government Registration
                     </label>
                  </li>
                  <li class="tabs tab3">
                     <input type="radio" name="tabs">
                     <label>
                        Fassai License
                     </label>
                  </li>
                  <li class="tabs tab4">
                     <input type="radio" name="tabs">
                     <label>
                        RBI Regulatory
                     </label>
                  </li>
                  <li class="tabs tab5">
                     <input type="radio" name="tabs">
                     <label>
                        Tax Filing
                     </label>
                  </li>
                  <li class="tabs tab6">
                     <input type="radio" name="tabs">
                     <label>
                        IPR & NGO
                     </label>
                  </li>
               </ul>
            </div>
         </div>
         <!-- right section  -->

         <!-- container for tab1 -->
         <div class="col-12 col-md-9 rt tab-container row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 1</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab2 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration6</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 6</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 6</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 6</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab3 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 8</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 8</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab1 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 11</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration 11</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab1 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab1 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab1 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>





      </div>
   </section>


   <!---------- USP section ------------>
   <section class="my-5" id="USP">
      <h2 class="text-center mb-3">USP</h2>

      <div class="row main-row mx-auto g-3 container-md py-4">
         <div class="col-md-4 col-6 hover-cards-container">
            <div class="hover-card">
               <div class="bg-img-hover">
                  <img src="https://images.unsplash.com/photo-1629377856766-72c3bb4c86c6?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0N3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="">
               </div>
               <span class="nos">01</span>
               <h3 class="title">title</h3>
               <p class="para">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatem.
               </p>
            </div>
         </div>
         <div class="col-md-4 col-6 hover-cards-container">
            <div class="hover-card">
               <div class="bg-img-hover">
                  <img src="https://images.unsplash.com/photo-1629704279981-435d23b31e27?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyOXx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="">
               </div>
               <span class="nos">02</span>
               <h3 class="title">title</h3>
               <p class="para">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatem.
               </p>
            </div>
         </div>
         <div class="col-md-4 col-6 hover-cards-container">
            <div class="hover-card">
               <div class="bg-img-hover">
                  <img src="https://images.unsplash.com/photo-1629666448297-56b25188f330?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyNnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="">
               </div>
               <span class="nos">03</span>
               <h3 class="title">title</h3>
               <p class="para">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatem.
               </p>
            </div>
         </div>
         <div class="col-md-4 col-6 hover-cards-container">
            <div class="hover-card">
               <div class="bg-img-hover">
                  <img src="https://images.unsplash.com/photo-1629685744999-97cd66a39b06?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="">
               </div>
               <span class="nos">04</span>
               <h3 class="title">title</h3>
               <p class="para">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatem.
               </p>
            </div>
         </div>
      </div>
   </section>


   <!-- our process  -->
   <section class="my-5" id="our-process">
      <div class="row container-md mx-auto main-row">
         <div class="col-md-6 lt">
            <div class="">
               <h3 class="title">How Our Process Works</h3>
               <p class="sub-title">Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Facere, fuga.</p>
            </div>

            <div class="img-container">
               <img src="image/about-us.svg" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-md-6 rt">
            <div class="accordions">
               <div class="accordion-box">
                  <div class="title">How we analise your need 5?</div>
                  <div class="dropdown-content">
                     <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque iste sequi quibusdam eligendi perferendis vel exercitationem illo magni fugit culpa!</p>
                  </div>
               </div>
               <div class="accordion-box">
                  <div class="title">How we analise your need 1?</div>
                  <div class="dropdown-content">
                     <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque iste sequi quibusdam eligendi perferendis vel exercitationem illo magni fugit culpa!</p>
                  </div>
               </div>
               <div class="accordion-box">
                  <div class="title">How we analise your need2 ?</div>
                  <div class="dropdown-content">
                     <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque iste sequi quibusdam eligendi perferendis vel exercitationem illo magni fugit culpa!</p>
                  </div>
               </div>
               <div class="accordion-box">
                  <div class="title">How we analise your need 3?</div>
                  <div class="dropdown-content">
                     <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque iste sequi quibusdam eligendi perferendis vel exercitationem illo magni fugit culpa!</p>
                  </div>
               </div>
               <div class="accordion-box">
                  <div class="title">How we analise your need 3?</div>
                  <div class="dropdown-content">
                     <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque iste sequi quibusdam eligendi perferendis vel exercitationem illo magni fugit culpa!</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- app download section  -->
   <section class="my-5" id="join-app">
      <div class="row mx-auto container-md">
         <div class="col-6 ">
            <div class="img-container">
               <img src="image/1.png" alt="" class="" height="500px" width="auto">
            </div>
         </div>
         <div class="col-6">
            <div class="inner-div">
               <h2 class="heading">Join our MSME Community.</h2>
               <p class="sub-heading">Book Services, Ask Free Questions, share knowledge with Verified Experts.</p>
               <span class="sub-heading">Download Our App</span>

               <form action="" id="link-form">
                  <div class="">
                     <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">+91</button>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Mobile Number">
                     </div>
                  </div>
               </form>
               <button type="submit" class="btn" form="link-form">Get Download Link</button>
               <div class="row mx-auto justify-content-center mt-2">
                  <div class="col-7"><img src="./image/android-ios.png" alt="" class="img-fluid"></div>
                  <!-- <div class="col-3"><img src="https://www.gigzoe.com/static/media/Ios-Button.c68c9de3.png" alt="" class="img-fluid"></div> -->
               </div>
            </div>

         </div>
      </div>
   </section>

   <!---------- FAQs section ------------>
   <section class="my-5 bg-light py-5" id="faqs">
      <div class="container mx-auto border py-5 top-div">
         <h1 class="text-center main-title mb-5">Frequently Asked Questions</h1>
         <form class="mx-auto text-center">
            <div class="search-bar mx-auto">
               <input type="text" class="form-control search-bar border mx-auto rounded-pill" placeholder="Search for topics">
               <button type="submit" class="btn search-btn"><i class="fas fa-search"></i></button>
            </div>
         </form>
      </div>


      <div class="row main-row container">
         <!-- faqs topic -->
         <div class="col-3 topic">
            <h4 class="title">FAQ TOPICS</h4>
            <hr>
            <ul class="list-unstyled">
               <li class="active">
                  <span class="icon fas fa-search-dollar"></span>
                  <span class="btn topic-link">GST</span>
               </li>
               <li>
                  <span class="icon fas fa-hand-holding-usd"></span>
                  <span class="btn topic-link">Income Tax</span>
               </li>
               <li>
                  <span class="icon fas fa-coins"></span>
                  <span class="btn topic-link">Loan</span>
               </li>
               <li>
                  <span class="icon fas fa-archive"></span>
                  <span class="btn topic-link">Payroll Managment</span>
               </li>
               <li>
                  <span class="icon fas fa-graduation-cap"></span>
                  <span class="btn topic-link">ISO Registration</span>
               </li>
               <li>
                  <span class="icon fas fa-headset"></span>
                  <span class="btn topic-link">Support</span>
               </li>
            </ul>
         </div>
         <div class="col-1"></div>
         <!-- faqs rel topics -->
         <div class="col-8 topic-content">
            <!-- first  -->
            <div class="active-container active">
               <div class="content-item">
                  <span class="nos">01</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">02</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
               <div class="content-item">
                  <span class="nos">03</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">04</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
            </div>
            <!-- second  -->
            <div class="active-container">
               <div class="content-item">
                  <span class="nos">05</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">06</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
               <div class="content-item">
                  <span class="nos">07</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">08</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
            </div>
            <!-- third  -->
            <div class="active-container">
               <div class="content-item">
                  <span class="nos">09</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">10</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
               <div class="content-item">
                  <span class="nos">11</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">12</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
            </div>
            <!-- fourth  -->
            <div class="active-container">
               <div class="content-item">
                  <span class="nos">13</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">14</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
               <div class="content-item">
                  <span class="nos">15</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">16</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
            </div>
            <!-- fifth  -->
            <div class="active-container">
               <div class="content-item">
                  <span class="nos">17</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">18</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
               <div class="content-item">
                  <span class="nos">19</span>
                  <h2 class="question">What is GST ?</h2>
                  <p class="answer">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, tempore impedit. Rerum quos cumque corrupti laudantium perferendis dolorem maiores a debitis, cupiditate, tempora quasi esse nemo doloribus. Aperiam, natus culpa!</p>
               </div>
               <div class="content-item">
                  <span class="nos">20</span>
                  <h2 class="question">GST Registration process?</h2>
                  <p class="answer"> A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.</p>
               </div>
            </div>
         </div>

   </section>


   <!----------- blogs section  ---------->
   <section class="my-5" id="blogs">
      <h2 class="main-title text-center mb-5">Latest Blogs</h2>

      <div class="swiper-container-blog">
         <div class="swiper-wrapper">
            <!-- slide 1 -->
            <div class="swiper-slide">
               <div class="blog-card-container">
                  <div class="img-container">
                     <span class="date">AUGUST 12,2021</span>
                     <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="title">
                     <h5>What is investing and trading in stock market? How does it works?</h5>
                  </div>
                  <div class="tags">
                     <span class="author">Posted By: Author</span>

                     <ol class="tag-list">
                        <li>How to search for Genuine stock tips provider in India?</li>
                        <li>Truth about operator calls, FII base calls, Sureshot calls and jackpot tips</li>
                        <li>What are Operator calls or operator based tips?</li>
                     </ol>

                  </div>
                  <div class="read-more"><a href="" class="btn an-btn">Read More</a></div>
               </div>
            </div>
            <!-- slide 2 -->
            <div class="swiper-slide">
               <div class="blog-card-container">
                  <div class="img-container">
                     <span class="date">AUGUST 12,2021</span>
                     <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="title">
                     <h5>What is investing and trading in stock market? How does it works?</h5>
                  </div>
                  <div class="tags">
                     <span class="author">Posted By: Author</span>

                     <ol class="tag-list">
                        <li>How to search for Genuine stock tips provider in India?</li>
                        <li>Truth about operator calls, FII base calls, Sureshot calls and jackpot tips</li>
                        <li>What are Operator calls or operator based tips?</li>
                     </ol>
                  </div>
                  <div class="read-more"><a href="" class="btn an-btn">Read More</a></div>
               </div>
            </div>
            <!-- slide3 -->
            <div class="swiper-slide">
               <div class="blog-card-container">
                  <div class="img-container">
                     <span class="date">AUGUST 12,2021</span>
                     <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="title">
                     <h5>What is investing and trading in stock market? How does it works?</h5>
                  </div>
                  <div class="tags">
                     <span class="author">Posted By: Author</span>

                     <ol class="tag-list">
                        <li>How to search for Genuine stock tips provider in India?</li>
                        <li>Truth about operator calls, FII base calls, Sureshot calls and jackpot tips</li>
                        <li>What are Operator calls or operator based tips?</li>
                     </ol>
                  </div>
                  <div class="read-more"><a href="" class="btn an-btn">Read More</a></div>
               </div>
            </div>
            <!-- slide 4 -->
            <div class="swiper-slide">
               <div class="blog-card-container">
                  <div class="img-container">
                     <span class="date">AUGUST 12,2021</span>
                     <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="title">
                     <h5>What is investing and trading in stock market? How does it works?</h5>
                  </div>
                  <div class="tags">
                     <span class="author">Posted By: Author</span>

                     <ol class="tag-list">
                        <li>How to search for Genuine stock tips provider in India?</li>
                        <li>Truth about operator calls, FII base calls, Sureshot calls and jackpot tips</li>
                        <li>What are Operator calls or operator based tips?</li>
                     </ol>
                  </div>
                  <div class="read-more"><a href="" class="btn an-btn">Read More</a></div>
               </div>
            </div>
            <!-- slide 5 -->
            <div class="swiper-slide">
               <div class="blog-card-container">
                  <div class="img-container">
                     <span class="date">AUGUST 12,2021</span>
                     <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="title">
                     <h5>What is investing and trading in trading in stock market? How does it works? How does it works?</h5>
                  </div>
                  <div class="tags">
                     <span class="author">Posted By: Author</span>

                     <ol class="tag-list">
                        <li>How to search for Genuine stock tips provider in India?</li>
                        <li>Truth about operator calls, FII base calls, Sureshot calls and jackpot tips</li>
                        <li>What are Operator calls or operator based tips?</li>
                     </ol>
                  </div>
                  <div class="read-more"><a href="" class="btn an-btn">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <div class="swiper-prev-btn"><i class="fas fa-chevron-left"></i></div>
      <div class="swiper-next-btn"><i class="fas fa-chevron-right"></i></div>
   </section>


   <!----------- clients section  ----------->
   <section class="my-5" id="clients">
      <div class="row mx-auto">
         <div class="col-3 col-md-2 d-flex justify-content-center align-items-center">
            <h4 class="main-title">CLIENT</h4>
         </div>
         <div class="col-9 col-md-10 clients-slider-container ">
            <div class="clients-slider">
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
               <div class="img-container"><img src="image/order.png" alt=""></div>
            </div>

         </div>
      </div>
   </section>


   <!----------- testimonial section  ----------->
   <section class="my-5 " id="testimonial">
      <h2 class="text-center main-title">What Our Clients Says</h2>

      <div class="swiper-container-testimonial ">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <div class="swiper-slide slide1">
               <div class="testimonial-card">
                  <div class="img-container">
                     <img src="image/profile.png" alt="">
                  </div>
                  <h3 class="user-name">Mr. Ajay Singh</h3>
                  <h5 class="user-prof">MD, India</h5>
                  <p class="review">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum labore consequatur optio quo! Quaerat, nesciunt iusto veniam dolore
                  </p>
                  <div class="rating"><span>5.0</span>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>

         </div>
         <div class="swiper-pagination"></div>
      </div>
   </section>


   <!--------- footer  ----------->
   <?php include './incl/footer.php'; ?>
   <script>
      // typed animation
      var options = {
         strings: ["Income Tax", "GST Registration", "Marketing Services"],
         typeSpeed: 60,
         loop: true,
         attr: "placeholder",
         loopCount: Infinity,
         showCursor: true,
         cursorChar: "|",
      };
      var typed = new Typed("#search input", options);
   </script>
   <script>
      AOS.init();
   </script>
</body>

</html>