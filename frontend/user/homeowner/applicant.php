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


        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card bg-light text-white rounded">
                            <div class="card-body">
                                <h5 class="card-title text-dark">APPLICANTS</h5>
                                <!-- Table with stripped rows -->
                                <table class="table joblist text-white">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="ha of hiredApplicants">
                                            <th scope="row"><img :src="'../../../assets/img/' +ha.picture" width="60" height="60" class="roundeds" alt=""></th>
                                            <td class="text-capitalize">{{ha.lastname}}, {{ha.firstname}}</td>
                                            <td>{{ha.status == 2 ? 'Hired' : 'Pending'}}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-md  me-1 px-3" @click="sendHiredReq(ha.hired_id)" data-bs-toggle="modal" data-bs-target="#sendReq" :disabled="ha.status == 1">Send Requirements</button>
                                                <button type="button" class="btn btn-primary btn-md col-4" @click="hired(ha.hired_id)" :disabled="ha.status != 1">Hired</button>
                                                <a class="btn btn-md btn-primary ms-1" :href="'/homaid/frontend/chat/chatroom.php?id='+ha.user_id"><i class="bi bi-chat"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="modal fade" id="sendReq" tabindex="-1" aria-labelledby="sendReqLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered text-dark">
                                        <div class="modal-content  bg-light">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="sendReqLabel">Send Requirements</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-12 text-start p-2 rounded">
                                                    <div class="mb-3">
                                                        <label class="my-4">Message the requirements of your job specifications
                                                        </label>
                                                        <textarea class="form-control" v-model="messsageHired" cols="30" rows="10" placeholder="Enter message"></textarea>
                                                    </div>
                                                    <button type="submit" class="float-end px-4 btn btn-primary col-5" @click="requirementsOfHired(idHireReq)">Submit</button>
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
    </div>



    <!-- footer -->
    <footer>
        <div class="fixed-bottom  bg-dark p-0">
            <div class="footer-wrap row p-">
                <div class="col d-flex justify-content-center">
                    <h6 style="color:white">Copyright © HomeAID 2023</h6>
                </div>
            </div>
        </div>
    </footer>
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