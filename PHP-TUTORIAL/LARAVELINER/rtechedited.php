 
 <!--====start adpl ====-->
 <?php
include("connection.php");
if(isset($_POST['submit'])){
//   if(isset($_POST['id'])){
//   $name=$_POST['name'];
//   $email=$_POST['email'];
//   $subject=$_POST['subject'];
//   $number=$_POST['number'];
//   $address=$_POST['address'];
//   $message=$_POST['message'];
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $subject=mysqli_real_escape_string($con,$_POST['subject']);
  $number=mysqli_real_escape_string($con,$_POST['number']);
  $address=mysqli_real_escape_string($con,$_POST['address']);
  $message=mysqli_real_escape_string($con,$_POST['message']);
  $sql = "insert into `rupeshtech` (name,email,subject,number,address,message) values('$name','$email','$subject','$number','$address','$message')";
  $result = mysqli_query($con,$sql);
  if($result){
 echo "<script> alert ('data insert successfully')</script>";    
    // header('location:read.php');
    ?>
    <meta HTTP-EQUIV = "Refresh" content="0; URL =" >
    <?php
    // header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}

?>
                                     <!--===END Aspl====-->
                                       <!--====  add header ====-->
     <?php include 'header.php'; ?>
                                 <!-- ======= Hero Section ======= -->
       <section id="hero" class="hero ">
       <div class="container position-relative">
       <div class="row gy-5" data-aos="fade-in">
         <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
           <marquee behavior="" direction="">
             <h6 class="tech" >Welcome to R.Technologies</h6>
           </marquee>
           <p class="phead">We are team of freelancer and talented digital marketers and Effective, optimized
             copy needs to not only be technically set up for SEO, for instance, via strategic placement of keywords, it
             also needs to be well-composed in such a way that it genuinely reaches the audience and genuinely add value
             to their lives. So, when you are trying to develop some keyword terms, you can think about what the audience
             actually needs and values, and build on that...........</p>
           <div class="d-flex justify-content-center justify-content-lg-start">
             <a id="latestpost" href="Blog.php?page=1" class="btn-get-started">Latest Posts</a>
             <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            <!--<a target="_blank" href="https://www.amazon.in/b?_encoding=UTF8&tag=rupesh8862-21&linkCode=ur2&linkId=378b130db0a0097480696ccd6d0f15ad&camp=3638&creative=24630&node=1375424031">BEST CODING LAPTOPS</a>-->
           </div>
         </div>
         <div class="col-lg-6 order-1 order-lg-2">
           <!-- if you want add pic -->
           <img src="assets/img/aboutme/hero-img-removebg-preview.png" alt="himg" class="img-fluid"  data-aos="zoom-out" data-aos-delay="100">
         </div>
       </div>
     </div>

     <div class="icon-boxes position-relative">
       <div class="container position-relative">
         <div class="row gy-4 mt-5">

           <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
             <div  id="icon-box" class="icon-box">
               <div class="iconclr" class="icon"><i class="bi bi-easel"></i></div>
               <h4 id="iconhead1" class="title"><a href="index.php" class="stretched-link">All Software</a></h4>
             </div>
           </div>
           <!--End Icon Box -->

           <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
             <div  id="icon-box2" class="icon-box">
               <div class="iconclr"  class="icon"><i class="bi bi-gem"></i></div>
               <h4 id="iconhead2"  class="title"><a href="" class="stretched-link">Web maintenance</a></h4>
             </div>
           </div>
           <!--End Icon Box -->

           <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
             <div   id="icon-box3" class="icon-box">
               <div class="iconclr"  class="icon"><i class="bi bi-geo-alt"></i></div>
               <h4 id="iconhead3" class="title"><a href="" class="stretched-link">CMS Website</a></h4>
             </div>
           </div>
                                                                                        <!--End Icon Box -->

           <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
             <div id="icon-box4" class="icon-box">
               <div class="iconclr"  class="icon"><i class="bi bi-command"></i></div>
               <h4 id="iconhead4"class="title"><a href="" class="stretched-link">SEO Friendly</a></h4>
             </div>
           </div>
                                                                                           <!--End Icon Box -->
        </div>
       </div>
     </div>
     </div>
   </section>
                                                                                         <!-- End Hero Section -->
                                                                               <!-- ======= About Us Section ======= -->

        <main id="main">
        <section id="about" class="about">
         <div class="container" data-aos="fade-up">
          <div class="section-header">
           <h2>About Us</h2>
           <p>We are a group of experienced designers, developers, and marketers who believe in the power of creative
             thinking. We are always looking for ways to improve your business.</p></div>
            <div class="row gy-4">
             <div class="col-lg-6">
             <h3> Creative Website.</h3>
             <img src="assets/img/portfolio/responsive_design_example1.png" class="img-fluid rounded-4 mb-4" alt="aboutimg">
             <p>We are a digital marketing agency focusing on web design and digital marketing. We specialize in helping
               you get the most out of your website or digital marketing efforts. Our team comprises talented
               professionals who work together to bring you the best possible result for your business.
               We believe that digital is more than just a means to an end—it's how we connect with each other and the
               world around us. And we've dedicated ourselves to using this incredible technology to help our clients
               make their brand shine online.
               We believe in building long-lasting relationships with our clients by providing them with the best
               possible services and support. With <b>Rupeshtechnology.com</b>, you can expect nothing but the best!.</p> </div>
              <div class="col-lg-6">
               <div class="content ps-0 ps-lg-5">
               <p class="fst-italic">
                 Comprehensive understanding of the online sales business. This helps us incorporate elements that make
                 the sales copy stronger and more effective. Online sales writing is different thematically from offline
                 sales </p> <ul>
                     
                 <li><i class="bi bi-check-circle-fill"></i> WE'RE MORE THAN A DIGITAL AGENCY.</li>
                 <li><i class="bi bi-check-circle-fill"></i> <b>we are providing full Responsive, fast loading ,SEO
                     friendly, live chat Integration and Whatsapp Chat intengration website</b></li>
                 <li><i class="bi bi-check-circle-fill"></i> We believe that digital is more than just a means to an
                   end—it's how we connect with each other and the world around us. And we've dedicated ourselves to
                   using this incredible technology to help our clients make their brand shine online..</li>
               </ul>
               
               <p>
                 <b>R.Techonology</b> Digital created an E-commerce website with full fledged development features. And
                 we found them to be excellent, experienced, and customer-focused. We asked them again to design an
                 e-commerce website because the end result was so outstanding. We have no doubts about recommending them.
               </p>

               <div class="position-relative mt-4">
                 <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="aboutimg">
                 <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" target="_blank" class="glightbox play-btn"></a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
                                                                    <!-- End About Us Section -->

                                                                  <!-- ======= Clients Section ======= -->
     <section id="clients" class="clients">
       <div class="container" data-aos="zoom-in">
         <h3 class="textslider">Affiliations & Partners</h3>
         <p class="textslider" </p>We are proud to have these reputed companies as our partners :
           Most people in <b>Delhi NCR ,Jharkhand and Bihar </b>clients agree that <b>RupeshTechnologies.com</b> has
           the<b> best website design services</b>. Because we’ve worked with some of the biggest names in the business,
           you can always count on us for web development services. Not our numbers or statistics, but our learning from
           them will show our value.Our team are working regularly for the last 5 years as a</b> freelance web designer &
           developer</b>from Delhi-NCR, Our Team have a total of 10+ years of industry experience. We specializes in
           creating websites in <b> Core Php, Open Sources,HTML,CSS,JAVASCRIPT and Php Frameworks. His expertise in PHP,
             MYSQL, WordPress, and Bootstrep</b>. If you are looking for a freelance PHP, </b>WordPress,duda or
           WooCommerce developer</b> in Delhi NCR, call us at</p>
         <div class="clients-slider swiper">
           <div class="swiper-wrapper align-items-center">
             <div class="swiper-slide"><img src="assets/img/clients/bluehost.png" class="img-fluid" alt="client1"></div>
             <div class="swiper-slide"><img src="assets/img/clients/partners3.png" class="img-fluid" alt="client2"></div>
             <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="client3"></div>
             <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="client4"></div>
             <div class="swiper-slide"><img src="assets/img/clients/bigrock.png" class="img-fluid" alt="client5"></div>
             <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="client6"></div>
             <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="client7"></div>
             <div class="swiper-slide"><img src="assets/img/clients/hostinger.png" class="img-fluid" alt="client8"></div>
             <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="client9"></div>
           </div>
         </div>
       </div>
     </section>

                                                       <!-- End Clients Section -->
  
                                            <!-- ======= Stats Counter Section ======= -->

     <section id="stats-counter" class="stats-counter">
       <div class="container" data-aos="fade-up">
         <div class="slideshow-container">
           <div class="mySlides">
             <h3 class="textslider">What our Happy Customers Says</h3>
             <q>I would, and have already, recommended <b>Rupesh kumar</b> to other businesses. He went above and beyond in helping me create
               our site and truly trying to understand our needs. He was always patient with changes that needed to be made along the
               way and with my learning process of building a functional site. Any changes we did make were always done quickly.</q>
             <p class=" author">- John Keats</p>
           </div>

           <div class="mySlides">
             <h3 class="textslider">What our Happy Customers Says</h3>
             <q>It took me a while to find someone who could accomplish what I needed for my website. I have to say it was well worth
               the wait.<b>Rupesh kumar</b> was a total and utter pleasure to work with. His hard work, patience, and professionalism far
               exceeded my expectations. He never once made me feel like I was pestering him with questions, any ideas I had he would
               expand on them to make them better, and his attitude was always positive and upbeat. I always felt like my site was
               priority number one.</q>
             <p class="author">- Ernest Hemingway</p>
           </div>

           <div class="mySlides">
             <h3 class="textslider">What our Happy Customers Says</h3>
             <q>I emailed <b>Rupesh kumar</b> hopes to work with him on my new racing website to help keep fans and sponsors up to date. I viewed
               his portfolio, and really liked what I saw. This gave me all the more confidence that <b>Rupesh</b> was right for the job, but
               what really made<b>Rupesh kumar</b> perfect for the job was his kind attitude. He was really open to allowing me to see different
               ideas, and was really open to suggestions..</q>
             <p class="author">- Thomas A. Edison</p>
           </div>
                                                     <!-- cursur next previous -->
                                       <!-- <a class="prev" onclick="plusSlides(-1)">❮</a>
                                         <a class="next" onclick="plusSlides(1)">❯</a> -->
                                         </div>

            <div class="dot-container">
           <span class="dot" onclick="currentSlide(1)"></span>
           <span class="dot" onclick="currentSlide(2)"></span>
           <span class="dot" onclick="currentSlide(3)"></span> </div>
                                                 <!-- end testimonal slider -->
                                            <!-- testiminaltextjs testimonal slider -->
                                                            <!-- tentimonial text slider js end -->
                                                                           
                                                                           
                                                                           
                                                                           
                                                                           
         <div class="row gy-4 align-items-center">
           <div class="col-lg-6">
             <img src="assets/img/stats-img.svg" alt="logostart" class="img-fluid"> </div>

                <div class="col-lg-6">
             <div class="stats-item d-flex align-items-center">
               <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
               <p><strong>Happy Clients</strong></p></div>
                                                                     <!-- End Stats Item -->

             <div class="stats-item d-flex align-items-center">
               <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
               <p><strong>Projects</strong> </p></div>
                                                                     <!-- End Stats Item -->

             <div class="stats-item d-flex align-items-center">
               <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
               <p><strong>Hours Of Support</strong> </p></div> </div></div>  </div></section>
                                                                       <!-- End Stats Item -->
                                                                       
                                                                       


                                                                  <!-- ======= Call To Action Section youtbe video sectioin  ======= -->
                 <section id="call-to-action" class="call-to-action">
                 <div class="container text-center" data-aos="zoom-out">
                <!--<a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
               <a href="https://www.youtube.com/watch?v=vc68dvBt-4s" class="glightbox play-btn"></a> 
             <h3>Call To Action</h3>
             <p>Join our YouTube and Facebook page List (370,000+ Subscribers and followers) Connect with our Experts and other motivated website creators wtch Demo software videos and provide free tutorials in
           our free Facebook page and our Challnel.</p>
           <a class="cta-btn" href="https://www.facebook.com/RUPESHKUMARYADA">Call To Action</a></div>
           </section>
                                                                            <!-- End Call To Action Section -->
     
     

                                                                             <!-- ======= Our Services Section ======= -->
             <section  id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
            <div class="section-header">
           <h2>Our Services</h2>
           <p style="color: black;">Static websites are a great way to get your business online, but they can be
             expensive and hard to maintain. Static is the right choice for you if you are looking for new website &
             Dynamic websites allow you to change your sites content, structure, and design whenever you want .We wil
             design a custom website that works for you no matter your business model !!</p>  </div>

             <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-4 col-md-6">
             <div class="service-item  position-relative">
               <div class="icon">
                 <i class="bi bi-activity"></i></div>
               <h3>Web Development</h3>
               <p> Today All website owners want to start to realize that unless visitors are provided with an engaging
                 on-site experience,
                 <!-- Generally they are likely to leave in search of a better option. This need for the best Website
                 Developer in Delhi India
                 that is capable of attracting and retaining customer attention…</p> -->
                 <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> </div> </div>
                                                                      <!-- End Service Item -->

                 <div class="col-lg-4 col-md-6">
                 <div class="service-item position-relative">
                 <div class="icon">
                 <i class="bi bi-broadcast"></i></div>
               <h3>SEO Friendly </h3>
               <p>Increased search engine optimization (SEO): Regular website maintenance can help improve your website's
                 <!-- SEO by keeping the content fresh, fixing broken links and improving website speed..</p> -->
                 <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
             </div>
           </div>
                                                                          <!-- End Service Item -->

           <div class="col-lg-4 col-md-6">
             <div class="service-item position-relative">
               <div class="icon">
                 <i class="bi bi-easel"></i>
               </div>
               <h3>Software Development</h3>
               <p>The website or Software requires consistent refinement, change, upgradation, and updation so it ought not to look
                 old. Without
                 predictable and normal updates, the outline of your site turns out to <!-- be simply a static handout which
               does a foul play
                 to the developing and dynamic nature of your business.</p> -->
                 <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
             </div>
           </div>
                                                                               <!-- End Service Item -->

           <div class="col-lg-4 col-md-6">
             <div class="service-item position-relative">
               <div class="icon">
                 <i class="bi bi-bounding-box-circles"></i>
               </div>
               <h3>CRM Bill Softwaret</h3>
               <p>All type Software Development service produces CRM ,HRA, structure along with features of an online site app.
                 will involve
                  in Delhi pune <!--We are providing the best
                  Freelance service on
                 the website. PHP Website Development, and web designing..</p> -->
                 <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
             </div>
           </div>
                                                                             <!-- End Service Item -->

           <div class="col-lg-4 col-md-6">
             <div class="service-item position-relative">
               <div class="icon">
                 <i class="bi bi-calendar4-week"></i>
               </div>
               <h3>CMS Website </h3>
               <p>Easy Content Updates: With a CMS website, you can easily update your website content without having to
                 rely on a web developer.<!-- This allows you to make changes to your site quickly and efficiently, ensuring
                  that your information is always up-to-date.
                 User-friendly Interface: Most CMS websites have a user-friendly interface that makes it .</p> -->
                 <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
             </div>
           </div>
                                                                              <!-- End Service Item -->

           <div class="col-lg-4 col-md-6">
             <div class="service-item position-relative">
               <div class="icon">
                 <i class="bi bi-chat-square-text"></i>
               </div>
               <h3>app Development </h3>
               <p>App development is the process of creating software  applications  for CRM HRA Use such as 
                 smartphones and tablets.<!-- There are several key aspects to app development, including:
                  Concept and Planning: This involves defining the purpose and goals of the app.</p> -->
                 <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a> </div></div>
                                                                                 <!-- End Service Item -->
             </div></div></section>
                                                                             <!-- End Our Services Section -->


    

                                                                               <!-- ======= Our Team Section ======= -->
         <section id="team" class="team">
         <div class="container" data-aos="fade-up">
         <div class="section-header">
           <h2>Our Team</h2>
           <p>We are a group of experienced designers, developers, and marketers who believe in the power of creative
             thinking. We are always looking for ways to improve your business.</p> </div>

            <div class="row gy-4">
             <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
             <div class="member">
               <img src="assets/img/aboutme/img1-removebg-preview.png" class="img-fluid" alt="logstart">
               <h4>Rupesh kumar</h4>
               <span>Web Development</span>
               <div class="social">
                 <a href="https://twitter.com/rupesh10411" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                 <a href="https://www.facebook.com/profile.html?id=100003093218438&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
                 <a href="https://www.instagram.com/official_rupeshkr/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                 <a href="https://www.linkedin.com/in/rupesh-kumar-14415220b/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
               </div>
             </div>
           </div>
                                                                            <!-- End Team Member -->

           <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
             <div class="member">
               <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="teamlogo">
               <h4>Sarah Jhinson</h4>
               <span>Marketing</span>
               <div class="social">
                 <a href="https://twitter.com/rupesh10411" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                 <a href="https://www.facebook.com/profile.html?id=100003093218438&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
                 <a href="https://www.instagram.com/official_rupeshkr/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                 <a href="https://www.linkedin.com/in/rupesh-kumar-14415220b/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
               </div>
             </div>
           </div>
                                                                              <!-- End Team Member -->

           <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
             <div class="member">
               <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="teamlogo6">
               <h4>Ramesh jha</h4>
               <span>Content</span>
               <div class="social">
                 <a href="https://twitter.com/rupesh10411" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                 <a href="https://www.facebook.com/profile.html?id=100003093218438&mibextid=ZbWKwL" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                 <a href="https://www.instagram.com/official_rupeshkr/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                 <a href="https://www.linkedin.com/in/rupesh-kumar-14415220b/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
               </div>
             </div>
           </div>
                                                                        <!-- End Team Member -->

           <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
             <div class="member">
               <img src="assets/img/aboutme/jj.jpg" class="img-fluid" alt="teamlogo6">
               <h4>Jyoti Rani</h4>
               <span>Accountant</span>
               <div class="social">
                 <a href="https://twitter.com/rupesh10411" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                 <a href="https://www.facebook.com/profile.html?id=100003093218438&mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
                 <a href="https://www.instagram.com/official_rupeshkr/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                 <a href="https://www.linkedin.com/in/rupesh-kumar-14415220b/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
               </div>
             </div>
           </div>
                                                                               <!-- End Team Member -->
     </div> </div> </section>
                                                                             <!-- End Our Team Section -->

     

                                                             <!-- ======= Frequently Asked Questions Section ======= -->
     <section id="faq" class="faq">
       <div class="container" data-aos="fade-up">
         <div class="row gy-4">
           <div class="col-lg-4">
             <div class="content px-xl-5">
               <h3>Frequently Asked <strong>Questions</strong></h3>
              <p></p></div></div>

           <div class="col-lg-8">
             <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
               <div class="accordion-item">
                 <h3 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                     <span class="num">1.</span>
                     Is there something you will not write about?</button></h3>
                     <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                     We strictly prohibit any writing on the following topics: hate-speech and offensive content.
                   </div>
                 </div>
               </div>
                                                        <!-- # Faq item-->

               <div class="accordion-item">
                 <h3 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                     <span class="num">2.</span>
                     Do you have any particular expertise in a particular subject?</button> </h3>
                     <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                     We have a background in corporate growth hacking, digital marketing, lead generation, AI-powered
                     technology, DFY content creation, business growth and branding.
                   </div>
                 </div>
               </div>
                                                            <!-- # Faq item-->

               <div class="accordion-item">
                 <h3 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                     <span class="num">3.</span>
                     What about your refund policy?
                   </button>
                 </h3>
                 <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                   <div class="accordion-body">
                     In spite of writing being our forte and delivering excellent content in the past, you could still be
                     dissatisfied with the initial results for some reason throughout your order. Because of the nature
                     of this service, we are unable to give you a refund. But we will always provide you with more
                     versions of your content so that you can choose one that works best for you.
                   </div>
                 </div>
               </div>
                                                              <!-- # Faq item-->

               <div class="accordion-item">
                 <h3 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                     <span class="num">4.</span>
                     How do you deduct the word count for content creation?
                   </button>
                 </h3>
                 <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                   <div class="accordion-body">
                     Assume you book 9000 words per month and want a script of 1000 words with voice overs and subtitles
                     for an engaging video. We would allocate 1000 words towards copywriting, another 1000 words for
                     video creation (with or without subtitles) and another 1000 words for voice-over. A total of 3000
                     words would be taken out of your 9000 word count.
                   </div>
                 </div>
               </div>
                                                                 <!-- # Faq item-->

               <div class="accordion-item">
                 <h3 class="accordion-header">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                     <span class="num">5.</span>
                     Can I transfer my unused word count to the next month? </button></h3>
                     <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                     <div class="accordion-body">
                     Yes, your unused word count can be transferred to the next month if you sign up for our yearly plan
                     and pay for 12 months upfront. With our 12-month subscription, you also receive 10% off your monthly
                     fee. Nevertheless, we do not allow transfers of more than 1 month at a time and 3 months at total,
                     so that our workload and capacity remain secure.
                   </div>
                 </div>
               </div>
                                          <!-- # Faq item-->

             </div> </div> </div></div></section>
                                                      <!-- End Frequently Asked Questions Section -->

     
                                               <!-- ======= Contact Section ======= -->
         <section id="contact" class="contact">
           <div class="container" data-aos="fade-up">
             <div class="section-header">
               <h2>Contact</h2>
               <p>if we want to know more information about the facilities of the place please sent me email and aslo contact us..</p>  </div>
               <div class="row gx-lg-0 gy-4">
               <div class="col-lg-4">
                 <div class="info-container d-flex flex-column align-items-center justify-content-center">
                   <div class="info-item d-flex">
                     <i class="bi bi-geo-alt flex-shrink-0"></i>
                     <div>
                       <h4>Location:</h4>
                       <p>A413 Delhi Street, saket, NY 122012</p></div> </div>
                                                              <!-- End Info Item -->

                   <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i> <div>
                    <h4>Email:</h4>
                    <p>admin@rupeshtechnologies.com</p> </div></div>
                                                                  <!-- End Info Item -->
                   <!--<div class="info-item d-flex">-->
                   <!--  <i class="bi bi-phone flex-shrink-0"></i>-->
                   <!--  <div>-->
                   <!--    <h4>Call:</h4>-->
                   <!--    <p>+918862955143</p>-->
                   <!--  </div>-->
                   <!--</div>-->
                                                                            <!-- End Info Item -->

                      <div class="info-item d-flex">
                     <i class="bi bi-clock flex-shrink-0"></i> <div>
                      <h4>Open Hours:</h4>
                       <p>Mon-Sat: 11AM - 23PM</p></div></div>
                                                                         <!-- End Info Item -->

                        </div> </div>
                        
                      <div class="col-lg-8">
                      <form action="#" method="post">
                       <div class="row">
                       <div class="col-md-6 form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo @$_GET['uid'] ?>">
                       <input type="text" name="name" class="form-control" placeholder="Your Name" required> </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                       <input type="email" class="form-control" name="email" placeholder="Your Email" required></div>
                       <div class="col-md-6 form-group">
                       <input type="text" name="subject" class="form-control" placeholder="Subject" required> </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                       <input type="text" class="form-control" name="number" placeholder="Number" required></div></div>
                        <div class="form-group mt-3">
                        <input type="text" class="form-control" name="address" placeholder="Address" required> </div>
                       <div class="form-group mt-3">
                     <textarea class="form-control" name="message" rows="7" placeholder="PLEASE DESCRIVE HERE SOMETHING ABOUT YOU!" required></textarea></div>
                     <div class="text-center">
                     <button type="submit" name="submit">Send Message</button> </div></form></div>
                     
                                                                             <!-- End Contact Form -->
             </div>
           </div>
         </section>

                                                                          <!-- End Contact Section -->
       </main>
                                                                              <!-- End #main -->

       
       
       
                                                                            <!--maping start-->
<section>
 <div class="mapouter">
    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" height="100px" frameborder="0" scrolling="no" marginheight="0"
        marginwidth="0"
        src="https://maps.google.com/maps?width=1200&amp;height=600&amp;hl=en&amp;q=Sahibganj &amp;t=h&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
        href="https://capcuttemplate.org/">Capcut Templates</a></div> </div>
    </section>
                                                                                <!--end map-->
  

   <!-- ======= add Footer ======= -->
<?php include 'websitefooter.php'; ?>