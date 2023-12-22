<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
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

        <section class="h-100 gradient-custom-2" v-for="p of profileApplicants">
            <div class="container-fluid py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-10 col-xl-10">
                        <div class="card">
                            <div class="rounded-top text-white d-flex flex-row bg-dark" style=" height:200px;">
                                <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                    <img :src="'../../../assets/img/' + p.picture" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                </div>

                                <div class="ms-3" style="margin-top: 130px;">
                                    <h5>{{p.lastname}}, {{p.firstname}}</h5>
                                    <p>{{p.role == 2 ? 'Home Owner': p.role == 3 ? 'Applicant' : 'Admin'}}</p>
                                </div>
                            </div>
                            <div class="p-4 text-black" style="background-color: #f8f9fa;">
                                <div class="d-flex justify-content-end text-center py-1">
                                    <div class="px-1 col-2">
                                        <button type="button" class="btn btn-primary col-12" @click="message(p.user_id)">Message</button>
                                    </div>
                                    <div class="px-1 col-2">
                                        <button class="btn btn-primary col-12" @click="hireThisPersion(p.user_id)">Hire</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body row p-4 text-black">
                                <div class="mb-5 col-5 border bg-light">
                                    <div class="p-5">
                                        <div class="information mb-5">
                                            <div class="mb-2">Name: {{p.lastname}}, {{p.firstname}}</div>
                                            <div class="mb-2">Age: {{p.age}}</div>
                                        </div>
                                        <div class="skills">
                                            <div class="mb-2 fw-bold">Skills</div>
                                            <div class="mb-2 ms-4">{{p.skills}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-7 border bg-light">
                                    <div class="p-3">
                                        <div class="form mb-5">
                                            <textarea name="comments" id="" cols="30" rows="4" class="form-control" v-model="comment"></textarea>
                                            <button class="btn btn-sm btn-outline-info float-end mt-2" @click="thisPersonsComment(p.user_id)">Comment</button>
                                        </div>
                                        <div class="comments mt-5 border p-3" style="height: 350px; overflow-y: scroll">
                                            <div class="commentCard border-bottom my-2" v-for="cd of CommentData">
                                                <div class="d-flex flex-start align-items-center">
                                                    <img class="rounded-circle shadow-1-strong me-3" :src="'../../../assets/img/' + cd.picture" alt="avatar" width="60" height="60" />
                                                    <div>
                                                        <h6 class="fw-bold text-primary mb-1">{{cd.lastname}}, {{cd.firstname}} </h6>
                                                        <p class="text-muted small mb-0">
                                                            {{cd.created_at}}
                                                        </p>
                                                    </div>
                                                </div>

                                                <p class="mt-3 mb-4 p-3">{{cd.comment}}</p>
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
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