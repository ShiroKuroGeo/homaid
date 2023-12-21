<?php 

    session_start();
    include "../Backend/users.php";

    $method = $_POST['method'];
    if(function_exists($method)){
        call_user_func($method);
    }
    else{
        echo 'Function not exists';
    }

    function register(){
        $user = new users();
        echo $user->register($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['password']);
    }

    function registerHomeOwner(){
        $user = new users();
        $location = $_SERVER["DOCUMENT_ROOT"] . "/homaid/assets/img/";
        $picture = "";
        $valid = "";
        if (isset($_FILES["homeownerpicture"]["name"]) && isset($_FILES["homeownervalidId"]["name"])) {
    
            $pictureLocation = $location . $_FILES["homeownerpicture"]["name"];
            $finalfile = $location . $_FILES["homeownervalidId"]["name"];
            if (move_uploaded_file($_FILES["homeownerpicture"]["tmp_name"], $pictureLocation) && move_uploaded_file($_FILES["homeownervalidId"]["tmp_name"], $finalfile)) {
                $picture = $_FILES["homeownerpicture"]["name"];
                $valid = $_FILES["homeownervalidId"]["name"];
            }
        }
        echo $user->registerHomeOwner($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['password'], $picture, $valid);
    }

    function login(){
        $user = new users();
        echo $user->login($_POST['username'],$_POST['password']);
    }

?>