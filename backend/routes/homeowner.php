<?php 

    session_start();
    include "../Backend/homeowner/homeowner.php";

    $method = $_POST['method'];
    if(function_exists($method)){
        call_user_func($method);
    }
    else{
        echo 'Function not exists';
    }

    function getAllApplicant(){
        $homeowner = new homeowner();
        echo $homeowner->getAllApplicant();
    }

    function applicantsProfile(){
        $homeowner = new homeowner();
        echo $homeowner->applicantsProfile($_POST['id']);
    }

    function MyProfile(){
        $homeowner = new homeowner();
        echo $homeowner->MyProfile($_SESSION['id']);
    }

    function hireds(){
        $homeowner = new homeowner();
        echo $homeowner->hireds($_SESSION['id']);
    }

    function hiredThisPerson(){
        $homeowner = new homeowner();
        echo $homeowner->hiredThisPerson($_SESSION['id'], $_POST['id']);
    }

    function hired(){
        $homeowner = new homeowner();
        echo $homeowner->hired($_POST['id']);
    }

    function comment(){
        $homeowner = new homeowner();
        echo $homeowner->comment($_POST['id'], $_SESSION['id'], $_POST['comment']);
    }

    function profileDetails(){
        $homeowner = new homeowner();
        echo $homeowner->profileDetails($_SESSION['id']);
    }

    function jobPostedDetails(){
        $homeowner = new homeowner();
        echo $homeowner->jobPostedDetails($_SESSION['id']);
    }

    function applicantApplying(){
        $homeowner = new homeowner();
        echo $homeowner->applicantApplying($_SESSION['id']);
    }

    function allComment(){
        $homeowner = new homeowner();
        echo $homeowner->allComment($_POST['id']);
    }

    function updateApplicantApplying(){
        $homeowner = new homeowner();
        echo $homeowner->updateApplicantApplying($_POST['id']);
    }
    
    function storeJobs(){
        $homeowner = new homeowner();
        echo $homeowner->storeJobs($_SESSION['id'],$_POST['jobTitle'],$_POST['jobCategory'],$_POST['jobDescrip'], $_POST['types'], $_POST['jobLocation']);
    }

    function requirementsOfApplying(){
        $homeowner = new homeowner();
        echo $homeowner->requirementsOfApplying($_POST['applyId'], $_POST['user_id'], $_POST['message']);
    }
    
    function requirementsOfHired(){
        $homeowner = new homeowner();

        echo $homeowner->requirementsOfHired($_POST['message'], $_POST['id']);
    }

?>