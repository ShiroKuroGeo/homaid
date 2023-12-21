<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>applicant</title>
    <!-- <link rel="stylesheet" href="../../../assets/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="../../../assets/css/homeowner.css"> -->
    <link rel="stylesheet" href="../../../assets/css/index.css">
    <link rel="stylesheet" href="../../../assets/css/bts2.css">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid p-0" id="homeaid-applicant">
        <div class="container-fluid" style="margin: 0; padding: 0;">
            <nav class="navbar navbar-expand-lg " style="background-color: #000;">
                <div class="container-fluid text-white">
                    <a class="navbar-brand text-white" href="#">HOME<span style="color:#0A9DF0;">AID</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white text-capitalize" href="chat.php">chat</a>
                            </li>
                            <li class="nav-item btn-group">
                                <a class="nav-link text-white text-capitalize" data-bs-toggle="dropdown" aria-expanded="false" href="#">category</a>
                                <ul class="dropdown-menu bg-dark">
                                    <li><a class="dropdown-item text-white" href="#">Babysitter</a></li>
                                    <li><a class="dropdown-item text-white" href="#">Cooking</a></li>
                                    <li><a class="dropdown-item text-white" href="#">Handle Clothes</a></li>
                                    <li><a class="dropdown-item text-white" href="#">House Keeper</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link text-white" id="reports" data-bs-toggle="dropdown" aria-expanded="false" href="#">Notification</a>
                                <ul class="dropdown-menu bg-dark text-white p-4" aria-labelledby="reports" style="overflow-y: scroll; height: 100vh">
                                    <li class="dropdown-header">
                                        You have 4 new notifications
                                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View
                                                all</span></a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                    <a class=" nav-link" href="#" data-bs-toggle="dropdown">
                        <img src="../../../assets/img/Ivana.jpg" height="40" width="40" alt="P" class="rounded-circle">
                        <span class="ps-2 text-white text-capitalize">{{fullname}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-dark">
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center text-white" href="profile2.php">
                                <i class="bi bi-person "></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center text-white" href="/homaid/backend/logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
    </div>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
                    <h2>We are team of talented digital marketers</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="">Lorem Ipsum</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3><a href="">Dolor Sitema</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="">Sedare Perspiciatis</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-paint-brush-line"></i>
                        <h3><a href="">Magni Dolores</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-database-2-line"></i>
                        <h3><a href="">Nemos Enimade</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <div class="col-xl-4 col-lg-4 col-12 m-3" v-for="j of job">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card with an image on left</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../../middleware/vue/vue.3.js"></script>
<script src="../../../middleware/vue/axios.js"></script>
<script src="../../../middleware/applicant/applicant.js"></script>

</html>