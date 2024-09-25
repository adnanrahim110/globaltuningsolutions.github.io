<?php
// add-credit-package.php

// Include the database connection
include('../config/dbconn.php');

// Start session
session_start();

// Redirect function
function redirect($url, $message, $messageType = 'warning')
{
  $_SESSION['message'] = $message; // Store message in session
  $_SESSION['message_type'] = $messageType; // Store message type in session
  header('Location: ' . $url); // Redirect to the specified URL
  exit(); // Stop script execution after redirection
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Sanitize and validate input
  $credits = intval($_POST['credits']);
  $price = floatval($_POST['price']);

  // Validation: Check if credits and price are valid numbers
  if ($credits <= 1) {
    redirect('admin-credits.php', 'Credits must be greater than 1.', 'danger');
  } elseif ($price <= 0) {
    redirect('admin-credits.php', 'Price must be a positive number.', 'danger');
  } else {
    // Prepare the query to insert the new package
    $query = "INSERT INTO credit_prices (credits, price) VALUES (?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("id", $credits, $price);

    if ($stmt->execute()) {
      redirect('admin-credits.php', 'New credit package added successfully!', 'success');
    } else {
      redirect('admin-credits.php', 'Failed to add package. Try again.', 'danger');
    }
  }
} else {
  redirect('admin-credits.php', 'Invalid request.', 'danger');
}
