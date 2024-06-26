<?php

session_start();
include "../Backend/applicant/applicant.php";

$method = $_POST['method'];
if (function_exists($method)) {
    call_user_func($method);
} else {
    echo 'Function not exists';
}

function jobs()
{
    $applicant = new applicant();
    echo $applicant->jobs();
}
function requiments()
{
    $applicant = new applicant();
    echo $applicant->requiments($_POST['id']);
}

function hireds()
{
    $homeowner = new applicant();
    echo $homeowner->hireds($_SESSION['id']);
}

function applyJob()
{
    $applicant = new applicant();
    echo $applicant->applyJob($_POST['id'], $_SESSION['id']);
}

function updateProfile()
{
    $applicant = new applicant();
    $location = $_SERVER["DOCUMENT_ROOT"] . "/homaid/assets/img/";
    $picture = "";
    if (isset($_FILES["picture"]["name"])) {

        $pictureLocation = $location . $_FILES["picture"]["name"];
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $pictureLocation)) {
            $picture = $_FILES["picture"]["name"];
        }
    }
    echo $applicant->updateProfile($picture, $_POST['firstname'], $_POST['lastname'], $_SESSION['id']);
}

function userLogin()
{
    $applicant = new applicant();
    echo $applicant->userLogin($_SESSION['id']);
}

function reportUsers()
{
    $applicant = new applicant();
    echo $applicant->reportUsers($_SESSION['id'], $_POST['reason'], $_POST['id']);
}

function applicantUsers()
{
    $applicant = new applicant();
    echo $applicant->applicantUsers($_SESSION['id']);
}

function storeApplication()
{
    $applicant = new applicant();

    echo $applicant->storeApplication($_SESSION['id'], $_POST['fullname'], $_POST['age'], $_POST['skills']);
}

function hireRequiments()
{
    $applicant = new applicant();

    echo $applicant->hireRequiments($_SESSION['id']);
}

function myApplication()
{
    $applicant = new applicant();

    echo $applicant->myApplication($_SESSION['id']);
}

function deleteApplication()
{
    $applicant = new applicant();

    echo $applicant->deleteApplication($_POST['id']);
}
