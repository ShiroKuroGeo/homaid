<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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

<body class="bg-light">

    <div id="homeaid-homeowner">
        <!-- ======= Header ======= -->
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
        <section id="hero" class="h-100 gradient-custom-2" v-for="pd of profileDetailsData">
            <div class="container-fluid py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-10 col-xl-10">
                        <div class="card">
                            <div class="rounded-top text-white d-flex flex-row bg-dark" style=" height:200px;">
                                <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                    <img :src="'../../../assets/img/' + pd.picture" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; height: 150px; z-index: 1">
                                </div>
                            </div>
                            <div class="card-body row p-4 text-black">
                                <div class="mb-5 col-5 p-5 border bg-light">
                                    <p class="lead fw-bold mb-1">Bio</p>
                                    <div class="p-4">
                                        <p class="font-italic mb-0 text-capitalize"><span class="fw-bold">Username:</span> {{pd.username}}</p>
                                        <p class="font-italic mb-1 text-capitalize"><span class="fw-bold">Verify: </span>{{pd.status == 1 ? 'Verified' : 'Not Verified'}} </p>
                                        <p class="font-italic mb-1 text-capitalize"><span class="fw-bold">Email:</span> {{pd.email}} </p>
                                        <p class="font-italic mb-1 text-capitalize"><span class="fw-bold">Join At:</span> {{pd.created_at}} </p>
                                    </div>
                                    <a href="myApplication.php" class="btn btn-info text-white me-1 flex-grow-1" data-bs-toggle="modal" data-bs-target="#editProfile">Edit Profile</a>
                                </div>
                                <div class="mb-5 col-7 border bg-light">
                                    <div class="d-flex justify-content-between align-items-center pt-3 ps-3">
                                        <p class="lead fw-bold mb-0">Post</p>
                                    </div>
                                    <div class="card-body p-4 text-black" style="max-height: 80vh; overflow: auto" v-for="j of jobPosteds">

                                        <div class="row ">
                                            <div class="card bg-dark text-white my-2">
                                                <div class="card-header d-flex justify-content-between">
                                                    <div class="img">
                                                        <img :src="'../../../assets/img/' + j.picture" height="50" width="50" alt="">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Title: {{j.job_title}}</h5>
                                                    <p class="card-text">Category: {{j.job_cat}}</p>
                                                    <p class="card-text">Job Description: {{j.job_descrip}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editProfileLabel">Edit Profile</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Profile Picture</label><br>
                                                        <i class="bi bi-camera" style="font-size: 70px; cursor: pointer;" onclick="document.getElementById('picture').click()"></i>
                                                        <input type="file" name="profile" id="picture" class="visually-hidden">
                                                        <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                                                        <input type="email" class="form-control" v-model="firstname" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                                        <input type="email" class="form-control" v-model="lastname" aria-describedby="emailHelp">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" @click="updateProfile">Save changes</button>
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

        <!-- <section class="h-100 gradient-custom-2">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-10 col-xl-10">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="../../../assets/img/Ivana.jpg" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>Andy Horwitz</h5>
                                <p>New York</p>
                            </div>
                        </div>

                        <div class="card-body p-4 text-black mt-5">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">Bio</p>
                                <div class="p-4 bg-dark text-white">
                                    <p class="font-italic mb-1">ADDRESS: USA CORDOVA </p>
                                    <p class="font-italic mb-1">CONTACT: 09123456789</p>
                                    <p class="font-italic mb-0">EMAIL: jelmerogwapo123@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Post</p>
                            </div>

                            <div class="row ">
                                <div class="card bg-dark text-white my-2">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="img">

                                            <img src="../../../assets/img/jane.jpg" height="50" width="50" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">katabang</h5>
                                        <p class="card-text">-kabaw mo luto</p>
                                        <p class="card-text">-kabaw mo laba</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="card bg-dark text-white my-2">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="img">

                                            <img src="../../../assets/img/jane.jpg" height="50" width="50" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">katabang</h5>
                                        <p class="card-text">-kabaw mo luto</p>
                                        <p class="card-text">-kabaw mo laba</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="card bg-dark text-white my-2">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="img">

                                            <img src="../../../assets/img/jane.jpg" height="50" width="50" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">katabang</h5>
                                        <p class="card-text">-kabaw mo luto</p>
                                        <p class="card-text">-kabaw mo laba</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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