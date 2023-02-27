<?php include_once("config.php");  

$id=$_GET['id'];
 $sql=mysqli_query($conn,"select * from course where id='$id'");
 $arr=mysqli_fetch_array($sql);
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include_once("head.php")?>
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
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->
      <?php include_once("whatsapp.php")?>

      <!-- header area start -->
      <?php include_once("header.php")?>      
      <!-- offcanvas area start -->
      <?php include_once("mobile-menu.php")?>
      <!-- offcanvas area end -->      
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-100 pb-100 breadcrumb__overlay" data-background="assets/img/slider/2/course.jpg" style="background-position: 100%;">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">Our Courses</h3>
                        <div class="breadcrumb__list">
                           <span><a href="index.php">Home</a></span>
                           <span class="dvdr"><i class="fa-solid fa-angle-right"></i></span>
                           <span>Course-details</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- course area start -->
         <section class="course__area pt-115 pb-40">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-6">
                  <div class="course__wrapper">
                        <div class="page__title-content mb-25">                          
                           <span class="breadcrumb__title-pre"><?= $arr['main_heading']; ?></span>
                           <h5 class="breadcrumb__title-2"><?= $arr['heading']; ?></h5>
                        </div>
                        <div class="course__meta-2 d-sm-flex align-items-center mb-30">
                        </div>
                        <div class="course__img w-img mb-30">
                           <img src="assets/img/course/career_course/<?= $arr['image']; ?>" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 ">
                     <div class="course__wrapper">
                        <div class="course__tab-2 mb-45">
                           <ul class="nav nav-tabs justify-content-center" id="courseTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <span>Description</span> </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <span>Curriculum</span> </button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">  <span>Course Details</span> </button>
                              </li>
                            </ul>
                        </div>
                        <div class="course__tab-content mb-95">
                           <div class="tab-content" id="courseTabContent" class=''>
                              <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                 <div class="course__description fdescription">
                                    <h3>Course Overview</h3>
                                    <p><?= $arr['description']; ?></p>
                                    <div class="course__description-list mb-45">
                                       <h4>Following professionals can go for it:</h4>
                                       <ul>
                                          <li> <i class="fa-solid fa-check"></i> Fresher’s</li>
                                          <li> <i class="fa-solid fa-check"></i> IT Experts</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                 <div class="course__curriculum">
                                    <div class="accordion" id="course__accordion">
                                       <div class="accordion-item mb-50">
                                         <h2 class="accordion-header" id="week-01">
                                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content" aria-expanded="true" aria-controls="week-01-content">
                                             Week 01
                                           </button>
                                         </h2>
                                         <div id="week-01-content" class="accordion-collapse collapse show" aria-labelledby="week-01" data-bs-parent="#course__accordion">
                                           <div class="accordion-body">
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg class="document" viewBox="0 0 24 24">
                                                      <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                      <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                      <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                      <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                      <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                   </svg>
                                                   <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                                   <span class="question">2 questions</span>
                                                </div>
                                             </div>
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg viewBox="0 0 24 24">
                                                      <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                      <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                                      </svg>
                                                   <h3> <span>Video: </span> Greetings and introduction</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                                </div>
                                             </div>
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg viewBox="0 0 16 16">
                                                      
                                                      <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                      <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                                      </svg>
                                                   <h3> <span>Audio:</span> Interactive lesson</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                                   <span class="question">3 questions</span>
                                                </div>
                                             </div>
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg class="document" viewBox="0 0 24 24">
                                                      <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                      <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                      <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                      <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                      <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                   </svg>
                                                   <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                                </div>
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                                    </div>
                                    <div class="accordion" id="course__accordion-2">
                                       <div class="accordion-item mb-50">
                                         <h2 class="accordion-header" id="week-02">
                                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-02-content" aria-expanded="true" aria-controls="week-02-content">
                                             Week 02
                                           </button>
                                         </h2>
                                         <div id="week-02-content" class="accordion-collapse  collapse show" aria-labelledby="week-02" data-bs-parent="#course__accordion-2">
                                           <div class="accordion-body">
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg class="document" viewBox="0 0 24 24">
                                                      <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                      <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                      <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                      <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                      <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                   </svg>
                                                   <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                                </div>
                                             </div>
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg viewBox="0 0 24 24">
                                                      <polygon class="st0" points="23,7 16,12 23,17 "/>
                                                      <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z"/>
                                                      </svg>
                                                   <h3> <span>Video: </span> Greetings and introduction</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                                </div>
                                             </div>
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg viewBox="0 0 16 16">
                                                      <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4"/>
                                                      <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z"/>
                                                      </svg>
                                                   <h3> <span>Audio:</span> Interactive lesson</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                                   <span class="question">2 questions</span>
                                                </div>
                                             </div>
                                             <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                                <div class="course__curriculum-info">
                                                   <svg class="document" viewBox="0 0 24 24">
                                                      <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z"/>
                                                      <polyline class="st0" points="14,2 14,8 20,8 "/>
                                                      <line class="st0" x1="16" y1="13" x2="8" y2="13"/>
                                                      <line class="st0" x1="16" y1="17" x2="8" y2="17"/>
                                                      <polyline class="st0" points="10,9 9,9 8,9 "/>
                                                   </svg>
                                                   <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                                </div>
                                                <div class="course__curriculum-meta">
                                                   <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                                </div>
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                              <div class="course__video-content mb-35">
                                 <ul>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z"/>
                                             <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 "/>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Instructor :</span> Eleanor Fant</h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                             
                                             <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20"/>
                                             <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z"/>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Lectures :</span>14</h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <circle class="st0" cx="8" cy="8" r="6.7"/>
                                             <polyline class="st0" points="8,4 8,8 10.7,9.3 "/>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Duration :</span>6 weeks</h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg>
                                             <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14"/>
                                             <circle class="st0" cx="8" cy="4.7" r="2.7"/>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Enrolled :</span>20 students</h5>
                                       </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                       <div class="course__video-icon">
                                          <svg>
                                             <circle class="st0" cx="8" cy="8" r="6.7"/>
                                             <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"/>
                                             <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z"/>
                                          </svg>
                                       </div>
                                       <div class="course__video-info">
                                          <h5><span>Language :</span>English</h5>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              </div>
                              <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                                 
                              </div>
                             
                            </div>
                        </div>
                        
                     </div>
                  </div>
                
               </div>
            </div>
         </section>
         <!-- course area end -->

         <!-- course enroll popup start -->
         <div class="course__popup">
            <!-- Modal -->
            <div class="modal fade" id="course_enroll_modal" tabindex="-1" aria-labelledby="course_enroll_modal" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                     <div class="course__popup-wrapper p-relative">
                        <div class="course__popup-close">
                           <button type="button" class="course__popup-close-btn" data-bs-toggle="modal" data-bs-target="#course_enroll_modal"><i class="fa-light fa-xmark"></i></button>
                        </div>
                        <div class="course__popup-top d-flex align-items-start mb-40">
                           <div class="course__popup-thumb mr-20">
                              <img src="assets/img/course/course-sm-1.jpg" alt="">
                           </div>
                           <div class="course__popup-content">
                              <h3 class="course__popup-title">
                                 <a href="#">Mechanical Engineering and Electrical Engineering Explained</a>
                              </h3>
                              <div class="course__sm-rating">
                                 <ul>
                                    <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                    <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                    <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                    <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                    <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="course__popup-info">
                           <form action="#">
                              <div class="row gx-3">
                                 <div class="col-xl-12">
                                    <div class="course__popup-input">
                                       <input type="email" placeholder="Email">
                                       <span class="course__popup-input-icon"><i class="fa-light fa-envelope"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="course__popup-input">
                                       <input type="text" placeholder="Card Number">
                                       <span class="course__popup-input-icon"><i class="fa-light fa-credit-card"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6">
                                    <div class="course__popup-input">
                                       <input type="text" placeholder="MM/YY">
                                       <span class="course__popup-input-icon"><i class="fa-light fa-calendar-days"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6">
                                    <div class="course__popup-input">
                                       <input type="text" placeholder="CVC">
                                       <span class="course__popup-input-icon"><i class="fa-light fa-lock"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="course__popup-btn">
                                       <button type="submit" class="tp-btn w-100">Pay $10.00</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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
                                 <select  name='subject' class="form-control form_select" onchange="courselect(this.value)" required=''>
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
                                 <select class="form-control form_select" name='course' id="courrses"  required=''>
                                    <option  disabled selected>Select the Course</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-md-6">
                              <div class="single_form">
                                 <i class="fa fa-book"></i>
                                 <select  name='subject' class="form-control form_select" onchange="courselect(this.value)" required=''>
                                    <option disabled selected>Select Center</option>
                                    <option value="Career Courses">Kharghar</option>
                                    <option value="Modular Courses">Vashi</option>
                                 </select>
                              </div>
                           </div>
                                                       <input type="hidden" value='<?php $bytes = random_bytes(10); echo bin2hex($bytes); ?>' name='uniquecode'>

                           <div class="col-xxl-12">
                              <div class="single_form">
                                 <i class="fa fa-pencil"></i>
                                 <textarea name="message" placeholder="Enter Your Message"
                                    class="form-control"></textarea>
                              </div>
                           </div>

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

         <?php include_once("foot.php")?>
   </body>
</html>
