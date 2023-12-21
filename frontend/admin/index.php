<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Homeaid Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/homaid/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/homaid/assets/assets/css/style.css" rel="stylesheet">


</head>

<body>
    <div id="admin-admin">

        <header id="header" class="header fixed-top d-flex align-items-center   ">

            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="d-none d-lg-block">HOMEAID</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">


                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img :src="'/homaid/assets/img/'+picture" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{fullname}}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{fullname}}</h6>
                                <span>Admin</span>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/homaid/backend/logout.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul>
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header>

        <?php include('sidebar.php'); ?>

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <section class="section dashboard">
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-8">
                        <div class="row">

                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">

                                    <div class="card-body">
                                        <h5 class="card-title">User</h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{countAdmin}}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->

                            <!-- Revenue Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card revenue-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Post Jobs</h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-search"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{jobsCount}}</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Revenue Card -->

                            <!-- Customers Card -->
                            <div class="col-xxl-4 col-xl-12">

                                <div class="card info-card customers-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Reports</h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-exclamation-triangle-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>{{reportsCount}}</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>
                                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Recent User</h5>

                                <div class="activity" v-for="u of users">

                                    <div class="activity-item mb-4 d-flex">
                                        <div class=""><img :src="'../../assets/img/' + u.picture" width="60" height="60" class="rounded"></div>
                                        <div class="activity-content">{{u.lastname}}, {{u.firstname}} <br> {{u.email}}</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </main><!-- End #main -->

    </div>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>HOMEMAID</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/homaid/assets/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/homaid/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/homaid/assets/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/homaid/assets/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/homaid/assets/assets/vendor/quill/quill.min.js"></script>
    <script src="/homaid/assets/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/homaid/assets/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/homaid/assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/homaid/assets/assets/js/main.js"></script>

    <script src="../../middleware/vue/vue.3.js"></script>
    <script src="../../middleware/vue/axios.js"></script>
    <script src="../../middleware/admin/admin.js"></script>

</body>

</html>