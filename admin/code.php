<?php
session_start();
include '../config/dbconn.php';

// Function to redirect with a message
function redirect($location, $message)
{
  $_SESSION['message'] = $message;
  header("Location: $location");
  exit();
}

// Ensure the user is logged in
if (!isset($_SESSION['auth_user'])) {
  redirect("login.php", "You must be logged in to access this page.");
}

// Retrieve user information from session
$auth_user = $_SESSION['auth_user'];
$email = $auth_user['email'];

// Fetch user data to get existing profile picture
$query = "SELECT * FROM users WHERE email = ?";
$stmt = $con->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Update Profile
if (isset($_POST['update_profile_btn'])) {
  // Sanitize and validate inputs
  $fname = !empty(trim($_POST['fname'])) ? mysqli_real_escape_string($con, trim($_POST['fname'])) : null;
  $lname = !empty(trim($_POST['lname'])) ? mysqli_real_escape_string($con, trim($_POST['lname'])) : null;
  $username = !empty(trim($_POST['username'])) ? mysqli_real_escape_string($con, trim($_POST['username'])) : null;
  $phone = !empty(trim($_POST['phone'])) ? mysqli_real_escape_string($con, trim($_POST['phone'])) : null;
  $country = !empty(trim($_POST['country'])) ? mysqli_real_escape_string($con, trim($_POST['country'])) : null;
  $postcode = !empty(trim($_POST['postcode'])) ? mysqli_real_escape_string($con, trim($_POST['postcode'])) : null;
  $city = !empty(trim($_POST['city'])) ? mysqli_real_escape_string($con, trim($_POST['city'])) : null;
  $street = !empty(trim($_POST['street'])) ? mysqli_real_escape_string($con, trim($_POST['street'])) : null;

  // Ensure required fields are filled
  if (!$fname || !$lname || !$username || !$phone || !$country || !$postcode || !$city || !$street) {
    redirect("edit-profile.php", "All fields are required.");
  }

  // Check for username uniqueness
  if ($username !== $user['username']) {
    $username_check_query = "SELECT * FROM users WHERE username = ?";
    $username_check_stmt = $con->prepare($username_check_query);
    $username_check_stmt->bind_param('s', $username);
    $username_check_stmt->execute();
    $username_check_stmt->store_result();
    if ($username_check_stmt->num_rows > 0) {
      redirect("edit-profile.php", "Username is already taken. Please choose another one.");
    }
  }

  // Handle profile picture upload
  if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
    $file_tmp = $_FILES['profile_pic']['tmp_name'];
    $file_name = basename($_FILES['profile_pic']['name']);
    $file_size = $_FILES['profile_pic']['size'];
    $file_type = mime_content_type($file_tmp);

    // Validate file type (allow only JPEG, PNG, and GIF)
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file_type, $allowed_types)) {
      redirect("edit-profile.php", "Only JPG, PNG, and GIF files are allowed for profile pictures.");
    }

    // Validate file size (e.g., max 2MB)
    if ($file_size > 2 * 1024 * 1024) {
      redirect("edit-profile.php", "Profile picture must be less than 2MB.");
    }

    // Generate a unique file name to prevent overwriting
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid('profile_', true) . '.' . $file_ext;
    $target_dir = "uploads/profile_pics/";
    $target_file = $target_dir . $new_file_name;

    // Create the uploads directory if it doesn't exist
    if (!is_dir($target_dir)) {
      mkdir($target_dir, 0755, true);
    }

    // Move the uploaded file
    if (!move_uploaded_file($file_tmp, $target_file)) {
      redirect("edit-profile.php", "Failed to upload profile picture.");
    }

    // Optionally, delete the old profile picture if it's not the default
    if (!empty($user['profile_pic']) && $user['profile_pic'] !== 'resources/img/avatar/user.svg' && file_exists("../" . $user['profile_pic'])) {
      unlink("../" . $user['profile_pic']);
    }

    // Update profile_pic path relative to the project root
    $profile_pic = 'uploads/profile_pics/' . $new_file_name;
  } else {
    // Keep the existing profile picture
    $profile_pic = !empty($user['profile_pic']) ? $user['profile_pic'] : 'resources/img/avatar/user.svg';
  }

  // Update user data in the database using prepared statements
  $update_query = "UPDATE users SET fname = ?, lname = ?, username = ?, phone = ?, country = ?, postcode = ?, city = ?, street = ?, profile_pic = ? WHERE email = ?";
  $update_stmt = $con->prepare($update_query);
  if (!$update_stmt) {
    redirect("edit-profile.php", "Database error: " . $con->error);
  }
  $update_stmt->bind_param('ssssssssss', $fname, $lname, $username, $phone, $country, $postcode, $city, $street, $profile_pic, $email);

  if ($update_stmt->execute()) {
    // Update session data
    $_SESSION['auth_user']['fname'] = $fname;
    $_SESSION['auth_user']['lname'] = $lname;
    $_SESSION['auth_user']['username'] = $username;
    $_SESSION['auth_user']['phone'] = $phone;
    $_SESSION['auth_user']['country'] = $country;
    $_SESSION['auth_user']['postcode'] = $postcode;
    $_SESSION['auth_user']['city'] = $city;
    $_SESSION['auth_user']['street'] = $street;

    $_SESSION['message'] = "Profile updated successfully!";
    redirect("edit-profile.php", "Profile updated successfully!");
  } else {
    redirect("edit-profile.php", "Failed to update profile. Please try again.");
  }
}

// Change Password
if (isset($_POST['change_pass_btn'])) {
  // Sanitize and validate inputs
  $new_pass = !empty(trim($_POST['new_pass'])) ? trim($_POST['new_pass']) : null;
  $confirm_pass = !empty(trim($_POST['confirm_pass'])) ? trim($_POST['confirm_pass']) : null;

  // Check for required fields
  if (!$new_pass || !$confirm_pass) {
    redirect("edit-profile.php", "Both password fields are required.");
  }

  // Check if passwords match
  if ($new_pass !== $confirm_pass) {
    redirect("edit-profile.php", "Passwords do not match.");
  }

  // Optionally, enforce password strength (e.g., minimum length)
  if (strlen($new_pass) < 6) {
    redirect("edit-profile.php", "Password must be at least 6 characters long.");
  }

  // Hash the new password
  $hashed_password = password_hash($new_pass, PASSWORD_DEFAULT);

  // Update password in the database using prepared statements
  $password_query = "UPDATE users SET password = ? WHERE email = ?";
  $password_stmt = $con->prepare($password_query);
  if (!$password_stmt) {
    redirect("edit-profile.php", "Database error: " . $con->error);
  }
  $password_stmt->bind_param('ss', $hashed_password, $email);

  if ($password_stmt->execute()) {
    $_SESSION['message'] = "Password changed successfully!";
    redirect("edit-profile.php", "Password changed successfully!");
  } else {
    redirect("edit-profile.php", "Failed to change password. Please try again.");
  }
}
