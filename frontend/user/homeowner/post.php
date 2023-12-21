<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT</title>
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
    <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center justify-content-lg-between">
                <h1 class="logo me-auto me-lg-0"><a href="index.php">HOME<span class="bg info">AID</span></a></h1>
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                        <li><a class="nav-link scrollto" href="applicant.php">Applicants</a></li>
                        <li><a class="nav-link scrollto" href="jobshiring.php">JobsHiring</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <div class="d-flex">
                    <a href="#" class="#" id="accountLink">{{fullname}}</a>
                </div>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-dark" id="accountDropdown">
                    <li>
                        <a class="dropdown-item d-flex align-items-center text-white" href="profile.php">
                            <i class="bi bi-person me-3"></i>
                            <span>My Profile</span>
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
        <div class="container py-3 mt-5">
            <div class="mask d-flex align-items-center h-100 gradient-custom">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body p-2 p-md-5">
                                    <h3 class="mb-4">Add Job Description</h3>

                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="firstName">Job Title</label>
                                                    <input type="text" v-model="jobTitle" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="firstName">Job Category</label>
                                                    <input type="text" v-model="jobCategory" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="lastName">Job Description</label>
                                                    <textarea v-model="jobDescrip" cols="20" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 float-end col-3">
                                            <button class="btn btn-warning btn-md col-12" @click="storeJobs">Store</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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