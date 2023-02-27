<!doctype html>
<html class="no-js" lang="zxx">
<?php include_once("head.php")?>

<body>
   <?php include_once("preloader.php")?>

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
      </svg>
   </div>

   <!-- back to top end -->

   <!-- header area start -->
   <?php include_once("whatsapp.php")?>

   <header>
      <?php include_once("header.php")?>

   </header>
   <!-- header area end -->

   <!-- offcanvas area start -->
   <?php include_once("mobile-menu.php")?>
   <!-- offcanvas area end -->
   <div class="body-overlay"></div>
   <!-- offcanvas area end -->

   <main>

      <!-- slider area start -->
      <div id="carouselExampleIndicators" class="carousel slide slider__height-2" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
               aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
               aria-label="Slide 2"></button>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item transbox active">
               <div class="background">
                  <img src="assets\img\slider\2\01.jpg" alt="first slide" class='sliderImg'>
                  <div class="carousel-caption d-md-block">
                     <div class="row align-items-center ">
                        <div class="col-12">
                           <div class="slider__content-2">
                              <span class="text-white top_head">Your Integrated Training Solutions Partner</span>
                              <h3 class="slider__title-2 text-white topright">Join Today For Better Tomorrow</h3>

                              <a href="<?php echo "course.php?course=all";?>" class="tp-btn-green top_head">Explore
                                 Courses</a>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item transbox">
               <div class="background">
                  <img src="assets\img\slider\2\02.jpg" class='sliderImg' alt="...">
                  <div class="carousel-caption d-md-block">
                     <div class="row align-items-center ">
                        <div class="col-12">
                           <div class="slider__content-2">
                              <span class="text-white top_head">Your Integrated Training Solutions Partner</span>
                              <h3 class="slider__title-2 text-white topright">All India Institute of Integrated
                                 Technical
                                 Studies</h3>

                              <a href="<?php echo "course.php?course=all";?>" class="tp-btn-green top_head">Explore
                                 Courses</a>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>

      <!-- slider area end -->
      <section class="home-about" data-aos="fade-up">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-10">
                  <div class="about-home-content tetx-center">
                     <div class="section__title-wrapper-2">

                        <h3 class="section__title-2 section__title-2-30">About AIIITS</h3>
                     </div>
                     <div class="about-home-details">
                        <p>All India Institute of Integrated Technical Studies (AIIITS) is a flagship brand of Pinnacle
                           Infotech.

                           Established in the year 2012, Pinnacle Infotech is a leading Information Technology (IT)
                           training provider. Initially we provided IT training with the name of IIHT-Kharghar and
                           IIHT-Vashi, we provide industry relevant
                           specialised training services in the niche areas of IT, now we are
                           providing training in IT and for other industry
                           with the name of AIIITS.
                        </p>
                        <div class="about-home-btn">
                           <a href="about.php">Read more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- category area start -->
      <section class="category__area" data-aos="fade-up">
         <div class="container">
            <div class="row">
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="category__wrapper">
                     <div class="section__title-wrapper-2">

                        <h3 class="section__title-2 section__title-2-30">Explore our Popular Courses</h3>
                     </div>
                     <!-- <p>Look into yourself, get something in return as your achievement</p> -->

                  </div>
               </div>
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="category__item-wrapper">
                     <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon">
                                 <a>
                                    <img src="assets/img/icon/home/Data_Science.svg" alt="">
                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>Data Science</a>
                                 </h4>

                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon pink-bg">
                                 <a>
                                    <img src="assets/img/icon/home/Software_Development.svg" alt="">
                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>Software Development</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon green-bg">
                                 <a>
                                    <img src="assets/img/icon/home/App_Development.svg" alt="">
                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>App Development</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon orange-bg">
                                 <a>
                                    <img src="assets/img/icon/home/AWS.svg" alt="">
                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>AWS</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon">
                                 <a href="">
                                    <img src="assets/img/icon/home/Red_Hat.svg" alt="">
                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>Red Hat</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon purple-bg">
                                 <a>
                                    <img src="assets/img/icon/home/Python.svg" alt="">
                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>Python</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon green-bg-2">
                                 <a>
                                    <img src="assets/img/icon/home/Self_Enhancement.svg" alt="">
                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>Self Enhancement</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon yellow-bg">
                                 <a>
                                    <img src="assets/img/icon/home/Communication.svg" alt="">

                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>Communication</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon violet-bg">
                                 <a>
                                    <img src="assets/img/icon/home/Professional_Etiquettes.svg" alt="">

                                 </a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title">
                                    <a>Professional Etiquettes</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                           <div class="category__item text-center mb-45">
                              <div class="category__icon add">
                                 <a href="<?php echo "course.php?course=all";?>"><img
                                       src="assets\img\slider\2\readMore.png" alt="" style='height:20px'></a>
                              </div>
                              <div class="category__content">
                                 <h4 class="category__title add">
                                    <a href="<?php echo "course.php?course=all";?>">Know More</a>
                                 </h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- category area end -->
      <!-- counter area start -->
      <section class="counter__area" data-aos="fade-left">
         <div class="container">
            <div class="counter__inner">
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="counter__item d-flex align-items-start counter__item-border">
                        <div class="counter__icon mr-15">
                           <svg width="38" height="39" viewBox="0 0 38 39" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M37 19.1667C37 9.23075 28.936 1.16675 19 1.16675C9.064 1.16675 1 9.23075 1 19.1667C1 29.1027 9.064 37.1667 19 37.1667"
                                 stroke="#f8f8fb" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M11.8 2.9668H13.6C10.09 13.4788 10.09 24.8548 13.6 35.3668H11.8" stroke="#f8f8fb"
                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M24.4 2.9668C26.146 8.2228 27.028 13.6948 27.028 19.1668" stroke="#f8f8fb"
                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M2.80005 26.3667V24.5667C8.05605 26.3127 13.528 27.1947 19 27.1947"
                                 stroke="#f8f8fb" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M2.80005 13.7665C13.312 10.2565 24.688 10.2565 35.2001 13.7665" stroke="#f8f8fb"
                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path class="search"
                                 d="M30.16 36.0867C33.3412 36.0867 35.92 33.5078 35.92 30.3267C35.92 27.1455 33.3412 24.5667 30.16 24.5667C26.9789 24.5667 24.4 27.1455 24.4 30.3267C24.4 33.5078 26.9789 36.0867 30.16 36.0867Z"
                                 stroke="#3D6CE7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              <path class="search" d="M37.0001 37.1667L35.2001 35.3667" stroke="#f8f8fb"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </div>
                        <div class="counter__content">
                           <h4 class='text-white'><span class="counter">10</span>+</h4>
                           <p class='text-white'>Years of Educational Experience</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="counter__item d-flex align-items-start counter__item-border">
                        <div class="counter__icon mr-15">
                           <svg width="50" height="38" viewBox="0 0 50 38" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.6984 27.5676V25.3757H16.1609V27.5676H14.6984Z" fill="#f8f8fb"
                                 stroke="#f8f8fb" stroke-width="0.1" />
                              <path d="M18.9289 27.5676V25.3757H20.3914V27.5676H18.9289Z" fill="#f8f8fb"
                                 stroke="#f8f8fb" stroke-width="0.1" />
                              <path
                                 d="M17.5234 25.9512C14.1936 25.9512 11.7765 23.4538 11.7765 20.0065V19.0436H13.239V20.0065C13.239 21.2677 13.6787 22.3416 14.436 23.1004C15.1932 23.8591 16.2649 24.2997 17.5234 24.2997C18.7821 24.2997 19.8538 23.8591 20.611 23.1004C21.3682 22.3416 21.8078 21.2677 21.8078 20.0065V14.6279H23.2703V20.006C23.2707 23.4538 20.8532 25.9512 17.5234 25.9512Z"
                                 fill="#f8f8fb" stroke="#f8f8fb" stroke-width="0.1" />
                              <path
                                 d="M15.2448 8.89414L25.4444 8.89327V12.1213C25.4444 14.2014 23.9423 15.8832 22.1085 15.8832H13.9511C13.5654 15.8832 13.262 16.2371 13.262 16.6588V23.2591L9.42375 18.0384V13.3221C9.42375 11.6064 10.6626 10.221 12.1734 10.221H12.6784H12.7032L12.7182 10.2013C13.3495 9.37396 14.2661 8.89414 15.2448 8.89414ZM10.8859 17.4764H10.911L11.7096 18.5626L11.7999 18.6854V18.533V16.6588C11.7999 15.3145 12.7704 14.2316 13.9515 14.2316H22.1085C23.1468 14.2316 23.9816 13.2789 23.9816 12.1213V10.5948V10.5448H23.9316L15.2445 10.5448L15.2444 10.5448C14.6109 10.5457 14.0256 10.9051 13.6774 11.5015C13.6774 11.5015 13.6774 11.5015 13.6774 11.5015L13.4607 11.8725H12.173C11.4577 11.8725 10.8859 12.5288 10.8859 13.3221V17.4264V17.4764Z"
                                 fill="#f8f8fb" stroke="#f8f8fb" stroke-width="0.1" />
                              <path d="M42.9272 32.716V21.0804H44.3897V32.716H42.9272Z" fill="#f8f8fb" stroke="#f8f8fb"
                                 stroke-width="0.1" />
                              <path
                                 d="M7.07152 32.7159H5.60862V6.08232C5.60862 4.82863 6.51389 3.81892 7.61448 3.81892H26.0965V5.4705H7.61487C7.3095 5.4705 7.07152 5.75095 7.07152 6.08232V32.7159Z"
                                 fill="#f8f8fb" stroke="#f8f8fb" stroke-width="0.1" />
                              <path
                                 d="M10.2844 32.0648H8.82229V30.104C8.82229 28.2623 10.2812 26.7664 12.0711 26.7664H23.1184C24.9083 26.7664 26.3668 28.2627 26.3668 30.104V31.5266H24.9043V30.104C24.9043 29.1711 24.1002 28.418 23.1184 28.418H12.0707C11.0885 28.418 10.2844 29.1715 10.2844 30.104V32.0648Z"
                                 fill="#f8f8fb" stroke="#f8f8fb" stroke-width="0.1" />
                              <path
                                 d="M0.34435 35.8766L0.344278 35.8765L0.05 35.6292V31.807H49.95V35.6292L49.6558 35.8773C49.5603 35.9573 49.0814 36.3514 48.4465 36.7253C47.81 37.1002 47.0245 37.4499 46.3141 37.4499H3.68516C2.9745 37.4499 2.18909 37.1002 1.55278 36.7252C0.918101 36.3512 0.439536 35.9568 0.34435 35.8766ZM1.5125 34.7592V34.7844L1.5328 34.7994C1.84194 35.0277 2.22749 35.2768 2.61064 35.469C2.99207 35.6603 3.3778 35.7988 3.68516 35.7988H46.3145C46.6216 35.7988 47.0073 35.6603 47.3888 35.469C47.772 35.2768 48.1578 35.0277 48.4676 34.7994L48.4879 34.7844V34.7592V33.509V33.459H48.4379H1.5625H1.5125V33.509V34.7592Z"
                                 fill="#f8f8fb" stroke="#f8f8fb" stroke-width="0.1" />
                              <path class="video"
                                 d="M31.8141 23.2115V19.0489V18.9989H31.7641H30.2215C29.1088 18.9989 28.1863 17.876 28.1863 16.4732V2.57745C28.1863 1.17324 29.1089 0.05 30.2215 0.05H45.3773C46.4916 0.05 47.4164 1.17335 47.4164 2.57745V16.4732C47.4164 17.8759 46.492 18.9989 45.3773 18.9989H36.2426H36.2225L36.208 19.0127L31.8141 23.2115ZM30.1715 1.70158V1.70539C30.0271 1.72498 29.9017 1.82807 29.8117 1.97022C29.7108 2.12959 29.6488 2.34555 29.6488 2.57789V16.4732C29.6488 16.7051 29.7108 16.9206 29.8117 17.0797C29.912 17.2377 30.0562 17.3473 30.2215 17.3473H33.2766V19.5336V19.6506L33.3611 19.5698L35.6865 17.3473H45.3769C45.543 17.3473 45.6882 17.2379 45.7893 17.0798C45.891 16.9208 45.9535 16.7052 45.9535 16.4732V2.57745C45.9535 2.34526 45.8911 2.12925 45.7895 1.96982C45.6885 1.81136 45.5433 1.70158 45.3769 1.70158H30.2215H30.1715Z"
                                 fill="#f8f8fb" stroke="#f8f8fb" stroke-width="0.1" />
                              <path class="video"
                                 d="M36.2705 6.36712L36.1933 6.3168V6.40902V11.6887V11.7809L36.2705 11.7306L40.3256 9.09143L40.39 9.04954L40.3256 9.00763L36.2705 6.36712ZM43.318 9.04952L34.7308 14.6386V3.45831L43.318 9.04952Z"
                                 fill="#f8f8fb" stroke="#f8f8fb" stroke-width="0.1" />
                           </svg>
                        </div>
                        <div class="counter__content">
                           <h4 class='text-white'><span class="counter">10</span>K</h4>
                           <p class='text-white'>Learners Enrolled in AIIITS Courses</p>
                        </div>

                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="counter__item d-flex align-items-start counter__item-border">
                        <div class="counter__icon mr-15">
                           <svg width="44" height="41" viewBox="0 0 44 41" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M23.3422 18.3518C23.5378 18.3322 23.7725 18.3322 23.9877 18.3518C28.6435 18.1953 32.3408 14.3806 32.3408 9.68568C32.3408 4.89291 28.4675 1 23.6551 1C18.8624 1 14.9695 4.89291 14.9695 9.68568C14.989 14.3806 18.6863 18.1953 23.3422 18.3518Z"
                                 stroke="#f8f8fb" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                 d="M10.8983 4.91248C7.10324 4.91248 4.05152 7.98376 4.05152 11.7593C4.05152 15.4566 6.98587 18.4692 10.644 18.6061C10.8005 18.5866 10.9766 18.5866 11.1526 18.6061"
                                 stroke="#f8f8fb" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                 d="M33.1235 25.5703C37.8576 28.7394 37.8576 33.9039 33.1235 37.0534C27.7438 40.6529 18.9212 40.6529 13.5416 37.0534C8.80748 33.8843 8.80748 28.7198 13.5416 25.5703C18.9016 21.9904 27.7243 21.9904 33.1235 25.5703Z"
                                 stroke="#f8f8fb" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                 d="M7.12298 36.2123C5.71449 35.9188 4.38426 35.3515 3.28876 34.5103C0.237038 32.2215 0.237038 28.446 3.28876 26.1572C4.36469 25.3356 5.67537 24.7879 7.06429 24.4749"
                                 stroke="#f8f8fb" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                              <path class="star"
                                 d="M35.8077 22.6875L37.3377 25.7729C37.5464 26.2024 38.1027 26.6143 38.5722 26.6932L41.3454 27.1578C43.1188 27.4558 43.5361 28.7531 42.2582 30.0328L40.1022 32.2066C39.7371 32.5747 39.5372 33.2847 39.6502 33.7931L40.2674 36.484C40.7542 38.614 39.6328 39.4379 37.7637 38.3247L35.1644 36.7733C34.6949 36.4928 33.9212 36.4928 33.4431 36.7733L30.8437 38.3247C28.9834 39.4379 27.8532 38.6052 28.34 36.484L28.9573 33.7931C29.0703 33.2847 28.8703 32.5747 28.5052 32.2066L26.3492 30.0328C25.08 28.7531 25.4886 27.4558 27.2621 27.1578L30.0353 26.6932C30.496 26.6143 31.0524 26.2024 31.261 25.7729L32.7911 22.6875C33.6256 21.0133 34.9818 21.0133 35.8077 22.6875Z"
                                 fill="#F5F6F8" stroke="#f8f8fb" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </div>
                        <div class="counter__content">
                           <h4 class='text-white'><span class="counter">05</span>k</h4>
                           <p class='text-white'>Participants Successfully Placed.</p>
                        </div>

                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="counter__item d-flex align-items-start" style='position:absolute'>
                        <div class="counter__icon mr-15">
                           <svg x="0px" y="0px" viewBox="0 0 67.4 70.6" xml:space="preserve" fill='#f8f8fb'>
                              <path class="st0" d="M59.7,25.4c0,0.1,0.4,2.8,6.4,12.2c0.6,0.8,0.8,1.8,0.6,2.8c-0.1,0.5-0.4,1-0.7,1.4c-0.3,0.4-0.8,0.8-1.2,1
                             c-1.7,0.9-3.4,1.8-5.2,2.5c0.4,3.7,0.4,7.4,0,11.1c-0.7,3.7-7.1,4.3-10.8,4.3c-0.3,0-0.7,0-1,0.1c-0.3,0.1-0.6,0.3-0.8,0.5
                             c-0.2,0.2-0.4,0.5-0.5,0.8c-0.1,0.3-0.2,0.6-0.1,1v5c0,0.1,0,0.3-0.1,0.4c0,0.1-0.1,0.2-0.2,0.4c-0.1,0.1-0.2,0.2-0.3,0.2
                             c-0.1,0.1-0.3,0.1-0.4,0.1s-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.4c0-0.1-0.1-0.3-0.1-0.4v-5
                             c0-0.6,0.1-1.2,0.3-1.8c0.2-0.6,0.6-1.1,1-1.5c0.4-0.4,1-0.7,1.5-0.9c0.6-0.2,1.2-0.3,1.8-0.2c4.9,0,8.4-1,8.7-2.6
                             c0.7-3.6-0.1-10.8-0.1-11.3c0,0,0,0,0,0c0-0.2,0-0.5,0.1-0.7c0.1-0.2,0.3-0.3,0.5-0.4c1.9-0.8,3.8-1.7,5.6-2.7
                             c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.2,0.3-0.4,0.4-0.6c0.1-0.4,0-0.9-0.3-1.2c-6.4-10.1-6.8-12.9-6.8-13.2C55.1,4.4,38,2.7,32.8,2.7
                             c-0.5,0-0.9,0-1.2,0l0,0c-0.2,0-0.4,0-0.5,0c-3.2,0-15.6,0.7-21.9,10.1h11c0.8,0,1.6,0.2,2.3,0.6c0.7,0.4,1.3,0.9,1.8,1.5
                             c0.5-0.6,1.1-1.2,1.8-1.5c0.7-0.4,1.5-0.6,2.3-0.6h18c0.3,0,0.5,0.1,0.7,0.3c0.2,0.2,0.3,0.5,0.3,0.7V52c0,0.1,0,0.3-0.1,0.4
                             c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2c-0.1,0.1-0.3,0.1-0.4,0.1h-18c-0.8,0-1.6,0.3-2.2,0.9s-0.9,1.4-0.9,2.2
                             c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.5,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.8-0.3-1.6-0.9-2.2
                             c-0.6-0.6-1.4-0.9-2.2-0.9h-4.5c0,0,0,0,0,0.1c0,0,0.1,0.1,0.1,0.1c2.2,4.8,2.3,14.5,2.3,14.9c0,0.3-0.1,0.5-0.3,0.7
                             c-0.2,0.2-0.5,0.3-0.7,0.3h0c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7l0,0c0-0.2-0.1-9.7-2.1-14c-0.2-0.4-0.4-0.7-0.6-1.1
                             H2.2c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7V13.9c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h4.5
                             C13.5,1.2,28.8,0.7,31,0.7l0.5,0c0.3,0,0.8,0,1.3,0C38.4,0.7,57,2.5,59.7,25.4z M26.2,15.8c-0.6,0.6-0.9,1.4-0.9,2.2v34
                             c0.9-0.7,2-1,3.1-1h17V14.9h-17C27.6,14.9,26.8,15.2,26.2,15.8z M22.4,15.8c-0.6-0.6-1.4-0.9-2.2-0.9h-17V51h17c1.1,0,2.2,0.4,3.1,1
                             V18C23.3,17.2,22.9,16.4,22.4,15.8z M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7
                             c-0.2-0.2-0.5-0.3-0.7-0.3H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z
                              M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z M18.8,37.9H7.7c-0.1,0-0.3,0-0.4-0.1
                             c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3
                             c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3
                             c0.1,0.1,0.1,0.3,0.1,0.4c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C19,37.9,18.9,37.9,18.8,37.9z
                              M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8z M40.9,22.2H29.8
                             c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.5-0.3-0.7c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.3,0.7-0.3h11.1c0.3,0,0.5,0.1,0.7,0.3
                             s0.3,0.5,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7C41.5,22.1,41.2,22.2,40.9,22.2z M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3
                             c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7
                             s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z M40.9,37.9H29.8c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.2-0.1-0.3-0.2
                             c-0.1-0.1-0.2-0.2-0.2-0.3c-0.1-0.1-0.1-0.3-0.1-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.1,0.1-0.2,0.2-0.3c0.1-0.1,0.2-0.2,0.3-0.2
                             c0.1-0.1,0.3-0.1,0.4-0.1h11.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.2,0.2,0.3c0.1,0.1,0.1,0.3,0.1,0.4
                             c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2C41.2,37.9,41,37.9,40.9,37.9z M29.8,45.8h5.5
                             c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5c-0.3,0-0.5,0.1-0.7,0.3
                             c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8z" />
                              <path class="st1"
                                 d="M7.7,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                             H7.7c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C7.2,22.1,7.4,22.2,7.7,22.2z" />
                              <path class="st1"
                                 d="M7.7,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7C19.3,28.1,19,28,18.8,28H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,30,7.4,30.1,7.7,30.1z" />
                              <path class="st1" d="M7.7,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                             c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H7.7c-0.1,0-0.3,0-0.4,0.1
                             C7.2,36,7.1,36.1,7,36.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                             c0.1,0.1,0.2,0.2,0.3,0.2C7.4,37.9,7.6,37.9,7.7,37.9L7.7,37.9z" />
                              <path class="st1"
                                 d="M7.7,45.8h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3H7.7
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C7.1,45.7,7.4,45.8,7.7,45.8L7.7,45.8z" />
                              <path class="st1"
                                 d="M29.8,22.2h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7s-0.5-0.3-0.7-0.3H29.8
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7C29.3,22.1,29.6,22.2,29.8,22.2L29.8,22.2z" />
                              <path class="st1"
                                 d="M29.8,30.1h11.1c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3
                             H29.8c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,30,29.6,30.1,29.8,30.1z" />
                              <path class="st1" d="M29.8,37.9h11.1c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.1,0.1-0.3,0.1-0.4
                             c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1-0.1-0.3-0.1-0.4-0.1H29.8c-0.1,0-0.3,0-0.4,0.1
                             c-0.1,0.1-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.1,0.2,0.2,0.3
                             c0.1,0.1,0.2,0.2,0.3,0.2C29.6,37.9,29.7,37.9,29.8,37.9L29.8,37.9z" />
                              <path class="st1"
                                 d="M29.8,45.8h5.5c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7c-0.2-0.2-0.5-0.3-0.7-0.3h-5.5
                             c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7s0.1,0.5,0.3,0.7C29.3,45.7,29.6,45.8,29.8,45.8L29.8,45.8z" />
                           </svg>
                        </div>
                        <div class="counter__content">
                           <h4 class='text-white'><span class="counter">10</span>+</h4>
                           <p class='text-white'>Qualified Teachers and Experts</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- counter area end -->

      <!-- course area start -->
      <section class="course__area grey-bg-4 " data-aos="fade-up">
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
                           <button class="nav-link active home-cat" id="nav-all-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all"
                              aria-selected="true">All Courses</button>

                           <button class="nav-link" id="nav-trending-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-trending" type="button" role="tab" aria-controls="nav-trending"
                              aria-selected="false">Career Courses</button>

                           <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular"
                              aria-selected="false">Modular Courses</button>

                           <button class="nav-link" id="nav-featured-tab" data-bs-toggle="tab"
                              data-bs-target="#nav-featured" type="button" role="tab" aria-controls="nav-featured"
                              aria-selected="false">Personality Development</button>

                        </div>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="tab-content course__tab-content" id="course-tabContent">
                     <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="course__tab-wrapper">
                           <div class="row">
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a href="">
                                          <img src="assets/img/course/career_course/software_development.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 blue-bg-2">
                                             <a>Career Courses</a>
                                          </div>

                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="">Software Development</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                                             tempor incididunt ut labore</p>
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
                                       <a>
                                          <img src="assets/img/course/career_course/app_developement.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2  blue-bg-2">
                                             <a>Career Courses</a>

                                          </div>

                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="">App Development</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                                             tempor incididunt ut labore</p>

                                       </h3>
                                       <div class="course-home-btn">
                                          <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a>
                                          <img src="assets/img/course/career_course/python.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2  blue-bg-2">
                                             <a>Modular Courses</a>
                                          </div>

                                       </div>
                                       <h3 class="course__title-2">
                                          <a>Python Certification</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                                             tempor incididunt ut labore</p>

                                       </h3>
                                       <div class="course-home-btn">
                                          <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a>
                                          <img src="assets/img/course/career_course/red-hat-linux.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2  blue-bg-2">
                                             <a>Modular Courses</a>
                                          </div>

                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="">Red Hat Linux Training</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                                             tempor incididunt ut labore</p>
                                       </h3>
                                       <div class="course-home-btn">
                                          <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a>
                                          <img src="assets/img/course/career_course/self_enhance.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2  blue-bg-2">
                                             <a>Personality Development</a>
                                          </div>

                                       </div>
                                       <h3 class="course__title-2">
                                          <a>Self Enhancement</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                                             tempor incididunt ut labore</p>

                                       </h3>
                                       <div class="course-home-btn">
                                          <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a>
                                          <img src="assets/img/course/career_course/etiquettes.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2  blue-bg-2">
                                             <a>Personality Development</a>
                                          </div>

                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="">Professional etiquettes</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                                             tempor incididunt ut labore</p>
                                       </h3>
                                       <div class="course-home-btn">
                                          <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-trending" role="tabpanel" aria-labelledby="nav-trending-tab">
                        <div class="row">
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/data-science.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2  blue-bg-2">
                                          <a>Career Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href="">Data Science</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/software_development.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Career Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href="">Software Development</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/app_developement.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 purple-bg">
                                          <a>Career Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href="">App Development</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>

                                 </div>
                              </div>
                           </div>

                        </div>

                     </div>
                     <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                        <div class="row">
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/aws.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2  blue-bg-2">
                                          <a>Modular Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a>AWS Solutions</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/python.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 yellow-bg">
                                          <a>Modular Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a>Python Certification</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/red-hat-linux.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 blue-bg-2">
                                          <a>Modular Courses</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a>Red Hat Linux Training</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>

                     </div>
                     <div class="tab-pane fade" id="nav-featured" role="tabpanel" aria-labelledby="nav-featured-tab">
                        <div class="row">
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/self_enhance.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2  blue-bg-2">
                                          <a>Personality Development</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a>Self Enhancement</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a>
                                       <img src="assets/img/course/career_course/etiquettes.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 violet-bg">
                                          <a>Personality Development</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a>Professional etiquettes</a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                              <div class="course__item-2 transition-3 white-bg mb-30 fix">
                                 <div class="course__thumb-2 w-img fix">
                                    <a href="">
                                       <img src="assets/img/course/career_course/communication.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="course__content-2">
                                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                                       <div class="course__tag-2 yellow-bg">
                                          <a>Personality Development</a>
                                       </div>

                                    </div>
                                    <h3 class="course__title-2">
                                       <a href="#">Exclusive communication </a>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                          incididunt ut labore</p>

                                    </h3>
                                    <div class="course-home-btn">
                                       <a href="<?php echo "course.php?course=all";?>">Know more</a>
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

      <!-- research area start -->
      <section class="research__area">
         <div class="container">
            <div class="row">
               <div class="col-xxl-6 col-xl-6 col-lg-6" data-aos="fade-up-right">
                  <div class="research__wrapper-2">
                     <div class="section__title-wrapper-2">
                        <span class="section__title-pre-2">Discover Research</span>
                        <h3 class="section__title-2">More than just Research</h3>
                     </div>
                     <p>With a rich training experience of over a decade AIIITS has some unique and extraordinary value
                        propositions to offer. Not only do our team of qualified and seasoned faculty offer the best
                        learning experience but we also create an environment conducive for enhanced learning and for
                        accomplishment of professional goals. Listed below are some of reasons that give AIIITS a
                        distinctive advantage to in building the career of participants:</p>


                     <div class="research__download">
                        <div class="research__download-bg include-bg"
                           data-background="assets/img/research/2/research-bg.jpg"></div>


                     </div>
                  </div>
               </div>
               <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6" data-aos="fade-up-left">
                  <div class="research__features-wrapper ">
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span>
                              <img src="assets/img/icon/learning/communication.png" alt="">
                           </span>
                        </div>
                        <div class="research__features-content">

                           <p>We provide soft skill training as a part of our career course curriculum.</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="yellow-bg">
                              <img src="assets/img/icon/learning/custom.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>Unique Platform which helps enhance skill sets and sharpen our students for career
                              opportunities.</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="green-bg">
                              <img src="assets/img/icon/learning/guidance.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>We expose our students to machine test and interview mock sessions to improve the success
                              rate in interviews.</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="green-bg">
                              <img src="assets/img/icon/learning/practical.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>We have corporate experts who train our students according to the industrial projects and
                              requirements in companies.</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="green-bg">
                              <img src="assets/img/icon/learning/participant.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>We have association with more than 500 companies who approaches us for their requirements
                              of skilled work force.</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="green-bg">
                              <img src="assets/img/icon/learning/job.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>100 % Placement assistance Service.</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="yellow-bg">
                              <img src="assets/img/icon/learning/custom.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>We help develop programming skills by encouraging to work on projects.</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="green-bg">
                              <img src="assets/img/icon/learning/university.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>We offer university accredited skills development programmes</p>
                        </div>
                     </div>
                     <div class="research__features-item d-sm-flex align-items-start mb-40">
                        <div class="research__features-icon mr-25">
                           <span class="green-bg">
                              <img src="assets/img/icon/learning/counsel.png" alt="">

                           </span>
                        </div>
                        <div class="research__features-content">
                           <p>We have successfully completed 10 years and successfully provided relevant trainings on
                              Hardware, Networking, Servers, Virtualization technologies, VMware, Citrix, Cloud
                              Computing, Amazon web service, Microsoft Azure, DevOps, Software Development, DotNet,
                              Java, Database, Mobile Application development, Data Analytics, Machine Learning,
                              Artificial Intelligence, Hadoop, Python, R, statistics, data Visualization, Tableau and
                              other skill sets as and when requirement comes. After completion of these trainings we
                              have provided placements to fresh graduates or experienced professionals. Since inception
                              we have placed more than 500 fresh as well as experienced students. Our team always take
                              this as a challenge and committed in doing so in future.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- research area end -->



      <!-- testimonial area start -->
      <section class="testimonial__area testimonial fix" data-aos="fade-up">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="section__title-wrapper-2 mb-40 text-center" style='position:relative'>

                     <span class="section__title-pre-2 text-white">Testimonials</span>
                     <h3 class="section__title-2 text-white">What our Students Say.</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div id="testimonial4"
                     class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                     data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                     <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonial4" data-bs-slide-to="0"
                           class="active iconnext" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonial4" class='iconnext' data-bs-slide-to="1"
                           aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonial4" data-bs-slide-to="2" class='iconnext'
                           aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#testimonial4" data-bs-slide-to="3" class='iconnext'
                           aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#testimonial4" data-bs-slide-to="4" class='iconnext'
                           aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#testimonial4" data-bs-slide-to="5" class='iconnext'
                           aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#testimonial4" data-bs-slide-to="6" class='iconnext'
                           aria-label="Slide 7"></button>
                     </div>
                     <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                           <div class="testimonial4_slide">
                           <img src="assets/img/testimonial/ankit.png" class="img-circle img-responsive" />
                              <p class=''> "I've enrolled for the Diploma in Python course here.It's been a couple of months into the course and it has been very good so far. The teachers are very cooperative and give personal attention to all students. Very eager to solve our confusions or give us information about the IT industry."</p>
                              <h4 class=''>Ankit Singh</h4>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                              <p class=''>"Joined this Institute for cloud computing course. It's been a couple of months
                                 into the course and it has been very good so far. As our session is going on the
                                 faculty over here support and help with our doubts at any time. With an excellent
                                 support staff. Overall good place to learn new skills."</p>
                              <h4 class=''>Shubham bagave</h4>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                              <p class=''>
                                " Course name - Cloud associate
                                 It is the best institute to learn any hardware/ networking related courses.
                                 The faculty here is very friendly and takes out the best output from the
                                 students.Knowledge students get here is very useful for them in their professional
                                 life.
                                 Overall it's a best Institute for learning."</p>
                              <h4 class=''>Aditya Kadam</h4>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <img src="assets/img/testimonial/mitesh.png" class="img-circle img-responsive" />
                              <p class=''>
                                " Completely satisfied with the teaching as well as non teaching staff. I am pursuing
                                 DATA SCIENCE course here. Academic coordinators are doing their job in the best way
                                 possible. Special thanks for your strictness due to which we follow each session on
                                 alert mode. The team and staff is very co operative. They solve our problems as much as
                                 they can and also the class ambience is much good."
                                 Thanking you again here!!</p>
                              <h4 class=''>Mitesh Mohokar</h4>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <img src="assets/img/testimonial/gaurav.png" class="img-circle img-responsive" />
                              <p class=''>
                                " If you want to pursue a career in cloud computing,Pinnacle Infotech is the best option
                                 without any second doubt. The office team is polite and co-operative, they assign
                                 batches according to your flexibility. Trainers have in depth knowledge and give proper
                                 guidance. Regular mocks groom you for professional career and improve communication
                                 skills. I got placed in very good company. "</p>
                              <h4 class=''>Gaurav Kulkarni fun</h4>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                              <p class=''>
                                " I have joined cloud architect course. It is very useful to me for getting knowledge
                                 about cloud computing. All the trainers are very helpful and supportive. It is very
                                 good institute. I enjoyed friendly and caring environment. Trainers are experienced and
                                 knowledgeable"</p>
                              <h4 class=''>Karan Naik</h4>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                              <p class=''>
                                " If you want to pursue a career in IT this institute is the best option without any
                                 second doubt. The office team is polite and co-operative, Trainers have in depth
                                 knowledge and give proper guidance. Regular mocks groom you for professional career and
                                 improve communication skills.i have joined for
                                 Web development course."</p>
                              <h4 class=''>Aniket Shirke</h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--student video-->
               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div id="testimonial5"
                     class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                     data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                     <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonial5" data-bs-slide-to="0"
                           class="active iconnext1" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="1"
                           aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="2"
                           aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="3"
                           aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="4"
                           aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="5"
                           aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="6"
                           aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="7"
                           aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="8"
                           aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="9"
                           aria-label="Slide 10"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="10"
                           aria-label="Slide 11"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="11"
                           aria-label="Slide 12"></button>
                        <button type="button" data-bs-target="#testimonial5" class='iconnext1' data-bs-slide-to="12"
                           aria-label="Slide 13"></button>

                     </div>
                     <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/HvK18aCu-1o?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 frameborder="0" allowfullscreen></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/csLLwaSUrWI?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/kR-G8IwzdVU?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/DHqGEoRN3Zw?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/z7oZxIFm6GI?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/jIV9xI-tQ5Q?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/cJlYQHbMuTw?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/-uN1OirfGR4?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/HvK18aCu-1o?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/8k2BdUa-d4k?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/SwcLXGLlxg4?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/QHWw39Zbxw4?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial4_slide">
                              <iframe width="853" height="380"
                                 src="https://www.youtube.com/embed/BGiAKs17hhs?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1"
                                 allowfullscreen frameborder="0"></iframe>
                           </div>
                        </div>

                     </div>

                  </div>
               </div>
               <!--student video-->
            </div>

         </div>
      </section>
      <!-- testimonial area end -->


   </main>

   <!-- footer area start -->
   <?php include_once("footer.php")?>

   <!-- footer area end -->

   <!-- JS here -->
   <?php include_once("foot.php")?>
   <script>

   </script>

</body>

</html>