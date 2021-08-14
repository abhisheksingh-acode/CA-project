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

            <div class="row mx-auto p-0 category-grid">
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
         <div class="col-12 col-md-6 mx-auto icons-grid row ">
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/in-tax.png" alt="">
                  <span>Income tax</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/acc-service.png" alt="">
                  <span>accounting services</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/gst.webp" alt="">
                  <span>GST</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/business.webp" alt="">
                  <span>business Registration</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/biz-licence.png" alt="">
                  <span>business licence</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/roc.png" alt="">
                  <span>ROC licence</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/trade-mark.png" alt="">
                  <span>Trademark & copyright</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/gui.webp" alt="">
                  <span>Graphic and UI design</span>
               </div>
            </div>
            <div class="icon col-6 col-md-4">
               <div class="inner">
                  <img src="image/video-animation.png" alt="">
                  <span>Video animation</span>
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
   </header>

   <!---------- side social bar  ------------>
   <?php include './incl/social.php'; ?>


   <!---------- about us  ------------>
   <section class="my-5" id="about-us">
      <!-- side caption  -->
      <h3 class="side-caption">About Us</h3>
      <!-- side caption  -->

      <div class="row container-md mx-auto px-md-5 px-2">
         <div class="lt col-12 col-sm-6">
            <h1> About US</h1>

            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius perferendis veniam, quia velit neque expedita esse commodi in nostrum, rerum eveniet accusantium saepe eum voluptatum dolorum! Accusantium, consequatur et.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eaque enim mollitia in natus amet eligendi sequi fugiat nostrum nesciunt quis commodi maxime temporibus, minima recusandae deserunt earum a voluptatum?
            </p>
         </div>
         <div class="rt col-12 col-sm-6">
            <form class="mx-auto">
               <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control">
               </div>
               <div class="mb-3">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label class="form-label">Service</label>
                  <select class="form-select mb-3">
                     <option selected>--------------------</option>
                     <option value="1">One</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                  </select>
               </div>

               <div class="text-center">
                  <button type="submit" class="btn theme-bg-blue text-white mx-auto">Submit</button>
               </div>
            </form>
         </div>
      </div>



   </section>


   <!---------- why choose us  ------------>
   <section class="my-5" id="why-choose-us">
      <div class="row mx-auto main-row">
         <div class="col-12 col-md-4 lt">
            <div class="main-card">
               <h3 class="title">Why Choose Us</h3>
               <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt dolores quos ea saepe eum distinctio aliquam temporibus minima consequatur ex magni iusto facilis nihil iure accusantium, eaque adipisci ipsa. Lorem, ipsum dolor sit ex ut recusandae, voluptate eligendi mollitia magnam illum.</p>
            </div>
         </div>
         <div class="col-12 col-md-8 row mx-auto p-0 rt">
            <!-- cards  -->
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
            <!-- cards  -->
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
            <!-- cards  -->
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
                  <li class="tabs tab1 active-li">Business Registration</li>
                  <li class="tabs tab2">Government Registration</li>
                  <li class="tabs tab3">Fassai License</li>
                  <li class="tabs tab4">RBI Regulatory</li>
                  <li class="tabs tab5">Tax Filing</li>
                  <li class="tabs tab6">IPR & NGO</li>
               </ul>
            </div>
         </div>
         <!-- right section  -->

         <!-- container for tab1 -->
         <div class="col-12 col-md-9 rt tab-container row mx-0">
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab2 -->
         <div class="col-12 col-md-9 rt tab-container row mx-0 d-none ">
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration1</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
         </div>

         <!-- container for tab3 -->
         <div class="col-12 col-md-9 rt tab-container row mx-0 d-none">
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab4 -->
         <div class="col-12 col-md-9 rt tab-container row mx-0 d-none ">
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration1</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
         </div>

         <!-- container for tab5 -->
         <div class="col-12 col-md-9 rt tab-container row mx-0 d-none">
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration2</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
         </div>
         <!-- container for tab6 -->
         <div class="col-12 col-md-9 rt tab-container row mx-0 d-none ">
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration1</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
               </div>
            </div>
            <!-- cards container  -->
            <div class="col-12 col-md-4">
               <div class="cards">
                  <div class="img-container">
                     <img src="image/order.png" alt="">
                  </div>
                  <h6 class="title">Public Limited Company Registration</h6>
                  <p class="para">Incorporating a Public Company will provide you security & enjoys far more credibility than ot..</p>

                  <a href="" class="btn text-white">Get Started</a>
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
</body>

</html>