<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

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
    <div class="container-fluid overflow-hidden bg-white vh-100" id="chatHub">
        <div class="container-xxl py-5">
            <section>
                <div class="container py-2">

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="card" id="chat1" style="border-radius: 15px;">
                                <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                    <a href="chats.php" class="text-white fw-bold"><</a>
                                            <p class="mb-0 fw-bold">{{fullname}}</p>
                                            <a href="chats.php" class="text-white fw-bold">x</a>
                                </div>
                                <div class="card-body">
                                    <div class="chats overflow-auto" style="height: 250px;">
                                        <div v-for="a of allMessage" :class="a.sender != <?php echo $_SESSION['id'] ?> ? 'd-flex flex-row justify-content-start mb-4' : 'd-flex flex-row justify-content-end mb-4'">
                                            <div v-if="a.sender == <?php echo $_SESSION['id'] ?>" class="d-flex">
                                                <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                                                    <p class="small mb-0">{{a.message}}</p>
                                                </div>
                                                <img :src="'/homaid/assets/img/'+a.sendPic" class="rounded-circle me-2" alt="avatar 1" style="width: 45px; height: 100%;">
                                            </div>
                                            <div v-if="a.sender != <?php echo $_SESSION['id'] ?>" class="d-flex">
                                                <img :src="'/homaid/assets/img/'+a.sendPic" class="rounded-circle me-2" alt="avatar 1" style="width: 45px; height: 100%;">
                                                <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                                                    <p class="small mb-0">{{a.message}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mt-3">
                                        <textarea class="form-control" id="textAreaExample" rows="4" v-model="message" placeholder="Test your Messages"></textarea>
                                        <button class="btn btn-sm btn-primary mt-3 px-4" @click="thisId">Send</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
    <script src="../../Assets/assets/js/main.js"></script>
    <script src="../../middleware/vue/axios.js"></script>
    <script src="../../middleware/vue/vue.3.js"></script>
    <script src="../../middleware/chat.js"></script>
</body>

</html>