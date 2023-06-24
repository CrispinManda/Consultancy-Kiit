   <?php get_header();?>
   
   <!-- Header -->
   <!-- Header -->
   <body style="max-width:100%; overflow-x: hidden;">
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top p-3" style="background-color:red;">
           <div class="container">
             <a class="navbar-brand" href="#"><span class="text-bg-primary h2 ">THE KENYA INSTITUTE OF INFORMATION & TECHNOLOGY</span> <br><mark>(PROJECT MANAGEMENT CONSULTANCY)</mark></a> <br>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                   <a class="nav-link" href="#">Home</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#about">About</a>
                 </li> 
                 <li class="nav-item">
                   <a class="nav-link" href="#services">Services</a>
                 </li> 
                 <li class="nav-item">
                   <a class="nav-link" href="#portfolio">Portfolio</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#team">Team</a>
                 </li> 
                 <li class="nav-item">
                   <a class="nav-link" href="#contact">Contact</a>
                 </li>  
                 <li class="nav-item">
                   <a class="nav-link" href="http://localhost/Easy-Manage/events/">Events</a>
                 </li>        
               </ul>
             </div>
           </div>
         </nav>
            
            
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel "style="position: relative;  overflow: hidden;">
           <div class="carousel-indicators " style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1; pointer-events: none;">
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/home-1.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption">
                 <h5>Your Dream House</h5>
                                 <p>Efficiently driving projects from inception to success, unlocking your organization's full potential.</p>
                                 <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
               </div>
             </div>
             <div class="carousel-item">
               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/home-2.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption">
                 <h5>Always Dedicated</h5>
                                 <p>Delivering excellence through meticulous planning, precise execution, and unparalleled project management expertise.</p>
                                 <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
               </div>
             </div>
             <div class="carousel-item">
               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/home-3.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption">
                 <h5>True Construction</h5>
                                 <p>"Empowering your projects with our strategic guidance and exceptional leadership for exceptional outcomes.</p>
                                 <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
               </div>
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
   
         <!-- about section starts -->
         <section id="about" class="about section-padding">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-md-12 col-12 mt-5">
                         <div class="about-img">
                             <img  src="<?php echo get_template_directory_uri()?>/assets/img/front/about.jpg" alt="" class="img-fluid">
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                         <div class="about-text">
                               <h2>Our Project Management office (PMO)<br/> consultancy</h2>
                               <p>We address a set of specific problems on Program or Project performance gaps and fix it on behalf of client. Our consultancy services aim to optimize resource management and facilitate the implementation of proven project planning concepts to help our Client get the outcomes they desire and maximize profits in the long run. We also address other widespread project problems, which include a high rate of projects that fail to deliver the expected business value. This may be amongst other things due to a suboptimal project selection process or poor project execution. This can also be the result of longer-than-average project completion times, which ties up key resources over elongated periods of time and delays the time to market of new products and services. With our team of professional, we achieve this by auditing the processes and ways of working in place and optimizing when necessary by introducing more structured approaches and tools that are more effective with best practices. We also identify issues, minor or major, and resolve them in a flash.</p>
                               <a href="#" class="btn btn-warning">Learn More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- about section Ends -->
         <!-- services section Starts -->
         <!-- <section class="services section-padding" id="services">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="section-header text-center pb-5">
                             <h2>Our Services</h2>
                             <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                   <div class="col-12 col-md-12 col-lg-4">
                       <div class="card text-white text-center bg-dark pb-2">
                           <div class="card-body">
                               <i class="bi bi-laptop"></i>
                               <h3 class="card-title">Best Quality</h3>
                               <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                               <button class="btn bg-warning text-dark">Read More</button>
                           </div>
                       </div>
                   </div>
                     <div class="col-12 col-md-12 col-lg-4">
                         <div class="card text-white text-center bg-dark pb-2">
                             <div class="card-body">
                               <i class="bi bi-journal"></i>
                                 <h3 class="card-title">Sustainability</h3>
                                 <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                                 <button class="btn bg-warning text-dark">Read More</button>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-md-12 col-lg-4">
                         <div class="card text-white text-center bg-dark pb-2">
                             <div class="card-body">
                               <i class="bi bi-intersect"></i>
                                 <h3 class="card-title">Integrity</h3>
                                 <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                                 <button class="btn bg-warning text-dark">Read More</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section> -->
         <!-- services section Ends -->
         <!-- service section starts  -->
         <section class="services section-padding" id="services">
          <div class="container">
          <div class="row">
                     <div class="col-md-12 mt-5">
                         <div class="section-header text-center pb-5">
                             <h2>Our Services</h2>
                             <p>Experienced team. Successful project management. <br> Effective change implementation.</p>
                         </div>
                     </div>
                    </div>
            <div class="row ">
                   <div class="col-sm-6 ">
                       <p>Our consultancy services encompass a broad range of project-related offerings. These include project training and support, program scheduling, milestones, and control, program and project management, development of project management software, project control, risk management, monitoring and evaluation, reporting, project portfolio management, quality management, and administrative support. With our expertise in these areas, we provide comprehensive assistance and guidance to clients in effectively managing their projects and ensuring their successful execution.</p>
                   </div>
                   <div class="col-sm-6 col-sm-6 d-flex justify-content-center align-items-center md-5">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/front/landing_page2.svg">
               </div>
            </div>
        </div>
        </section>
        <!-- service section ends   -->
  <div class="container">
  <h2 class="text-center">Upcoming Events</h2>
  <p  class="text-center">Elevate your skills with our most in-demand training programmes</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Tittle</th>
        <th>Date</th>
        <th>Duration</th>
        <th>Location</th>
        <th>Fees</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>The roles of Project Management skills  in 21st century economic growth </td>
        <td>7h  July 2023 </td>
        <td>2Hours(5:00Pm-7:00Pm)</td>
        <td>Virtual </td>
        <td>KES 1500(Certificate to be provided)</td>
      </tr>
      <tr>
        <td>The Roles of Monitoring Evaluation Accountability and Learning (MEAL) as a Strategy for project success.</td>
        <td>14th July 2023 </td>
        <td>2Hours(5:00Pm-7:00Pm)</td>
        <td>Virtual</td>
        <td>KES 1500(Certificate to be provided)</td>
      </tr>
      <tr>
        <td>Human Resource Management strategic success in Medium sized and big Projects </td>
        <td>11th August 2023  </td>
        <td>2Hours(5:00Pm-7:00Pm)</td>
        <td>Virtual</td>
        <td>KES 1500(Certificate to be provided)</td>
      </tr>
    </tbody>
    
  </table>
  </div>
    <div class="row ">
    <div class="container ">
     <i class="float-right bi bi-arrow-down-square bg-primary"></i>
    <a class="float-right text-primary" href="http://localhost/Easy-Manage/events/">Click here to view more Upcoming Trainings</a>
    </div>
</div>


  <!-- portfolio strats -->
  <section id="portfolio" class="portfolio section-padding">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="section-header text-center pb-5">
                         <h2>Our Projects</h2>
                         <p>Diverse portfolio. Successful outcomes. Client satisfaction. <br> Exceeding project expectations.</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12 col-md-12 col-lg-4">
                     <div class="card text-light text-center bg-white pb-2">
                         <div class="card-body text-dark">
                           <div class="img-area mb-4">
                               <img  src="<?php echo get_template_directory_uri()?>/assets/img/front/project-1.jpg" class="img-fluid" alt="">
                           </div>
                             <h3 class="card-title">Monitoring & Evaluation Accountability and Learning</h3>
                             <p class="lead">Monitoring & Evaluation Accountability and Learning
                              The Kenya Institute of information and Technology (KIIT) – Project Management Consultancy offers specialized support in monitoring and evaluation (M&E). M&E is crucial for tracking progress towards goals in international development. Previously, M&E consultants were considered optional due to budget constraints, but now organizations assign third-party consultants to ensure project success. KIIT brings years of M&E expertise in Kenya and Africa.</p>
                             <button class="btn bg-warning text-dark">Learn More</button>
                         </div>
                     </div>
                 </div>
                 <div class="col-12 col-md-12 col-lg-4">
                     <div class="card text-light text-center bg-white pb-2">
                         <div class="card-body text-dark">
                           <div class="img-area mb-4">
                               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/project-2.jpg" class="img-fluid" alt="">
                           </div>
                             <h3 class="card-title">Fundraising/Resource Mobilization and Donor Relations</h3>
                             <p class="lead">KIIT's Project Management Consultancy partners with the Grants Acquisition & Management Manager to assess resource mobilization strategies. This includes reviewing Finance Plan and Budget, establishing Finance Committees, implementing Fundraising Events & House Parties, and utilizing Online Fundraising. Our consultants specialize in setting Fundraising Goals, building Teams, and optimizing fundraising efforts.</p>
                             <button class="btn bg-warning text-dark">learn More</button>
                         </div>
                     </div>
                 </div>
                 <div class="col-12 col-md-12 col-lg-4">
                     <div class="card text-light text-center bg-white pb-2">
                         <div class="card-body text-dark">
                           <div class="img-area mb-4">
                               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/project-3.jpg" class="img-fluid" alt="">
                           </div>
                             <h3 class="card-title">Training and Capacity Development: </h3>
                             <p class="lead">KIIT- Project Management Consultancy provides tailor-made in-service courses, lasting a few days to several weeks. These are aimed at improving knowledge, skills and competence those results in better performance and high productivity of professionals.  The courses offered are accredited by National Industrial Training Authority (NITA and TVETA) delivered by qualified professional. The trainings take the form of seminars, workshops and symposia either in-site or at the client institution/organization.</p>
                             <button class="btn bg-warning text-dark">Learn More</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
       </section>
       <!-- portfolio ends -->
       <!-- portfolio ends -->
         <!-- team starts -->
         <section class="team section-padding" id="team">
             <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <div class="section-header text-center pb-5">
                           <h2>Our Team</h2>
                           <p>Skilled professionals. Collaborative approach. Strong teamwork.<br> Exceptional results. Client-focused mentality..</p>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-12 col-md-6 col-lg-3">
                       <div class="card text-center">
                           <div class="card-body">
                               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/job.jpg" alt="" class="img-fluid rounded-circle">
                           <h3 class="card-title py-2">Job Magondu</h3>
                           <p class="card-text">Job Magondu is an experienced Project Management Expert with vast knowledge in various sectors, including ICT, NGO's, and Real Estate. He holds a Master's degree in Project Planning and Management from the University of Nairobi and is certified in Cisco networking.</p>
                           
   
                           <p class="socials">
                               <i class="bi bi-twitter text-dark mx-1"></i>
                           <i class="bi bi-facebook text-dark mx-1"></i>
                           <i class="bi bi-linkedin text-dark mx-1"></i>
                           <i class="bi bi-instagram text-dark mx-1"></i>
                           </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-12 col-md-6 col-lg-3">
                       <div class="card text-center">
                           <div class="card-body">
                           <img src="<?php echo get_template_directory_uri()?>/assets/img/front/nelly.jpg" alt="" class="img-fluid rounded-circle">
                           <h3 class="card-title py-2">Nelly Koigu</h3>
                           <p class="card-text">Nelly Koigu, an experienced administrator with a Psychology background, brings a decade of expertise in education and resource management. She holds a Bachelor's degree in Psychology and is pursuing an MBA in Strategic Planning.</p>
                           <p class="socials">
                               <i class="bi bi-twitter text-dark mx-1"></i>
                           <i class="bi bi-facebook text-dark mx-1"></i>
                           <i class="bi bi-linkedin text-dark mx-1"></i>
                           <i class="bi bi-instagram text-dark mx-1"></i>
                           </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-12 col-md-6 col-lg-3">
                       <div class="card text-center">
                           <div class="card-body">
                               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/njeru.jpg" alt="" class="img-fluid rounded-circle">
                           <h3 class="card-title py-2">Job Njeru</h3>
                           <p class="card-text">Job is an accomplished project management professional with 18+ years of experience in private sector and humanitarian development, empowering clients and coordinating with partners.</p>
                           <p class="socials">
                               <i class="bi bi-twitter text-dark mx-1"></i>
                           <i class="bi bi-facebook text-dark mx-1"></i>
                           <i class="bi bi-linkedin text-dark mx-1"></i>
                           <i class="bi bi-instagram text-dark mx-1"></i>
                           </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-12 col-md-6 col-lg-3">
                       <div class="card text-center">
                           <div class="card-body">
                               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/cris.jpg" alt="" class="img-fluid rounded-circle">
                           <h3 class="card-title py-2">Crispin Manda</h3>
                           <p class="card-text">Crispin Manda is a senior Web/Software developer with Bachelors degree in Computer science from the university of Nairobi.</p>
                           <p class="socials">
                               <i class="bi bi-twitter text-dark mx-1"></i>
                           <i class="bi bi-facebook text-dark mx-1"></i>
                           <i class="bi bi-linkedin text-dark mx-1"></i>
                           <i class="bi bi-instagram text-dark mx-1"></i>
                           </p>
                           </div>
                       </div>
                   </div>
               </div>
             </div>
         </section>
         <!-- team ends -->
         <!-- Contact starts -->
         <section id="scrollspyContact" class="py-5 py-xl-8 py-xxl-16">
  <div class="container">

    <div class="text-center">
      <h2>Contact Us</h2>
      <p>Don't hesitate to reach out to us today and take the first step towards a successful project - we're always happy to hear from you and discuss how we can help.</p>
    </div>

  </div>
  <div class="container">
    <div class="row gy-5 gx-lg-5">

      <div class="col-lg-4">

        <div class="card p-4 shadow">
          <h3>Get in touch</h3>
          <p>Reach out and lets have a conversation.</p>

          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h4>Location:</h4>
              <p>Nyeri, Kenya</p>
            </div>
          </div><hr><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h4>Email:</h4>
              <p>consultancy@kiit.ac.ke</p>
            </div>
          </div><hr><!-- End Info Item -->

          <div class="info-item d-flex">
            <i class="bi bi-phone flex-shrink-0"></i>
            <div>
              <h4>Call:</h4>
              <p>+254 720 943002</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      <div class="col-lg-8" id=contact>
        <form action="" method="post" class="form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control form-control-lg" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control form-control-lg" rows="8" name="message" placeholder="Message" required></textarea>
          </div>
          <div class="text-center my-3">
            <input class="btn btn-primary" type="submit" value="Send Message" name="contactmessage">
          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>
  </div>
</section>

         <!-- contact ends -->
         <!-- footer starts -->
         <!-- <footer class="bg-dark p-2 text-center">
             <div class="container">
                 <p class="text-white">All Right Reserved By Crispin Manda</p>
             </div>
         </footer> -->
</body>

   
<?php get_footer();?>