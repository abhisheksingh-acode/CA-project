<!DOCTYPE html>
<html lang="en">

<!-- title should be on top  -->
<?php $title = 'ConsoLegal | Home'; ?>
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
            <h5 class="p-2 fw-bold">Our Categories:</h5>

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
         </div>
      </div>

      <!---------- side social bar  ------------>
      <?php include './incl/social.php'; ?>
   </header>


   <!---------- about us  ------------>
   <section class="my-md-5 py-5" id="about-us">
      <div class="row container-md mx-auto">
         <h1 class="title text-center fw-bold d-md-none" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true"> About <span class="brandFont">ConsoLegal</span></h1>

         <div class="col-md-5 col-12 d-flex align-items-center order-3 order-md-1 lt">
            <div class="inner-div ">
               <h1 class="title fw-bold d-none d-md-block" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true"> About <span class="brandFont">ConsoLegal</span></h1>

               <p class="para my-3" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
                  We Started in 2013 as a one man show in the profession gradually scaled up with the joining of passionate and experienced professionals from diverse backgrounds now launching our online platform ConsoLegal- Keep it Simple. We value accountability, transparency and simplicity.</p>
               <div class="button" data-aos="fade-up" data-aos-offset="100" data-aos-duration="1000" data-aos-once="true">
                  <a href="" class="btn an-btn">Read More</a>
               </div>
            </div>
         </div>
         <div class="col-md-1 order-2"></div>
         <div class="col-md-6 col-12 order-1 order-md-3 d-flex justify-content-center rt align-items-center">
            <div class="img-container mx-auto text-center" data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" data-aos-once="true">
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


   <!---------- why choose  ------------>
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
                           <img src="image/CL.png" alt="">
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
                        <img src="image/Quick-Support/customers.png" alt="" class="img-fluid">
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="inner-card bg-warning">
                     <div class="main-div">
                        <div class="img-container">
                           <img src="image/CL.png" alt="">
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
                        <img src="image/Quick-Support/CostEffective.png" alt="" class="img-fluid">
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="inner-card bg-primary">
                     <div class="main-div">
                        <div class="img-container">
                           <img src="image/CL.png" alt="">
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
                        <img src="image/Quick-Support/Expertprofessional.png" alt="" class="img-fluid">
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="inner-card bg-danger">
                     <div class="main-div">
                        <div class="img-container">
                           <img src="image/CL.png" alt="">
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
                        <img src="image/Quick-Support/QuickSupport.png" alt="" class="img-fluid">
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="inner-card bg-warning">
                     <div class="main-div">
                        <div class="img-container">
                           <img src="image/CL.png" alt="">
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
                        <img src="image/Quick-Support/yrexperience.png" alt="" class="img-fluid">
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
                        Business Licenses
                     </label>
                  </li>
                  <li class="tabs tab4">
                     <input type="radio" name="tabs">
                     <label>
                        Taxation
                     </label>
                  </li>
                  <li class="tabs tab5">
                     <input type="radio" name="tabs">
                     <label>
                        IPR & Other
                     </label>
                  </li>
                  <li class="tabs tab6">
                     <input type="radio" name="tabs">
                     <label>
                        Compliances
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
                  <h6 class="title">Private Limited Company Incorporation</h6>
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
                  <h6 class="title">LLP/Partnership Firm Registration</h6>
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
                  <h6 class="title">Proprietorship Firm Registration</h6>
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
                  <h6 class="title">Nidhi Company Registration</h6>
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
                  <h6 class="title">MSME/Udyam Registration</h6>
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
                  <h6 class="title">Import Export Code Registration</h6>
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
                  <h6 class="title">EPF & ESI Registration</h6>
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
                  <h6 class="title">Shop & Establishment Registration</h6>
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
                  <h6 class="title">FSSAI License</h6>
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
                  <h6 class="title">Drug License</h6>
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
                  <h6 class="title">Trade License</h6>
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
                  <h6 class="title">PSARA License</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab4 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Income Tax Return</h6>
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
                  <h6 class="title">GST Registration</h6>
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
                  <h6 class="title">GST Return</h6>
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
                  <h6 class="title">TDS Return</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab5 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Trademark Registration</h6>
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
                  <h6 class="title">ISO Registration</h6>
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
                  <h6 class="title">Payroll Management</h6>
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
                  <h6 class="title">Accounting/ Bookeeping</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab6 -->
         <div class="col-12 col-md-9 rt tab-container d-none row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-6">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Company Annual Filling</h6>
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
                  <h6 class="title">LLP Annual Filling</h6>
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
                  <h6 class="title">Nidhi Company Compliances </h6>
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
                  <h6 class="title">Event Based Compliances</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn">Get Started</a>
               </div>
            </div>
         </div>






      </div>
   </section>


   <!---------- USP section ------------>
   <section class="my-5" id="USP">
      <h2 class="text-center main-title mb-3">USP</h2>

      <!-- <div class="row main-row mx-auto g-3 container-md py-4">
         <div class="col-md-4 col-12 hover-cards-container">
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
         <div class="col-md-4 col-12 hover-cards-container">
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
         <div class="col-md-4 col-12 hover-cards-container">
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
         <div class="col-md-4 col-12 hover-cards-container">
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
      </div> -->
      <div class="usp-row row container-md mx-auto py-5">
         <div class="col-md-4 col-12">
            <div class="usp-card">
               <div class="img-container">
                  <img src="https://images.unsplash.com/photo-1629377856766-72c3bb4c86c6?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0N3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" class="img-fluid">
               </div>
               <div class="content-box">
                  <h3 class="title">Card Title Bold</h3>
                  <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque eos, accusamus itaque nihil non laudantium? Quo atque enim magnam eveniet.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <div class="usp-card">
               <div class="img-container">
                  <img src="https://images.unsplash.com/photo-1629666448297-56b25188f330?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyNnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" class="img-fluid">
               </div>
               <div class="content-box">
                  <h3 class="title">Card Title Bold</h3>
                  <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque eos, accusamus itaque nihil non laudantium? Quo atque enim magnam eveniet.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <div class="usp-card">
               <div class="img-container">
                  <img src="https://images.unsplash.com/photo-1629377856766-72c3bb4c86c6?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0N3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" class="img-fluid">
               </div>
               <div class="content-box">
                  <h3 class="title">Card Title Bold</h3>
                  <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque eos, accusamus itaque nihil non laudantium? Quo atque enim magnam eveniet.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <div class="usp-card">
               <div class="img-container">
                  <img src="https://images.unsplash.com/photo-1629666448297-56b25188f330?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyNnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" class="img-fluid">
               </div>
               <div class="content-box">
                  <h3 class="title">Card Title Bold</h3>
                  <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque eos, accusamus itaque nihil non laudantium? Quo atque enim magnam eveniet.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-12">
            <div class="usp-card">
               <div class="img-container">
                  <img src="https://images.unsplash.com/photo-1629377856766-72c3bb4c86c6?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0N3x8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" class="img-fluid">
               </div>
               <div class="content-box">
                  <h3 class="title">Card Title Bold</h3>
                  <p class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque eos, accusamus itaque nihil non laudantium? Quo atque enim magnam eveniet.</p>
               </div>
            </div>
         </div>
      </div>

   </section>

   <!-- Usp card hover  -->







   <!-- our process  -->
   <section class="mb-0 my-md-5" id="our-process">
      <div class="row container-md mx-auto main-row">
         <div class="col-md-6 lt">
            <div class="head" style="width: 70%;">
               <h3 class="title">Working Process at ConsoLegal</h3>
               <p class="sub-title">Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Facere, fuga.</p>
            </div>

            <div class="img-container">
               <img src="image/processhome.png" alt="" class="img-fluid">
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
                  <div class="title show">How we analise your need 1?</div>
                  <div class="dropdown-content">
                     <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque iste sequi quibusdam eligendi perferendis vel exercitationem illo magni fugit culpa!</p>
                  </div>
               </div>
               <div class="accordion-box">
                  <div class="title">How we analise your need2 ?</div>
                  <div class="dropdown-content ">
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
   <section class="mt-0 my-md-5" id="join-app">
      <div class="row mx-auto container-md main-row">
         <h2 class="heading theme-orange col-12 text-center d-md-none">Join our MSME Community.</h2>

         <div class="col-md-6 d-flex lt">
            <div class="img-container">
               <img src="image/1.png" alt="">
               <img src="image/app2.png" alt="">
            </div>
         </div>
         <div class="col-md-6 rt">
            <div class="inner-div">
               <h2 class="heading d-none d-md-block">Join our MSME Community.</h2>
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
   <?php include './incl/faq.php' ?>


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
   <?php include './incl/testimonial.php' ?>


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

</body>

</html>