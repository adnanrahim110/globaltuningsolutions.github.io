<?php

include("../config/dbconn.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Function to get all records from a table
function getAll($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        return $query_run;
    } else {
        // Handle query error
        die("Query Failed: " . mysqli_error($con));
    }
}

// Function to get a record by its ID
function getById($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        return $query_run;
    } else {
        // Handle query error
        die("Query Failed: " . mysqli_error($con));
    }
}


// Reusable function to get a name by table and id
function getNameById($con, $table, $column, $id_column, $id)
{
    $query = "SELECT $column FROM $table WHERE $id_column = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc()[$column];
}
// Function to redirect to a specified URL with a message
function redirect($url, $message, $messageType = 'warning')
{
    header('Location: ' . $url); // Redirect to the specified URL
    $_SESSION['message'] = $message; // Store message in session
    $_SESSION['message_type'] = $messageType; // Store message type in session
    exit(0); // Stop script execution after redirection
}

function sendemail_verify($name, $email, $verify_token)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'arkaka0092@gmail.com';
    $mail->Password = 'lual vllh jirr xewg';

    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom('arkaka0092@gmail.com', $name);
    $mail->addAddress($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'Email verification from Global Tuning Solutions';

    $email_template = "
        <h2>You have registered with Global Tuning Solutions</h2>
        <h5>Click below link to verify your email</h5>
        <br/><br/>
        <a href='http://localhost/others/globaltuningsolutions.github.io/config/verify-email.php?token=$verify_token'>
            Verify Email
        </a>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';
}

function sendemail_reset_pass($get_name, $get_email, $token)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'arkaka0092@gmail.com';
    $mail->Password = 'lual vllh jirr xewg';

    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom('arkaka0092@gmail.com', $get_name);
    $mail->addAddress($get_email, $get_name);

    $mail->isHTML(true);
    $mail->Subject = 'Reset Password';

    $email_template = "
        <h2>Hello</h2>
        <h3>You recieving this email because beacause we have recieved a request to reset your password from you account.</h3>
        <br/><br/>
        <a href='http://localhost/others/globaltuningsolutions.github.io/change_password.php?token=$token&email=$get_email'>
            Click here to reset your password
        </a>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';
}
