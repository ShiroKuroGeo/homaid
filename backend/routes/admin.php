<?php 

    session_start();
    include "../Backend/admin/admin.php";

    $method = $_POST['method'];
    if(function_exists($method)){
        call_user_func($method);
    }
    else{
        echo 'Function not exists';
    }

    function users(){
        $admin = new admin();
        echo $admin->users();
    }

    function getID(){
        $admin = new admin();
        echo $admin->getID($_SESSION['id']);
    }

    function usersCount(){
        $admin = new admin();
        echo $admin->usersCount();
    }

    function jobsCount(){
        $admin = new admin();
        echo $admin->jobsCount();
    }

    function allReported(){
        $admin = new admin();
        echo $admin->allReported();
    }

    function reportsCount(){
        $admin = new admin();
        echo $admin->reportsCount();
    }

    function requestHomowner(){
        $admin = new admin();
        echo $admin->requestHomowner();
    }

    function changeStatus(){
        $admin = new admin();
        echo $admin->changeStatus($_POST['id'],$_POST['status']);
    }
    
    function reportToRestrict(){
        $admin = new admin();
        echo $admin->reportToRestrict($_POST['id']);
    }

?>