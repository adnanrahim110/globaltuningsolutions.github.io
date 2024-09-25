<?php
$message = isset($_GET['message']) ? $_GET['message'] : 'Thank you for your purchase!';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You!</title>
</head>

<body>
  <h1><?php echo $message; ?></h1>
  <?php
  if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-{$_SESSION['message_type']}'>";
    echo $_SESSION['message'];
    echo "</div>";
    unset($_SESSION['message']); // Clear the message after displaying
    unset($_SESSION['message_type']); // Clear the message type
  }
  ?>

  <a href="index.php">Return to the Homepage</a>
  <p>Your credits have been successfully added to your account.</p>
</body>

</html>