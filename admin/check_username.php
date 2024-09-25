<?php
include '../config/dbconn.php';

if (isset($_POST['username'])) {
  $username = $_POST['username'];

  // Check if the username exists in the database
  $query = "SELECT username FROM users WHERE username = ?";
  $stmt = $con->prepare($query);
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    echo "Username is already taken.";
  } else {
    echo "Username is available.";
  }

  $stmt->close();
}
