<!doctype html>
<html lang="en">
<?php $title = 'Add New Credits'; ?>
<?php $page_title = 'Add New Credits'; ?>
<?php include 'partials/head.php'; ?>
<?php
include '../config/dbconn.php';
// Check if form is submitted
if (isset($_POST['add_credits'])) {
  $credits = $_POST['credits'];
  $price = $_POST['price'];

  // Insert new credit entry into database
  $query = "INSERT INTO credit_prices (credits, price) VALUES (?, ?)";
  $stmt = $con->prepare($query);
  $stmt->bind_param('id', $credits, $price);

  if ($stmt->execute()) {
    redirect('price-list.php', 'New credit package added successfully', 'success');
  } else {
    redirect('add-credits.php', 'Failed to add new credit package', 'danger');
  }

  $stmt->close();
  $con->close();
}
?>


<body class="geex-dashboard">
  <main class="geex-main-content">
    <?php include 'partials/sidebar.php'; ?>
    <div class="geex-content">
      <?php include 'partials/header.php'; ?>

      <div class="geex-content__add-credits">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 white-bg p-5 shadow" style="border-radius: 24px;">
              <h2 class="mb-3">Add New Credits</h2>
              <form action="" method="POST">
                <div class="row justify-content-center">
                  <div class="col-12">
                    <?php
                    if (isset($_SESSION['message'])) {
                      $message = $_SESSION['message'];
                      $messageType = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'warning';
                    ?>
                      <center>
                        <div style="max-width: 400px;"
                          class="text-center alert alert-<?= $messageType; ?> alert-dismissable fade show" role="alert">
                          <strong>Hey!</strong> <?= $message; ?>.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      </center>
                    <?php
                      unset($_SESSION['message']);
                      unset($_SESSION['message_type']);
                    }
                    ?>
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper input-icon">
                        <label for="geex-input1" class="input-label">Credit's Amount</label>
                        <input type="number" name="credits" placeholder="Insert amount" class="form-control" required
                          id="geex-input1">
                        <i class="uil uil-dialpad-alt"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper input-icon">
                        <label for="geex-input2" class="input-label">Price (AUD)</label>
                        <input type="number" step="0.01" name="price" placeholder="Insert amount" class="form-control"
                          required id="geex-input2">
                        <i class="uil uil-dollar-alt"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <button class="geex-btn geex-btn--primary-transparent w-100 justify-content-center" type="submit"
                      name="add_credits"><i class="uil-plus"></i> Add Now</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include 'partials/script.php'; ?>
</body>

</html>
