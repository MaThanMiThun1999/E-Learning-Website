<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:../../.././index.html?error=You must be logged in to access this page");
    exit();
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="courses">
    <meta name="author" content="MaThanMiThun">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Django</title>

    <link rel="shortcut icon" href="https://drive.google.com/uc?id=1Kgoib_gWru0U019Rdzb5MNfobnt5JMwH" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/617fd3ad50.js" crossorigin="anonymous"></script>

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://static.staticsave.com/tamilcodelabcss/courses.css" rel="stylesheet">
    <link href="https://static.staticsave.com/tamilcodelabcss/video-player.css" rel="stylesheet">

  </head>
  <body>

    <!-- nav start  -->

<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top navcustom">
    <div class="container-fluid">
      <a class="navbar-brand" id="a1" href="#">TamilCodeLab</a>
      </div>
    </div>
  </nav>
</header>

<!-- nav end  -->

<main>

  <!-- video player start  -->

  <div class="workTitle">
    <div class="subTitle">COURSE NAME</div>
    <h1 class="singletitle">Django</h1>
  </div>
  <div id="info">
  
  </div>
  <div class="holder">
    <div class="video-container">
      <iframe src="https://archive.org/embed/1-introduction-to-django" ?rel=0;autoplay=1;modestbranding=1"  webkitallowfullscreen="true" mozallowfullscreen="true" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; eager;" allowfullscreen frameborder="0"></iframe>

    </div>
    </div>
  
  </div>

  <hr class="hrline">

  <!-- video player end  -->

  <!-- notes start  -->

  <div class="card text-center topcard" style="width: 80%; margin-left: 10%;" >
    <h5 class="card-header" style="font-variant: small-caps; font-weight: 700;"><i class="fa-solid fa-circle-exclamation"></i> Please Note</h5>
    <div class="card-body">
      <h5 class="card-title" style="font-variant: small-caps; font-weight: 600;">Start watching videos <br>one by one</h5>
      <p class="card-text" style="font-variant: small-caps;" >Because we don't buy any custom domain to host these videos</p>
    </div>
  </div>

  <hr class="hrline">

  <!-- notes end  -->
  
  <!-- content start  -->

  <div class="dropdown-center d-grid gap-2">

    <div class="d-grid gap-2 col-8 mx-auto" style="align-items: center; margin-bottom: 10px; padding: 5px; border-radius: 8px; border: 2px solid #1A4362; background-color: #1E70AF; width: 70%;">
      <h5  style="font-weight: 700; color: whitesmoke; text-align: center; font-size: 15px; margin-bottom: 0px;">Content Of This Course</h5>
    </div>


<div>
<ul class="accordion">
  <li>
    <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Django Introduction<i class="fa fa-toggle-down"></i></a></p>
    <ul class="submenu">
      <li><a class="startlink" href="./Topics/Django Introduction.php">Start Learning</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">1 Introduction to Django</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">2 Download & Installation of Django</a></li>
      </ul>

    <li>
      <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Creating Project and Application<i class="fa fa-toggle-down"></i></a></p>
      <ul class="submenu">
        <li><a class="startlink" href="./Topics/Creating Project and Application.php">Start Learning</a></li>
        <li><a class="dropdown-item disabled a" aria-disabled="true">3 Creating a Project & Application</a></li>
      </ul>

      <li>
        <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Django Admin Panel<i class="fa fa-toggle-down"></i></a></p>
        <ul class="submenu">
          <li><a class="startlink" href="./Topics/Django Admin Panel.php">Start Learning</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">4 Admin Panel in Django </a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">5 Adding Models in Admin panel</a></li>
        </ul>

      <li>
        <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Django HTML and Database<i class="fa fa-toggle-down"></i></a></p>
        <ul class="submenu">
          <li><a class="startlink" href="./Topics/Django HTML and Database.php">Start Learning</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">6 Templates in Django</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">7 Creating HTML Forms in Django</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">8 Get & POST Methods in Django</a></li>
        </ul>

    <li>
        <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Django CRUD Application<i class="fa fa-toggle-down"></i></a></p>
        <ul class="submenu">
          <li><a class="startlink" href="./Topics/Django CRUD Application.php">Start Learning</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">9 Creating App with MySQL</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">10 Fetching data in Django</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">11 Updating data in Django</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">12 Deleting Data in Django</a></li>
        </ul>
    
    <li>
        <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Authentication<i class="fa fa-toggle-down"></i></a></p>
        <ul class="submenu">
          <li><a class="startlink" href="./Topics/Authentication.php">Start Learning</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">13 Building a Registration Template</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">14 Registration server-side validate</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">15 Login with server-side validate</a></li>
        </ul>

    <li>
        <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Image Uploading<i class="fa fa-toggle-down"></i></a></p>
        <ul class="submenu">
          <li><a class="startlink" href="./Topics/Image Uploading.php">Start Learning</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">16 Upload Image in Django</a></li>
          <li><a class="dropdown-item disabled a" aria-disabled="true">17 Display Image in Django</a></li>
        </ul>

    <li>
    <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Javascript and Ajax<i class="fa fa-toggle-down"></i></a></p>
    <ul class="submenu">
      <li><a class="startlink" href="./Topics/Javascript and Ajax.php">Start Learning</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">18 Javascript form validation</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">19 Handling AJAX in Django</a></li>
      </ul>

    <li>
    <p class="link"><a class="dropdown-item disabled a" aria-disabled="true">Danjo Project<i class="fa fa-toggle-down"></i></a></p>
    <ul class="submenu">
      <li><a class="startlink" href="./Topics/Danjo Project.php">Start Learning</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">20 Project Database Schema</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">21 Introduction of Job Portal Project</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">22 Loading Template and Static Files</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">23 Registration OTP Verification</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">24 Logging in and Profile Creation</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">25 Database Updation</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">26 Handling Admin Panel</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">27 Posting a Job</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">28 Displaying Job Posts</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">29 Job Applications</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">30 Displaying Job Applications</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">31 Admin Panel - Log in</a></li>
      <li><a class="dropdown-item disabled a" aria-disabled="true">32 User List and Company List</a></li>
      </ul>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(function() {
      $('.submenu a').click(function(event) {
        // Get the href attribute from the clicked link
        var targetURL = $(this).attr('href');
  
        // Check if a target URL is specified
        if (targetURL && !$(this).hasClass('disabled')) {
          // Redirect to the specified URL
          window.location.href = targetURL;
        } else {
          // Toggle the 'active' class for the clicked item
          $(this).parent('li').toggleClass('active');
          $(this).parent('li').siblings().removeClass('active');
  
          // Slide up all submenus
          $('.submenu').stop().slideUp();
  
          // Slide down the submenu of the clicked item if it has the 'active' class
          $('.active .submenu').stop().slideDown();
        }
  
        event.preventDefault(); // Prevent the default action of the anchor tag
        return false; // Prevent event propagation
      });
    });
  </script>
  

  </div>


  <hr class="hrline">

  <!-- content end  -->

  <!-- about course start  -->

  <div class="container marketing">

    <div class="container marketing" >

      <div class="row g-5">
        <div class="col-md-12">
        
    
          <article class="blog-post">
            <h4 class="display-5 mb-1" id="crname">About This Course</h4>
            
    
            <p class="content crpara">Django tutorial in Tamil is available free of cost for all at <strong>TamilCodeLab</strong>. In sync with the growing demand of Django expertise, this course teaches skills the way they are used at work.</p>
            <hr>
            <p class="content crpara">At TamilCodeLab, you will find the best Django tutorial prepared by industry experts. The video tutorial includes visual presentation of concepts and demonstration of processes involved in performing development tasks using the Django framework.</p>
            <hr>
            <p class="content crpara">This course can be helpful for your professional career if you have supplemented its learning with other skills, such as:</p>
            <ul>
                <li>&bull; Advanced Python</li>
                <li>&bull; jQuery</li>
                <li>&bull; Web Designing with Javascript</li>
                <li>&bull; PHP, etc.</li>
            </ul>
            <hr>
            
        
          </article>

      <!-- about course end  -->

      <!-- three card start  -->

    <!-- Three columns of text below the carousel -->
    <div class="row" style="margin-left: 3%;">
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Course Progress</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-6 mb-4 listcard">
              <li><i class="fa-regular fa-pen-to-square"></i> All Levels</li>
              <li><i class="fa-regular fa-clock"></i> 9 hours Duration</li>
              <li><i class="fa-regular fa-money-bill-1"></i> Free Of Cost</li>
            </ul>
          </div>
        </div>
      </div>


       
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Requirements</h4>
            </div>
            <div class="card-body">
              
              <ul class="list-unstyled text-start mt-6 mb-4">
                <!-- <li>A working computer, either Windows or Mac.</li> -->
                <li>&#9726; Need An Computer Or Laptop.</li>
                <li>&#9726; Internet Access For Many Of The Lessons.</li>
                <li>&#9726; Operating System: Windows / Mac / Linux.</li>
              </ul>
            </div>
          </div>
        </div>

      
    <div class="col">
      <div class="card mb-5 align-center rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-bg-primary border-primary">
          <h4 class="my-0 fw-normal">Material Includes</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled text-start mt-6 mb-4">
            <li>&#9726; 9 hours on-demand video</li>
            <li>&#9726; Access on mobile tv and desktop</li>
            <li>&#9726; Content by LearnVern</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

 
  <hr class="hrline">
  <!-- three card end  -->
    

  </div><!-- /.container -->

    <!-- footer start  -->

<footer class="new_footer_area bg_color">
  <div class="new_footer_top">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                      <h3 class="f-title f_600 t_color f_size_20" style="font-weight: bold;">Contact</h3>
                      <p>Please inform if you have any queries.!</p>
                      
                          <button class="btn btn_get btn_get_two" onClick="javascript:window.open('mailto:tamilcodelab@gmail.com?&subject=This%20is%20TamilCodeLab...!&body=Write%20your%20queries%20here...', '_blank');">Email us</button> 
                      
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                    <hr>
                      <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                      <ul class="list-unstyled f_list">
                          <li><a href="#">Come soon</a></li>
                          <br>
                      </ul>
                  </div>
              </div>
             
              <div class="col-lg-3 col-md-6">
                  <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                      <h3 class="f-title f_600 t_color f_size_18">Designed by</h3>
                      <div class="f_social_icon">
                          <a href="https://www.facebook.com/profile.php?id=100011065608887" class="fab fa-facebook" target="_blank"></a>
                          <a href="https://github.com/MaThanMiThun1999" class="fab fa-github" target="_blank"></a>
                          <a href="https://in.linkedin.com/in/mathanraj-murugesan" class="fab fa-linkedin" target="_blank"></a>
                          <a href="https://instagram.com/its.me_mathan_mithun?igshid=OGQ5ZDc2ODk2ZA==" class="fa-brands fa-square-instagram" target="_blank"></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer_bg">
          <div class="footer_bg_one"></div>
          <div class="footer_bg_two"></div>
      </div>
  </div>
  <div class="footer_bottom">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 col-sm-7">
                  <p class="mb-0 f_400">© 2023 All rights reserved.</p>
              </div>
              <div class="col-lg-6 col-sm-5 text-right">
                  <p>Made with <i class="fa-solid fa-heart"></i> in <a href="https://mathanmithun.neocities.org/mathan_mithun/" target="_blank">MaThanMiThun</a></p>
              </div>
          </div>
      </div>
  </div>
</footer>

  <!-- </footer end> -->
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://static.staticsave.com/tamilcodelabjs/table.js"></script>

    </body>
</html>
