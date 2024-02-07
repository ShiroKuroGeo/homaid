<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/homeowner.css">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
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
                            <a class="nav-link text-white" href="#">CHAT</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link text-white" id="reports" data-bs-toggle="dropdown" aria-expanded="false" href="#">Notification</a>
                            <ul class="dropdown-menu bg-dark text-white p-4" aria-labelledby="reports" style="overflow-y: scroll; height: 100vh">
                                <li class="dropdown-header">
                                    You have 4 new notifications
                                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="notification-item">
                                    <i class="bi bi-exclamation-circle text-warning"></i>
                                    <div>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>30 min. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="notification-item">
                                    <i class="bi bi-x-circle text-danger"></i>
                                    <div>
                                        <h4>Atque rerum nesciunt</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>1 hr. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="notification-item">
                                    <i class="bi bi-check-circle text-success"></i>
                                    <div>
                                        <h4>Sit rerum fuga</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>2 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li class="notification-item">
                                    <i class="bi bi-info-circle text-primary"></i>
                                    <div>
                                        <h4>Dicta reprehenderit</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">Show all notifications</a>
                                </li>


                            </ul>
                        </li>
                </div>
                <a class=" nav-link" href="#" data-bs-toggle="dropdown">
                    <img src="../../../assets/img/Ivana.jpg" height="40" width="40" alt="P" class="rounded-circle">
                    <!-- <span class="ps-2 text-white">{{ fullname }}sadasd</span> -->
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
                        <a class="dropdown-item d-flex align-items-center text-white" href="history.php">
                            <i class="bi bi-chat me-3"></i>
                            <span>History</span>
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

    <!-- resume -->
    <div class="container mt-2 rounded" id="homeaid-applicant">
        <header class="bg-primary bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-left text-md-center ">
                        <img class="rounded-circle img-fluid" src="https://i.pravatar.cc/175?img=32" alt="Profile Photo" />
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-md border-bottom" name="name" id="name" placeholder="Name">

                        <p class="border-top pt-3">
                            <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="About">
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <nav class="bg-dark text-white-50 ">
            <div class="container">
                <div class="row p-3">
                    <div class="col-md pb-2 pb-md-0">
                        <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                    </div>
                    <div class="col-md text-md-center pb-2 pb-md-0">
                        <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Address">
                    </div>
                    <div class="col-md text-md-right">
                        <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Phone number">
                    </div>
                </div>
            </div>
        </nav>
        <main class="container bg-dark text-white">
            <div class="row">
                <div class="col-md mb-5">
                    <!-- work experience -->
                </div>
                <div class="col-md mb-5">
                    <!-- education -->
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-5">
                    <!-- skills -->
                </div>
                <div class="col-md">
                    <!-- recent work -->
                </div>
            </div>
            <h2 class="mb-5">Personal information</h2>
            <ul>
                <li>
                    <h6 class="text-primary"></h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>
                <li>
                    <h6 class="text-primary"></h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>
                <li>
                    <h6 class="text-primary"></h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>
                <li>
                    <h6 class="text-primary"></h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>
                <li>
                    <h6 class="text-primary"></h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>
                <li>
                    <h6 class="text-primary"></h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>

            </ul>
            <h2 class="mb-5">Education background</h2>
            <ul>
                <li>
                    <h6 class="text-white">COLLEGE</h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>
                <li>
                    <h6 class="text-white">SECONDARY</h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>
                <li>
                    <h6 class="text-white">PRIMARY</h6>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>

            </ul>
            <h2 class="mb-5">Skill</h2>
            <ul>
                <li>
                    <input type="text" class="form-control form-control-md border-bottom" name="about" id="about" placeholder="Email">
                </li>

            </ul>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
<script src="../../../middleware/vue/vue.3.js"></script>
<script src="../../../middleware/vue/axios.js"></script>
<script src="../../../middleware/applicant/applicant.js"></script>

</html>