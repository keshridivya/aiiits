﻿<?php include_once("config.php");  ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <?php include_once("head.php")?>
</head>

<body>


   <?php include_once("preloader.php")?>

   <!--submitform loading-->
   <div class="load-wrapp loadhide">
      <div class="load-9">
         <div class="spinner">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
         </div>
         <p class="h3 text-center text-pur mt-2">Uploading Your Data, Please Wait</p>
         <p class="h6 text-center  text-pur">This Might take some time</p>
      </div>
   </div>
   <!--end-->
   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
      </svg>
   </div>
   <!-- back to top end -->

   <!--popup-->
   <?php if(isset($_GET['course']) && $_GET['course'] =='all' || $_GET['course']=='career'){ ?>
   <div id="ac-wrapper">
      <div id="popup">
         <div class='card'>
            <div class='container'>
               <div class="contact-image">
                  <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
               </div>
               <div class="card-title">
                  <h3 class='card-head'>Help us with your Details</h3>
                  <p>This information is just for our reference to know that you are interested for the course.</p>
               </div>
               <div class="card-body">
                  <form id="contact-form" action="" method="post">
                     <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <input type="hidden" value='<?php $bytes = random_bytes(10); echo bin2hex($bytes); ?>'
                              name='uniquecode'>
                           <div class="single_form">
                              <i class="fa fa-user"></i>
                              <input name="name" type="text" placeholder="Your Fullname" class="form-control">
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="single_form">
                              <i class="fa fa-envelope"></i>
                              <input name="email" type="email" placeholder="Your Email" class="form-control">
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="single_form">
                              <i class="fa fa-phone"></i>
                              <input type="tel" placeholder="Your Mobile Number" minlength='10' maxlength='10'
                                 name='contact' class="form-control">
                           </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-md-6">
                           <div class="single_form">
                              <i class="fa fa-book"></i>
                              <input name="subject" type="text" placeholder="Subject" class="form-control">
                           </div>
                        </div>
                        <div class="col-xxl-12">
                           <div class="single_form">
                              <i class="fa fa-pencil"></i>
                              <textarea name="message" placeholder="Enter Your Message" class="form-control"></textarea>
                           </div>
                        </div>

                        <div class="col-xxl-12 mt-15">
                           <div class="contact__btn text-center">
                              <button type="submit" class="tp-btn btn text-center">Submit</button>
                              <button type="button" class="tp-btn btn text-center clsbtn"
                                 style='background:#fe1706'>Close</button>
                           </div>
                           <!-- <p class="ajax-response"></p> -->
                        </div>
                     </div>
                  </form>
               </div>
            </div>

         </div>

      </div>
   </div>
   <?php } ?>
   <!--popup end-->
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
         data-background="assets/img/slider/2/course.jpg" style="background-position: 100%;">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center p-relative z-index-1">
                     <h3 class="breadcrumb__title">Our Courses</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.php">Home</a></span>
                        <span class="dvdr"><i class="fa-solid fa-angle-right"></i></span>
                        <span>Courses</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!-- course area start-->
      <section class="course__area  grey-bg-4  pb-2">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="section__title-wrapper-2 text-center mb-40">
                     <span class="section__title-pre-2">Our Courses</span>
                     <h3 class="section__title-2">Most Popular Courses</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="course__filter text-center mb-30">
                     <nav>
                        <div class="nav nav-tabs justify-content-center " id="course-tab" role="tablist">
                           <button
                              class="nav-link <?=(isset($_GET['course']) && $_GET['course'] =='all') ? "active" : ""; ?> home-cat"
                              id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab"
                              aria-controls="nav-all" aria-selected="true">All Courses</button>

                           <button
                              class="nav-link <?=(isset($_GET['course']) && $_GET['course'] =='career') ? "active" : ""; ?>"
                              id="nav-trending-tab" data-bs-toggle="tab" data-bs-target="#nav-trending" type="button"
                              role="tab" aria-controls="nav-trending" aria-selected="false">Career Courses</button>

                           <button
                              class="nav-link <?=(isset($_GET['course']) && $_GET['course'] =='modular') ? "active" : ""; ?>"
                              id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button"
                              role="tab" aria-controls="nav-popular" aria-selected="false">Modular Courses</button>

                           <button
                              class="nav-link <?=(isset($_GET['course']) && $_GET['course'] =='personality') ? "active" : ""; ?>"
                              id="nav-featured-tab" data-bs-toggle="tab" data-bs-target="#nav-featured" type="button"
                              role="tab" aria-controls="nav-featured" aria-selected="false">Personality
                              Development</button>

                        </div>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="tab-content course__tab-content" id="course-tabContent">
                     <div
                        class="tab-pane fade <?=(isset($_GET['course']) && $_GET['course'] =='all') ? "active show" : ""; ?>"
                        id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="course__tab-wrapper">
                           <div class="row">
                           <?php
                     $sql=mysqli_query($conn,"select * from course");
                     while($arr=mysqli_fetch_array($sql)){
                     ?>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a>
                                          <img src="assets/img/course/career_course/<?= $arr['image']; ?>" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 blue-bg-2">
                                             <a><?= $arr['main_heading']; ?></a>
                                          </div>

                                       </div>
                                       <h3 class="course__title-2">
                                       <a href=""><?= $arr['heading']; ?></a>
                                       <p><?= substr($arr['short_desc'],0,150); ?></p>

                                       </h3>
                                       <div class="course-home-btn">
                                       <a href="course-details.php?id=<?= $arr['id']; ?>">Know more</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php } ?>
                           </div>

                        </div>
                     </div>
                     <div
                        class="tab-pane fade <?=(isset($_GET['course']) && $_GET['course'] =='career') ? "active show" : ""; ?>"
                        id="nav-trending" role="tabpanel" aria-labelledby="nav-trending-tab">
                        <div class="row">
                           <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a href="">
                                       <img src="assets/img/course/career_course/data-science.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Career Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href="">Data Science</a>
                                       <p>Data is everywhere. In fact, the amount of digital data that exists is growing at a rapid rate, doubling every two years, and </p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="course-details.php">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                           <?php
                     $sql=mysqli_query($conn,"select * from course WHERE main_heading = 'career courses'");
                     while($arr=mysqli_fetch_array($sql)){
                     ?>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a href="">
                                       <img src="assets/img/course/career_course/<?= $arr['image']; ?>" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Career Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href=""><?= $arr['heading']; ?></a>
                                       <p><?= substr($arr['short_desc'],0,150); ?></p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="course-details.php?id=<?= $arr['id']; ?>">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>


                        </div>
                     </div>
                     <div
                        class="tab-pane fade <?=(isset($_GET['course']) && $_GET['course'] =='modular') ? "active show" : ""; ?>"
                        id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                        <div class="row">
                           <?php
                     $sql=mysqli_query($conn,"select * from course WHERE main_heading = 'Modular Courses'");
                     while($arr=mysqli_fetch_array($sql)){
                     ?>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a href=" ">
                                       <img src="assets/img/course/career_course/<?= $arr['image']; ?>" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Modular Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a><?= $arr['heading']; ?></a>
                                       <p><?= substr($arr['short_desc'],0,100); ?></p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="course-details.php?id=<?= $arr['id']; ?>">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php } ?>
                        </div>

                     </div>
                     <div
                        class="tab-pane fade <?=(isset($_GET['course']) && $_GET['course'] =='personality') ? "active show" : ""; ?>"
                        id="nav-featured" role="tabpanel" aria-labelledby="nav-featured-tab">
                        <div class="row">
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a href=" ">
                                       <img src="assets/img/course/career_course/self_enhance.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Personality Development</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href=" ">Self Enhancement</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="course-details.php">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a href=" ">
                                       <img src="assets/img/course/career_course/etiquettes.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Personality Development</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href=" ">Professional etiquettes</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="course-details.php">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a href=" ">
                                       <img src="assets/img/course/career_course/communication.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Personality Development</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href=" ">Exclusive communication </a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="course-details.php">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>

                     </div>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- course area end -->

      <!-- course enroll popup end -->

      <section class="home-form contact_form_2 pb-80">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-12">
                  <div class="section__title-wrapper-2 mb-30 text-center">
                     <h3 class="section__title-2">Enquiry Form</h3>
                  </div>
               </div>
               <div class="col-lg-6 contanct_form_3">
                  <div class="contact__form">
                     <form id="contact-form" action="" method="post">
                        <div class="row">
                           <div class="col-6">
                              <div class="single_form">
                                 <i class="fa fa-user"></i>
                                 <input name="name" type="text" placeholder="Your Fullname" class="form-control">
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-md-6">
                              <div class="single_form">
                                 <i class="fa fa-envelope"></i>
                                 <input name="email" type="email" placeholder="Your Email" class="form-control">
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-md-6">
                              <div class="single_form">
                                 <i class="fa fa-phone"></i>
                                 <input name="contact" type="contact" placeholder="Your Phone number"
                                    class="form-control">
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-md-6">
                              <div class="single_form">
                                 <i class="fa fa-book"></i>
                                 <select name='subject' class="form-control form_select dropdown-toggle"
                                    onchange="courselect(this.value)" required=''>
                                    <option disabled selected>Select the Course</option>
                                    <option value="Career Courses">Career Courses</option>
                                    <option value="Modular Courses">Modular Courses</option>
                                    <option value="Personality Development">Personality Development</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-md-6">
                              <div class="single_form">
                                 <i class="fa fa-graduation-cap"></i>
                                 <select class="form-control form_select" name='course' id="courrses" required=''>
                                    <option disabled selected>Select the Course</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-md-6">
                              <div class="single_form">
                                 <i class="fa fa-book"></i>
                                 <select name='subject' class="form-control form_select dropdown-toggle"
                                    onchange="courselect(this.value)" required=''>
                                    <option disabled selected>Select Center</option>
                                    <option value="Career Courses">Kharghar</option>
                                    <option value="Modular Courses">Vashi</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="single_form">
                                 <i class="fa fa-pencil"></i>
                                 <textarea name="message" placeholder="Enter Your Message"
                                    class="form-control"></textarea>
                              </div>
                           </div>
                           <input type="hidden" value='<?php $bytes = random_bytes(10); echo bin2hex($bytes); ?>'
                              name='uniquecode' id='uniquecode'>
                           <div class="col-xxl-12 mt-15 mb-15">
                              <div class="contact__btn text-center">
                                 <button type="submit" class="tp-btn btn">Submit</button>
                              </div>
                              <!-- <p class="ajax-response"></p> -->
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <!-- footer area start -->
   <?php include_once("footer.php")?>
   <!-- footer area end -->

   <!-- JS here -->
   <?php include_once("foot.php")?>

</body>

</html>