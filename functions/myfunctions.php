<?php 

    // Including the database connection file
    include("../config/dbconn.php");

    // Function to get all records from a table
    function getAll($table) {
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
    function getById($table, $id) {
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

    // Function to redirect to a specified URL with a message
    function redirect($url, $message) {
        session_start(); // Starting session to use session variables
        $_SESSION['message'] = $message;
        header('location: '.$url);
        exit(0); // Ensure no further code is executed after redirection
    }

?>
