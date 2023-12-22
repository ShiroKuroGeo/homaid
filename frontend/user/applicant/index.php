<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>applicant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../assets/img/logo.png" rel="icon">
  <link href="../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../../assets/css/style.css" rel="stylesheet">
  <style>
    .dropdown-menu.dropdown-menu-end {
      margin-left: 75%;
      margin-top: 7%;
      padding-right: 10px;
    }


    .dropdown-menu .float-end {
      float: right;
    }


    .dropdown-menu .float-end:not(:last-child) {
      margin-bottom: 5px;
    }
  </style>
</head>

<body>
  <div id="homeaid-applicant">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="index.php">HOME<span class="bg info">AID</span></a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
            <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
              <ul class="text-dark">
                <li v-for="cat of categories"><a :href="'/homaid/frontend/user/applicant/category.php?category='+ cat.category" class="text-dark">{{cat.category}}</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Types</span> <i class="bi bi-chevron-down"></i></a>
              <ul class="text-dark">
                <li><a href="/homaid/frontend/user/applicant/jobtypes.php?jobTypes=Part Time" class="text-dark">Part Time</a></li>
                <li><a href="/homaid/frontend/user/applicant/jobtypes.php?jobTypes=Full Time" class="text-dark">Full Time</a></li>
              </ul>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <div class="d-flex">
          <a href="#" class="#" id="accountLink">{{fullname}}</a>
        </div>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-dark" id="accountDropdown">
          <li>
            <a class="dropdown-item d-flex align-items-center text-white" href="profile2.php">
              <i class="bi bi-person me-3"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center text-white" href="appyied.php">
              <i class="bi bi-envelope me-3"></i>
              <span>My Apply Job</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center text-white" href="../../chat/chats.php">
              <i class="bi bi-chat me-3"></i>
              <span>Messages</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center text-white" href="/homaid/backend/logout.php" id="signOutLink">
              <i class="bi bi-box-arrow-right me-3"></i>
              <span>Sign Out</span>
            </a>
          </li>
        </div>
      </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
          <div class="col-xl-6 col-lg-8">
            <h1>HOME<span>AID</span></h1>
            <h2>We are team of talented digital marketers</h2>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line"></i>
              <h3><a href="#">BABYSITTER</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line"></i>
              <h3><a href="#">COOKING</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-calendar-todo-line"></i>
              <h3><a href="#">HANDLING CLOTHES</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-paint-brush-line"></i>
              <h3><a href="#">HOUSEKEEPER</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <section id="team" class="team">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Home Owner</h2>
            <p>Home Owner</p>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6 rounded" v-for="u of job">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <div class="text-center">
                    <img :src="'/homaid/assets/img/'+ u.picture" class="img-fluid" width="250" alt="">
                  </div>
                  <div class="social">
                    <a :href="'/homaid/frontend/chat/chatroom.php?id='+u.user_id" data-bs-toggle="popover" data-bs-trigger="hover" title="Apply" data-bs-placement="top" data-bs-content="Message User"><i class="bi bi-chat"></i></a>
                    <a href="#!" @click="apply(u.job_id)" data-bs-toggle="popover" data-bs-trigger="hover" title="Apply" data-bs-placement="top" data-bs-content="Message User"><i class="bi bi-hand-thumbs-up-fill"></i></a>
                    <a type="button" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" title="Report Users" data-bs-content="Report Users">
                      <i class="bi bi-exclamation-circle" @click="getUserId(u.user_id)" data-bs-toggle="modal" data-bs-target="#reportUserasd"></i>
                    </a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="text-capitalize">{{u.firstname}}</h4>
                  Job Title: <span class="text-capitalize">{{u.job_title}}</span>
                  Job Types: <span class="text-capitalize">{{u.job_types}}</span>
                </div>
              </div>
            </div>
            <div class="modal fade" id="reportUserasd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Report this person</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Are you sure you want to report this user? <br>
                    Reason:
                    <textarea v-model="reasonOfReport" cols="30" rows="3" class="form-control"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="reportUsers(userIdes)">Report</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

    </main>

    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>Gp<span>.</span></h3>
                <p>
                  A108 Adam Street <br>
                  NY 535022, USA<br><br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>

            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../../middleware/vue/vue.3.js"></script>
    <script src="../../../middleware/vue/axios.js"></script>
    <script src="../../../middleware/applicant/applicant.js"></script>
    <script src="../../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../../../assets/vendor/aos/aos.js"></script>
    <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../../../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#accountLink").click(function() {
          $("#accountDropdown").toggle();
        });

        // Close the dropdown when clicking outside of it
        $(document).click(function(event) {
          if (!event.target.matches('#accountLink')) {
            var dropdown = $("#accountDropdown");
            if (dropdown.is(":visible")) {
              dropdown.hide();
            }
          }
        });

        // Handle the sign-out click event
        $("#signOutLink").click(function() {
          // Add your sign-out logic here
          alert("Signing out..."); // Replace with your actual sign-out code
        });
      });
    </script>

</body>

</html>