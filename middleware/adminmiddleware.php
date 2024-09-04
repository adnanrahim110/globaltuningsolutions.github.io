<?php
session_start();
include('../functions/myfunctions.php');

if (isset($_SESSION['auth'])) {

    if ($_SESSION['role_as'] != 1 && $_SESSION['role_as'] != 0) {

        redirect("../index.php", "You are Not Allowed");

    }
} else {
    redirect("../login.php", "login to continue");
}
?>