<!DOCTYPE html>
<html lang="en">

<!-- title should be on top  -->
<?php $title = 'index page'; ?>
<?php include './incl/head.php'; ?>

<body>
   <!---------- navbar  ---------->
   <?php include './incl/nav.php'; ?>

   <!---------- header  ------------>
   <header class="mx-0 mb-5">
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
   <section class="my-5" id="about-us">
      <!-- side caption  -->
      <h3 class="side-caption">About Us</h3>
      <!-- side caption  -->

      <!-- <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
      </div> -->

      <div class="row container-md mx-auto gy-4 px-md-5 px-2 main-row">
         <div class="rt col-12 col-sm-6 order-2 order-md-1">
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
         <div class="lt col-12 col-sm-6 order-1 order-md-2" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
            <h3 class="title theme-orange"> About US</h3>

            <p class="para">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius perferendis veniam, quia velit neque expedita esse commodi in nostrum, rerum eveniet accusantium saepe eum voluptatum dolorum! Accusantium, consequatur et.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eaque enim mollitia in natus amet eligendi sequi fugiat nostrum nesciunt quis commodi maxime temporibus, minima recusandae deserunt earum a voluptatum?
            </p>
            <div class="button">
               <a href="" class="btn btn-warning text-white">Read More</a>
            </div>
         </div>
      </div>



   </section>

   <!---------- why choose us  ------------>
   <!-- <section class="my-5" id="why-choose-us">
      <div class="row mx-auto main-row">
         <div class="col-12 col-md-4 lt">
            <div class="main-card">
               <h3 class="title">Why Choose Us</h3>
               <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt dolores quos ea saepe eum distinctio aliquam temporibus minima consequatur ex magni iusto facilis nihil iure accusantium, eaque adipisci ipsa. Lorem, ipsum dolor sit ex ut recusandae, voluptate eligendi mollitia magnam illum.</p>
            </div>
         </div>
         <div class="col-12 col-md-8 row mx-auto p-0 rt">
            cards 
            <div class="col-12 col-md-4 cards-container">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/national-top-50.svg" alt="">
                  </div>
                  <h6 class="title">National top 50 consulting firms</h6>
                  <p class="para">
                     Incorporating a Public Company will provide you security &
                     enjoys far more credibility than ot...
                     besides Taxation services and solutions. Roundly considered as
                     the most prestigious firm of its kind.
                  </p>
               </div>
            </div>
            cards 
            <div class="col-12 col-md-4 cards-container">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/team.svg" alt="">
                  </div>
                  <h6 class="title">99.9% client satisfaction</h6>
                  <p class="para">Incorporating a Public Company will provide you security &
                     enjoys far more credibility than ot...
                     besides Taxation services and solutions. Roundly considered as
                     the most prestigious firm of its kind.</p>

               </div>
            </div>
            cards 
            <div class="col-12 col-md-4 cards-container">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/client-satisfaction.svg" alt="">
                  </div>
                  <h6 class="title">Excellent Advisory Services</h6>
                  <p class="para">Incorporating a Public Company will provide you security &
                     enjoys far more credibility than ot...
                     besides Taxation services and solutions. Roundly considered as
                     the most prestigious firm of its kind.</p>

               </div>
            </div>
         </div>
      </div>
   </section> -->
   <br>
   <section class="my-5 position-relative" id="why-choose">
      <!-- sidebar caption  -->
      <!-- <h3 class="side-caption">Why Choose Us</h3> -->

      <div class="row mx-auto main-row">
         <h2 class="text-center">Why Choose Us</h2>
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

      <div class="icons-grid row mx-auto py-md-2">
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/cost-effective.svg" alt=""></div>
         </div>
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/legal-advice.svg" alt=""></div>
         </div>
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/legal-service.svg" alt=""></div>
         </div>
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/expert-lawyer.svg" alt=""></div>
         </div>
      </div>

      <!-- mid section  -->
      <div class="mid-sec py-5 theme-bg-orange">
         <div class="content">
            <h3 class="text-white title"><span>2o</span> Years of Experience in Various Cases</h3>
            <p class="text-center sub-title">We understand that a client's needs are always diverse and dynamic.</p>
            <div class="text-end">
               <a href class="btn">know more</a>
            </div>
         </div>
      </div>

      <div class="bottom-sec row gy-4">
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/order.png" alt="">
               <span class="nos">28000</span>
            </div>
            <span>Order Created</span>
         </div>
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/rating.png">
               <span class="nos">4.9</span>
            </div>
            <span>Order Created</span>
         </div>
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/companies.png" alt="">
               <span class="nos">2000</span>
            </div>
            <span>Order Created</span>
         </div>
         <div class="col-6 col-sm-3 icon">
            <div><img src="image/experts.png" alt="">
               <span class="nos">150</span>
            </div>
            <span>Order Created</span>
         </div>
      </div>
   </section>


   <!---------- FAQs section ------------>
   <section class="my-5" id="faqs">
      <h2 class="text-center main-title mb-5">Frequently Asked Questions</h2>
      <!--- accordions faqs  ---->
      <div class="container mx-auto">
         <div class="accordion" id="accordionMain">
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                     What is the full form of GST?
                  </button>
               </h2>
               <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     GST stands for "Goods & Services Tax' and as the name itself explains, that the tax is imposed on goods and services.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     What is the GST Registration process?
                  </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     How to get a company registered?
                  </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     You can learn about the Private Company registration using our expert services. This entire process usually takes 10-15 days to be completed. You only need to fill out a 10-minute questionnaire.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="heading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                     What is the full form of GST?
                  </button>
               </h2>
               <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     GST stands for "Goods & Services Tax' and as the name itself explains, that the tax is imposed on goods and services.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="heading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                     What is the GST Registration process?
                  </button>
               </h2>
               <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="heading6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                     How to get a company registered?
                  </button>
               </h2>
               <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     You can learn about the Private Company registration using our expert services. This entire process usually takes 10-15 days to be completed. You only need to fill out a 10-minute questionnaire.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="heading7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                     How to get a company registered?
                  </button>
               </h2>
               <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     You can learn about the Private Company registration using our expert services. This entire process usually takes 10-15 days to be completed. You only need to fill out a 10-minute questionnaire.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="heading8">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                     What is the GST Registration process?
                  </button>
               </h2>
               <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     A “Private limited company” is an entity which is privately held for small businesses. The responsibility of the members of a Private Limited Company is limited to the number of shares respectively held by them and it’s shares cannot be traded publicly.
                  </div>
               </div>
            </div>
            <div class="accordion-item">
               <h2 class="accordion-header" id="heading9">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                     How to get a company registered?
                  </button>
               </h2>
               <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionMain">
                  <div class="accordion-body">
                     You can learn about the Private Company registration using our expert services. This entire process usually takes 10-15 days to be completed. You only need to fill out a 10-minute questionnaire.
                  </div>
               </div>
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
                  <div class="read-more"><a href="" class="btn">Read More</a></div>
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
                  <div class="read-more"><a href="" class="btn">Read More</a></div>
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
                  <div class="read-more"><a href="" class="btn">Read More</a></div>
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
                  <div class="read-more"><a href="" class="btn">Read More</a></div>
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
                  <div class="read-more"><a href="" class="btn">Read More</a></div>
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

      <div class="swiper-container-testimonial">
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