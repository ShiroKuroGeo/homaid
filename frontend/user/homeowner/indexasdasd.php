<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME OWNER</title>
    <!-- <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/homeowner.css">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
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

    <div id="homeaid-homeowner">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="index.php" class="text-light">HOME<span class="bg info">AID</span></a></h1>

                <nav id="navbar" class="navbar order-last order-lg-0 text-dark">
                    <ul>
                        <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                        <li><a class="nav-link scrollto text-warning" href="applicant.php">Applicants</a></li>
                        <li><a class="nav-link scrollto text-warning" href="jobshiring.php">JobsHiring</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle text-warning"></i>
                </nav><!-- .navbar -->

                <a href="#" class="scrollto text-warning" id="accountLink">{{fullname}}</a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-dark" id="accountDropdown">
                    <li class="float-end">
                        <a class="dropdown-item d-flex align-items-center text-white" href="profile.php">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <br>
                    <li class="float-end">
                        <a class="dropdown-item d-flex align-items-center text-white" href="/homaid/backend/logout.php" id="signOutLink">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </div>

            </div>
        </header><!-- End Header -->

        <div class="container mt-5">
            <div class="row justify-content-start ">
                <div class="col-12 col-lg-6 col-xl-6 mt-5 shadow">
                    <img src="../../../assets/img/home page.PNG" alt="" width="500" height="500">
                </div>
                <div class="home col-12 col-lg-6 col-xl-6 mt-5 text-center p-5">
                    <h1>Home<span style="color:#0A9DF0;">AID</span></h1>
                    <p class="text-center text-capitalize p-5">homeaid can provide a convenient way to find and connect with helpers who have the skills and
                        experience you need.
                        By providing a reliable service, homeaid can help save homeowners time and reduce the stress of
                        finding someone trustworthy to work in their home.</p>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row d-flex justify-content-start">
                <div v-if="applicants == ''">
                    <div class="d-flex vh-50 justify-content-center align-items-center">
                        <div class="col-3 card bg-light mx-1 mb-2 mb-5 pb-3" style="width: 17rem;">
                            <div class="card-body text-muted fw-bold text-center mb-5">
                                <span class="p-5">No Applicants</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 card bg-light mx-1 mb-2" style="width: 17rem;" v-for="ap of applicants">
                    <img :src="'../../../assets/img/' + ap.image" class="rounded m-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ap.name}}</h5>
                        <h6 class="text-muted">
                            {{ap.age}}
                            <span class="float-end" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</span>
                            <ul class="dropdown-menu" aria-labelledby="reports">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">report</a></li>
                            </ul>
                        </h6>
                        <p class="card-text">
                            - {{ap.skills}}.
                        </p>
                        <a :href="'viewprofile.php?id=' + ap.uid" class="btn btn-info btn-sm mt-4 col-12 p-2">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade modal-centered" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer>
            <div class="  bg-dark p-0">
                <div class="footer-wrap row p-3">
                    <div class="col d-flex justify-content-center">
                        <h6 style="color:white">Copyright © HomeAID 2023</h6>
                    </div>
                </div>
            </div>
        </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../../middleware/vue/vue.3.js"></script>
<script src="../../../middleware/vue/axios.js"></script>
<script src="../../../middleware/homeowner/homeowner.js"></script>

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

</html>