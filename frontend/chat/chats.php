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
    <div class="container-fluid bg-white p-0 vh-100" id="chatHub">
        <section id="chatHub">
            <div class="container py-4 mt-1">
                <h1 class="logo me-auto me-lg-0"><a href="../user/index.php">HOME<span class="bg info">AID</span></a></h1>
                <div class="row">
                    <div class=" d-flex justify-content-center align-items-center">

                        <div class="card col-lg-8 col-12" id="chat3" style="border-radius: 15px;">
                            <div class="card-body mt-4">
                                <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 500px; overflow-y: scroll;">
                                    <ul class="list-unstyled mb-0">
                                        <li class="p-2 border-bottom" v-for="al of allUsers">
                                            <a :href="'chatroom.php?id='+al.sender" class="d-flex justify-content-between">
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <img :src="'/homaid/assets/img/'+al.sendPic" alt="avatar" class="border shadow rounded-circle d-flex align-self-center me-3" width="50" height="50">
                                                        <span class="badge bg-success badge-dot"></span>
                                                    </div>
                                                    <div class="pt-1">
                                                        <p class="small text-muted text-capitalize">{{al.lastname}}, {{al.firstname}}</p>
                                                        <p class="small text-muted text-capitalize">{{al.message}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="p-2 border-bottom" v-if="allUsers.length === 0">
                                            <a href="../user/index.php" class="d-flex justify-content-between">
                                                <div class="text-center">
                                                    No Message Yet
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../Assets/assets/js/main.js"></script>
    <script src="/homaid/middleware/vue/axios.js"></script>
    <script src="/homaid/middleware/vue/vue.3.js"></script>
    <script src="/homaid/middleware/chat.js"></script>
</body>

</html>