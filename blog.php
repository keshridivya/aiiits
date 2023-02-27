<?php include_once("config.php");  ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <?php include_once("head.php")?>
</head>

<body>



   <?php include_once("preloader.php")?>


   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
      </svg>
   </div>
   <!-- back to top end -->
   <?php include_once("whatsapp.php")?>

   <!-- header area start -->
   <?php include_once("header.php")?>
   <!-- header area end -->

   <!-- offcanvas area start -->
   <?php include_once("mobile-menu.php")?>
   <!-- offcanvas area end -->
   <div class="body-overlay"></div>
   <!-- offcanvas area end -->

   <main>

      <!-- breadcrumb area start -->
      <section class="breadcrumb__area include-bg pt-90 pb-90 breadcrumb__overlay"
         data-background="assets/img/slider/2/blog-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center p-relative z-index-1">
                     <h3 class="breadcrumb__title">Our Blog</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.php">Home</a></span>
                        <span class="dvdr"><i class="fa-solid fa-angle-right"></i></span>
                        <span>Blog</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- blog area start -->
      <section class="blog__area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12 col-xl-12 col-lg-12">
                  <div class="postbox__wrapper pr-20">
                     <div class="row">

                     <?php
                     $sql=mysqli_query($conn,"select * from blog");
                     while($arr=mysqli_fetch_array($sql)){
                     ?>
                     <div class="col-12 col-lg-6">
                     <article class="postbox__item format-video mb-50 transition-3">
                        <div class="postbox__thumb postbox__video w-img p-relative">
                           <a>
                              <img src="assets/img/blog/<?= $arr['file']; ?>" alt="">
                           </a>
                        </div>
                        <div class="postbox__content">
                           <h3 class="postbox__title">
                              <a><?= $arr['name']; ?></a>
                           </h3>
                           <div class="postbox__text">
                              <p><?= $arr['short_desc']; ?></p>
                           </div>
                           <div class="postbox__read-more">
                              <a class="tp-btn" href='blog-detail.php?id=<?= $arr['id']; ?>'>read more</a>
                           </div>
                        </div>
                     </article>
                     </div>
                     <?php } ?>
                     </div>

                     <div class="basic-pagination">
                        <nav>
                           <ul class="pagin text-center"></ul>
                        </nav>
                     </div>
                     
                     </div>
                  
                     </div>
               </div>

            </div>
         </div>
      </section>
      <!-- blog area end -->

   </main>

   <!-- footer area start -->
   <?php include_once("footer.php")?>
   <!-- footer area end -->

   <!-- JS here -->
   <?php include_once("foot.php")?>
</body>

</html>
