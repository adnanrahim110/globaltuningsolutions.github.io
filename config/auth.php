<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include('dbconn.php');
include('../functions/myfunctions.php');

if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Secure the password comparison using password hashing
    $login_query = "SELECT * FROM users WHERE email= '$email' AND password= '$password'";
    $login_query_run = mysqli_query($con, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $userdata = mysqli_fetch_array($login_query_run);

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = ['email' => $userdata['email']];
        $_SESSION['role_as'] = $userdata['role_as'];

        if ($_SESSION['role_as'] == 0) {
            redirect("../user/index.php", "Welcome to User Dashboard");
        } elseif ($_SESSION['role_as'] == 1) {
            redirect("../admin/index.php", "Welcome to Admin Dashboard");
        } else {
            redirect("../index.php", "Sorry you are not authorized");
        }
    } else {
        redirect("../login.php", "Invalid Credentials");
    }
}

if (isset($_POST['register_btn'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already registered";
        header('location: ../register.php');
    } else {
        if ($password == $cpassword) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_query = "INSERT INTO users (fname, lname, email, phone, password) VALUES ('$fname', '$lname', '$email', '$phone', '$hashed_password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header('location: ../login.php');
            } else {
                $_SESSION['message'] = "Something Went Wrong";
                header('location: ../register.php');
            }
        } else {
            $_SESSION['message'] = "Passwords do not match";
            header('location: ../register.php');
        }
    }
}
ob_end_flush();
?>