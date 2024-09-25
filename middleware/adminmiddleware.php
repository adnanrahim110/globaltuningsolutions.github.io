<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('../functions/myfunctions.php');

if (isset($_SESSION['auth'])) {

    if ($_SESSION['role_as'] != 1 && $_SESSION['role_as'] != 0) {

        redirect("../index", "You are Not Allowed");
        exit(0);
    }
} elseif (!isset($_SESSION['auth'])) {
    redirect("../login", "login to continue");
    exit(0);
} else {
    redirect("../login", "login to continue");
    exit(0);
}
