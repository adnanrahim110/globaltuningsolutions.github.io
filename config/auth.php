<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include('dbconn.php');
include('../functions/myfunctions.php');

// Login Functionality
if (isset($_POST['login_btn'])) {
    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        // Fetch the user data based on email
        $login_query = "SELECT * FROM users WHERE email= '$email' LIMIT 1";
        $login_query_run = mysqli_query($con, $login_query);

        if (mysqli_num_rows($login_query_run) > 0) {
            $userdata = mysqli_fetch_array($login_query_run);

            if ($userdata['verify_status'] == "1") {

                // Use password_verify to compare the provided password with the hashed password
                if (password_verify($password, $userdata['password'])) {
                    $_SESSION['auth'] = true;
                    $_SESSION['auth_user'] = [
                        'id' => $userdata['id'],
                        'username' => $userdata['username'],
                        'fname' => $userdata['fname'],
                        'lname' => $userdata['lname'],
                        'name' => $userdata['fname'] . ' ' . $userdata['lname'],
                        'email' => $userdata['email'],
                        'phone' => $userdata['phone'],
                        'country' => $userdata['country'],
                        'profile_pic' => $userdata['profile_pic'],
                        'city' => $userdata['city'],
                    ];
                    $_SESSION['role_as'] = $userdata['role_as'];

                    if ($_SESSION['role_as'] == 0) {
                        redirect("../user/dashboard", "Welcome to User Dashboard", 'success');
                    } elseif ($_SESSION['role_as'] == 1) {
                        redirect("../admin/dashboard", "Welcome to Admin Dashboard", 'success');
                    } else {
                        redirect("../index", "Sorry you are not authorized", 'danger');
                    }
                } else {
                    redirect("../login", "Invalid Password", 'warning');
                }
            } else {
                redirect("../login", "Please verify your Email Address to Login", 'warning');
            }
        } else {
            redirect("../login", "Invalid Credentials", 'danger');
            exit(0);
        }
    } else {
        redirect("../login", "All fields are required", 'warning');
        exit(0);
    }
}

// Registration Functionality
if (isset($_POST['register_btn'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $verify_token = md5(rand());
    $name = $fname . ' ' . $lname;

    // Check if email already exists
    $check_email_query = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        redirect('../register', "Email ID already Exists", 'warning');
    } else {
        if ($password == $cpassword) {
            // Hash the password before storing it
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Auto-generate a unique username
            $username = strtolower($fname);
            $username_check_query = "SELECT username FROM users WHERE username LIKE '$fname%' ORDER BY username DESC LIMIT 1";
            $username_check_query_run = mysqli_query($con, $username_check_query);

            if (mysqli_num_rows($username_check_query_run) > 0) {
                $last_username_row = mysqli_fetch_assoc($username_check_query_run);
                $last_username = $last_username_row['username'];
                preg_match('/(\d+)$/', $last_username, $matches);
                $next_number = isset($matches[1]) ? (int) $matches[1] + 1 : 1;
                $username = strtolower($fname . $next_number);
            }

            // Insert new user into database
            $insert_query = "INSERT INTO users (fname, lname, username, email, phone, password, verify_token) VALUES ('$fname', '$lname', '$username', '$email', '$phone', '$hashed_password', '$verify_token')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run) {
                sendemail_verify("$name", "$email", "$verify_token");
                redirect('../register', "Registration Successful! Please verify your Email Address.", 'success');
            } else {
                redirect('../register', "Registration Failed", 'danger');
            }
        } else {
            redirect('../register', "Passwords do not match", 'warning');
        }
    }
}

if (isset($_POST['forget_pass_btn'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {

        $update_pass = mysqli_fetch_array($check_email_run);
        $get_name = $update_pass['fname'] . ' ' . $update_pass['lname'];
        $get_email = $update_pass['email'];

        $update_token = "UPDATE users SET verify_token= '$token' WHERE email = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if ($update_token_run) {

            sendemail_reset_pass($get_name, $get_email, $token);
            redirect('../forgot-password', 'We e-mailed you with a reset link. Check your inbox.', 'success');
            exit(0);
        } else {

            redirect('../forgot-password', 'Something went wrong. #1', 'danger');
            exit(0);
        }
    } else {
        redirect('../forgot-password', 'Email Not Found', 'warning');
        exit(0);
    }
}

if (isset($_POST['change_pass_btn'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    $token = mysqli_real_escape_string($con, $_POST['pass_reset_token']);

    if (!empty($token)) {

        if (!empty($email) && !empty($new_password) && !empty($confirm_password)) {

            $check_token = "SELECT verify_token FROM users WHERE verify_token = '$token' LIMIT 1";
            $check_token_run = mysqli_query($con, $check_token);

            if (mysqli_num_rows($check_token_run) > 0) {

                if ($new_password == $confirm_password) {

                    // Hash the new password before updating
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                    $update_password = "UPDATE users SET password = '$hashed_password' WHERE verify_token = '$token' LIMIT 1";
                    $update_password_run = mysqli_query($con, $update_password);

                    if ($update_password_run) {

                        $new_token = "updated_token" . md5(rand());
                        $update_to_new_token = "UPDATE users SET verify_token = '$new_token' WHERE verify_token = '$token' LIMIT 1";
                        $update_to_new_token_run = mysqli_query($con, $update_to_new_token);

                        redirect('../login', 'Password changed successfully. Please login.', 'success');
                        exit(0);
                    } else {
                        redirect("../change_password.php?token=$token&email=$email", 'Password change failed. Something went wrong', 'danger');
                        exit(0);
                    }
                } else {
                    redirect("../change_password.php?token=$token&email=$email", 'Passwords do not match', 'warning');
                    exit(0);
                }
            } else {
                redirect("../change_password.php?token=$token&email=$email", 'Invalid Token', 'danger');
                exit(0);
            }
        } else {
            redirect("../change_password.php?token=$token&email=$email", 'All Fields are required', 'warning');
            exit(0);
        }
    } else {
        redirect('../change_password', 'No Token Available', 'danger');
        exit(0);
    }
}


ob_end_flush();
