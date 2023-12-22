<?php
session_start();

if ($_SESSION['role'] == 2) {
    header('location: homeowner/index.php');
}else if($_SESSION['role'] == 1){
    header('location: applicant/index.php');
}
?>