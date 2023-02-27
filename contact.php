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
   <?php include_once("whatsapp.php")?>
   <!-- back to top end -->

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
                     <h3 class="breadcrumb__title">Contact</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.php">Home</a></span>
                        <span class="dvdr"><i class="fa-solid fa-angle-right"></i></span>
                        <span>Contact</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- contact area start -->
      <section class="contact__area  pt-50 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 contanct_form_4" style='padding:10px 30px'>
                  <div class="contact_form mt-40">
                     <div class="row">
                        <div class="col-lg-10">
                           <div class="section__title-wrapper mb-20">
                              <h2 class="section__title">Get in<span class="yellow-bg yellow-bg-big"> touch<img
                                       src="assets/img/shape/yellow-bg.png.html" alt=""></span></h2>
                              <p> We'd love to hear from you.</p>
                           </div>
                        </div>
                     </div>
                     <form id="contact-form" method="POST">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single_form">
                                 <input type="text" placeholder="Your Name" name='name' class="form-control">
                              </div> <!-- single form -->
                           </div>
                           <div class="col-md-6">
                              <div class="single_form">
                                 <input type="email" placeholder="Your Email" name='email' class="form-control">
                              </div> <!-- single form -->
                           </div>
                           <div class="col-md-6">
                              <div class="single_form">
                                 <input type="text" placeholder="Subject" name='subject' class="form-control">
                              </div> <!-- single form -->
                           </div>
                           <div class="col-md-6">
                              <div class="single_form">
                                 <input type="tel" placeholder="Your Mobile Number" minlength='10' maxlength='10' name='contact' class="form-control">
                              </div> <!-- single form -->
                           </div>
                           <div class="col-md-12">
                              <div class="single_form">
                                 <textarea placeholder="Enter Your Message" name='message' class="form-control"></textarea>
                              </div> <!-- single form -->
                           </div>
                           <div class="col-md-12 mt-3">
                              <div class="contact__btn">
                                 <button type="submit" class="tp-btn btn">Submit</button>
                              </div> <!-- single form -->
                           </div>
                        </div> <!-- row -->
                     </form>
                  </div> <!-- contact form -->
               </div>
               <div class="col-lg-1" style="border-right: 1px solid #e5f1fb;"></div>
               <div class="col-lg-5 pl-4">
                  <div class="contact_info pt-20 ">
                     <ul>
                        <li>
                           <div class="single_info d-flex mt-30">
                              <div class="info_icon">
                                 <i class="fa fa-home"></i>
                              </div>
                              <div class="info_content media-body">
                                 <h4>Office Address</h4>
                                 <p><a href=""><strong>Service and Knowledge Centre:</strong> Office no. 25, SN Park,
                                       Sector-3, Kharghar, Belpada, 410210</a></p><br>
                                 <p><a href=""><strong>Knowledge Centre:</strong> Office no. F-190, Haware Fantasia
                                       Business Park, Vashi, 400703</a></p>
                              </div>
                           </div> <!-- single info -->
                        </li>
                        <li>
                           <div class="single_info d-flex mt-30">
                              <div class="info_icon">
                                 <i class="fa fa-phone"></i>
                              </div>
                              <div class="info_content media-body">
                                 <h4>Phone</h4>
                                 <p><a href="tel:+917666442227">+91 7666442227</a></p>
                                 <p><a href="tel:+919321551234">+91 9321551234</a></p>
                                 <p><a href="tel:+919819659634">+91 9819659634</a></p>
                              </div>
                           </div> <!-- single info -->
                        </li>
                        <li>
                           <div class="single_info d-flex mt-30">
                              <div class="info_icon">
                                 <i class="fa fa-envelope"></i>
                              </div>
                              <div class="info_content media-body">
                                 <h4>Email us directly</h4>
                                 <p><a href="mailto:info@aiiits.com">info@aiiits.com</a></p>
                                 <p><a href="mailto:support@aiiits.com">support@aiiits.com</a></p>
                              </div>
                           </div> <!-- single info -->
                        </li>
                     </ul>
                  </div> <!-- contact info -->

               </div>
            </div> <!-- row -->
            <div class="contact_map mt-50">
               <div class="gmap_canvas">
                
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15087.308121641181!2d73.0573735!3d19.0273421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e40cc210699931f!2sAIIITS!5e0!3m2!1sen!2sin!4v1673856615735!5m2!1sen!2sin" 
                     frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%;height:300px"
                     referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div> <!-- contact map -->
         </div>
      </section>
      <!-- contact area end -->



   </main>

   <!-- footer area start -->
   <?php include_once("footer.php")?>
   <!-- footer area end -->

   <!-- JS here -->
   <?php include_once("foot.php")?>
   
</body>

</html>