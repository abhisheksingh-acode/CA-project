<!DOCTYPE html>
<html lang="en">

<!-- title should be on top  -->
<?php $title = 'ConsoLegal | Blogs'; ?>
<?php include './incl/head.php'; ?>

<body>
   <!---------- navbar  ---------->
   <?php include './incl/nav.php'; ?>

   <!----------- home  ---------->

   <section id="blog-read-home">
      <h3 class="main-title">Blog post title - short description or title
         about post placed here as heading above featured image</h3>

      <div class="author">
         <div class="pic"><img src="image/profile.png" alt="" class="img-fluid"></div>
         <div class="detail">
            <div class="name">John Doe</div>
            <div class="profile">Assistant Manager</div>
         </div>
      </div>
      <div class="img-container">
         <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" alt="" class="">
      </div>

      <div class="content-section container-md row mx-auto">
         <div class="col-md-1"></div>
         <div class="col-md-7 content-align-container">
            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tenetur corrupti quaerat quis! Odit esse libero at quam aut aperiam! Magni asperiores ea molestiae quis?</p>
            <p class="para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio perspiciatis cupiditate maxime nam odit praesentium hic, ad nostrum? Aliquid, deleniti enim. Tempore maxime dolorum, eaque quia molestias fugiat reprehenderit, omnis soluta odio, a natus praesentium.</p>

            <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ducimus porro tempore maiores velit adipisci explicabo, perspiciatis quaerat veritatis, reiciendis veniam expedita labore corrupti ut ab! Quisquam adipisci iste quidem.</p>

            <h5 class="topic-title">Topic Title :</h5>

            <p class="para">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos velit consequuntur mollitia fugit, quo, ex illum deleniti ullam praesentium impedit necessitatibus corrupti nam, saepe eius iste aspernatur ad deserunt voluptas?
            </p>
            <p class="para">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos velit consequuntur mollitia fugit, quo, ex illum
            </p>

         </div>
         <div class="col-md-4">
            <div class="recent-post-card">
               <!-- <h4 class="recent-title">Recent Posts</h4> -->
               <div class="card mx-auto" style="width: 18rem;">
                  <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                     <a class="nav-item card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.</a>
                  </div>
               </div>
               <div class="card mx-auto" style="width: 18rem;">
                  <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                     <a class="nav-item card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.</a>
                  </div>
               </div>
               <div class="card mx-auto" style="width: 18rem;">
                  <img src="image/How-to-invest-in-Stock-Market-for-beginners-in-India_16.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                     <a class="nav-item card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>

   <!--------- footer  ----------->
   <?php include './incl/footer.php'; ?>

</body>

</html>