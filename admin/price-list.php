<!doctype html>
<html lang="en">
<?php $title = 'Price List'; ?>
<?php $page_title = 'Price List'; ?>
<?php include 'partials/head.php'; ?>
<link rel="stylesheet" href="resources/css/mycss.css">
<?php
// Include the database connection
include('../config/dbconn.php');
// Handle form submission for updating credits and prices
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
  // Sanitize and validate input
  $id = intval($_POST['id']);
  $credits = isset($_POST['credits']) ? intval($_POST['credits']) : 1; // Default to 1 for the first row
  $price = floatval($_POST['price']);

  // Validation: Check if credits and price are valid numbers
  if ($credits <= 0 || $price <= 0) {
    redirect('admin-credits.php', 'Credits and Price must be positive numbers.', 'danger');
  } else {
    // Prepare the query to update the price and credits
    $query = "UPDATE credit_prices SET credits = ?, price = ? WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("idi", $credits, $price, $id);

    if ($stmt->execute()) {
      redirect('admin-credits.php', 'Credit and Price updated successfully!', 'success');
    } else {
      redirect('admin-credits.php', 'Failed to update. Try again.', 'danger');
    }
  }
}

// Handle form submission for deleting a credit package
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
  $id = intval($_POST['id']);

  // Prevent deletion of the first row
  if ($id == 1) {
    redirect('admin-credits.php', 'Cannot delete the first credit package.', 'danger');
  } else {
    $query = "DELETE FROM credit_prices WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
      redirect('admin-credits.php', 'Credit package deleted successfully!', 'success');
    } else {
      redirect('admin-credits.php', 'Failed to delete. Try again.', 'danger');
    }
  }
}

// Fetch data for admin view
$query = "SELECT * FROM credit_prices ORDER BY credits ASC";
$result = $con->query($query);

// Check if query was successful
if (!$result) {
  die("Error fetching data: " . $con->error);
}
?>


<body class="geex-dashboard">

  <main class="geex-main-content">

    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/customizer.php'; ?>

    <div class="geex-content">
      <?php include 'partials/header.php'; ?>

      <!-- Display alert if there's a message in session -->
      <?php
      if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        $messageType = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'warning'; // Default to 'warning'
      ?>
        <center>
          <div style="max-width: 400px;"
            class="text-center alert alert-<?php echo htmlspecialchars($messageType); ?> alert-dismissable fade show"
            role="alert">
            <strong>Hey!</strong> <?php echo htmlspecialchars($message); ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        </center>
      <?php
        // Unset the session variables to avoid showing the message again
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
      }
      ?>

      <div class="geex-content__pricing">
        <div class="geex-content__pricing__wrapper">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10 white-bg p-5 shadow" style="border-radius: 24px;">
              <div class="admin-credits-table">
                <table class="table table-bordered table-striped table-hover text-center">
                  <thead class="table-primary">
                    <tr>
                      <th scope="col">Credits</th>
                      <th scope="col">You Save</th>
                      <th scope="col">Price</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Fetch the first row separately
                    $row1 = $result->fetch_assoc();
                    ?>
                    <tr>
                      <form method="POST" action="">
                        <td>
                          <?php echo $row1['credits']; ?>
                          <input type="hidden" name="credits" value="1">
                        </td>
                        <td>0%</td>
                        <td>
                          <div class="geex-content__form__single__box mb-0">
                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                            <input type="text" class="form-control py-2" name="price"
                              value="<?php echo number_format($row1['price'], 2); ?>">
                          </div>
                        </td>
                        <td>
                          <button type="submit" name="update" class="btn btn-primary btn-sm lh-sm">Update</button>
                        </td>
                      </form>
                    </tr>

                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <form method="POST" action="">
                          <td><input type="number" name="credits" value="<?php echo $row['credits']; ?>" required></td>
                          <td>
                            <?php
                            $original_total = $row1['price'] * $row['credits'];
                            $you_save = (($original_total - $row['price']) / $original_total) * 100;
                            echo round($you_save, 2) . '%';
                            ?>
                          </td>
                          <td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" name="price" value="<?php echo number_format($row['price'], 2); ?>"
                              required>
                          </td>
                          <td>
                            <button type="submit" name="update" class="btn btn-primary btn-sm lh-sm">Update</button>
                            <?php if ($row['id'] != 1) { ?>
                              <button type="submit" name="delete" class="btn btn-danger btn-sm lh-sm"
                                onclick="return confirm('Are you sure you want to delete this package?');">Delete</button>
                            <?php } ?>
                          </td>
                        </form>
                      </tr>
                    <?php
                    }
                    // Free result set
                    $result->free();
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php include 'partials/script.php'; ?>

</body>

</html>
