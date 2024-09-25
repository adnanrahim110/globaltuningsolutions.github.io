<?php
include('../config/dbconn.php');
session_start();

// Check if the payment has been approved and the session user is authenticated
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['auth_user'])) {
  $user_id = $_SESSION['auth_user']['id']; // Current user ID from session
  $credits = $_POST['credits'];            // Credits from the purchase
  $price = $_POST['price'];                // Price of the credits

  // Fetch user data
  $query = "SELECT credits, role_as FROM users WHERE id = ?";
  $stmt = $con->prepare($query);
  $stmt->bind_param("i", $user_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  $stmt->close();

  // Check if the user is valid
  if ($user) {
    $current_credits = $user['credits'];
    $role_as = $user['role_as'];

    // Update credits for normal users (role_as = 0) after successful payment
    if ($role_as == 0) {
      $new_credits = $current_credits + $credits;

      // Update the user's credits in the database
      $update_query = "UPDATE users SET credits = ? WHERE id = ?";
      $update_stmt = $con->prepare($update_query);
      $update_stmt->bind_param("ii", $new_credits, $user_id);
      if ($update_stmt->execute()) {
        // Redirect to success page with a thank you message
        redirect('thankyou.php', 'Thank you for your purchase! You have now ' . $new_credits . ' credits.', 'success');
      } else {
        // Handle update failure
        redirect('payment.php', 'Error updating credits. Please contact support.', 'danger');
      }
      $update_stmt->close();
    } else {
      // Handle if user is an admin
      redirect('payment.php', 'Admins cannot purchase credits this way.', 'danger');
    }
  } else {
    // Handle invalid user
    redirect('payment.php', 'User not found. Please log in again.', 'danger');
  }
} else {
  redirect('payment.php', 'Invalid request. Please try again.', 'danger');
}