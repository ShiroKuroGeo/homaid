<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
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
    <div id="homeaid-applicant">
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
                        <a class="dropdown-item d-flex align-items-center text-white" href="history.php">
                            <i class="bi bi-chat me-3"></i>
                            <span>History</span>
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
        <section class="vh-100" id="hero">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-md-9 col-lg-7 col-xl-5">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <div class="d-flex text-black">
                                    <div class="flex-shrink-0">
                                        <img :src="'../../../assets/img/'+picture" alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-1 text-capitalize">{{vlastname}},{{vfullname}}</h5>
                                        <p class="mb-2 pb-1 text-capitalize" style="color: #2b2a2a;">{{email}}</p>
                                        <div class="d-flex justify-content-evenly rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                            <div>
                                                <p class="small text-muted mb-1">Status</p>
                                                <p class="mb-0">{{status == 1 ? 'Approved' : 'Decline'}}</p>
                                            </div>
                                            <div class="px-3">
                                                <p class="small text-muted mb-1">Applied</p>
                                                <p class="mb-0">{{applicantUsers.length}}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-1">
                                            <button type="button" class="btn btn-outline-primary me-1 flex-grow-1" data-bs-toggle="modal" data-bs-target="#postApplication">Post</button>
                                            <a href="myApplication.php" class="btn btn-outline-warning me-1 flex-grow-1">View</a>
                                            <a href="myApplication.php" class="btn btn-outline-info me-1 flex-grow-1" data-bs-toggle="modal" data-bs-target="#editProfile">Edit Profile</a>
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
                                                            <input type="file" name="profile" id="picture" class="visually-hidden" required>
                                                            <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                                                            <input type="email" class="form-control" id="email" name="id" v-model="vfullname" aria-describedby="emailHelp" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                                            <input type="email" class="form-control" v-model="vlastname" aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" @click="updateProfile">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="postApplication" tabindex="-1" aria-labelledby="postApplicationLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="postApplicationLabel">Post Application</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                        <div class="d-flex justify-content-between align-items-between">
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1" class="form-label">Fullname</label>
                                                                <input type="text" v-model="fullname" class="form-control" id="exampleInputPassword1">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                                                <input type="number" v-model="age" class="form-control" id="exampleInputPassword1">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Skills</label>
                                                            <textarea class="form-control" v-model="skills" cols="30" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" @click="storeApplication">Post Application</button>
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
            </div>
        </section>
        <!-- <section id="hero" class="h-100 gradient-custom-2">
            <div class="container-fluid py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-10 col-xl-10">
                        <div class="card">
                            <div class="rounded-top text-white d-flex flex-row bg-dark" style=" height:200px;">
                                <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                    <img src="../../../assets/img/Ivana.jpg" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                    <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                        Edit profile
                                    </button>
                                </div>
                                <div class="ms-3" style="margin-top: 130px;">
                                    <h5>{{fullname}}</h5>
                                    <p>{{email}}</p>
                                </div>
                            </div>
                            <div class="p-4 text-black" style="background-color: #f8f9fa;">
                                <div class="d-flex justify-content-end text-center py-1">
                                    <div class="px-3">
                                        <button type="button" class="btn btn-primary">Resume</button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Validation</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4 text-black">
                                <div class="mb-5">
                                    <p class="lead fw-normal mb-1">About Me:</p>
                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <p class="font-italic mb-1">NAME: <span class="text-capitalize">{{fullname}}</span> </p>
                                        <p class="font-italic mb-0">Skills:</p>
                                        <ol>
                                            <li>asd</li>
                                        </ol>
                                        <button class="btn btn-md btn-primary px-4" data-bs-toggle="modal" data-bs-target="#updatedSkill">Update
                                            Skills</button>
                                        <div class="modal fade" id="updatedSkill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Skills</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <textarea v-model="skills" id="" class="form-control" rows="4"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Update changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0 text-capitalize">comments</p>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2">
                                        <div class="card bg-dark text-white my-2">
                                            <div class="card-header d-flex justify-content-between">
                                                <div class="img ">
                                                    <img src="../../../assets/img/jane.jpg" height="50" width="50" alt=""><span class:="mx-2">jelmerogwapo123</span>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Rate:</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to
                                                    additional content.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script src="../../../middleware/vue/vue.3.js"></script>
<script src="../../../middleware/vue/axios.js"></script>
<script src="../../../middleware/applicant/applicant.js"></script>
<!-- Vendor JS Files -->
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