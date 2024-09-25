<?php
// buy-credits.php

// Include the database connection
include('../config/dbconn.php');

// Fetch data from the database
$query = "SELECT * FROM credit_prices ORDER BY credits ASC";
$result = $con->query($query);

// Check if query was successful
if (!$result) {
	die("Error fetching data: " . $con->error);
}
?>
<!doctype html>
<html lang="en" dir="ltr">
<?php
$title = 'Buy Credits';
$page_title = 'Buy Credits';
include 'partials/head.php';
?>
<link rel="stylesheet" href="resources/css/mycss.css">

<body class="geex-dashboard">

  <main class="geex-main-content">
    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/customizer.php'; ?>

    <div class="geex-content">
      <?php include 'partials/header.php'; ?>

      <div class="geex-content__pricing">
        <div class="geex-content__pricing__wrapper">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-11 white-bg shadow p-5" style="border-radius: 24px;">
              <div class="buy-credits-table">
                <table class="table table-responsive table-bordered table-striped table-hover text-center">
                  <thead class="table-primary">
                    <tr>
                      <th scope="col">Credits</th>
                      <th scope="col">You Save</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
										// Fetch the first row separately for credits = 1
										$row1 = $result->fetch_assoc();
										?>
                    <tr>
                      <td><?php echo $row1['credits']; ?></td>
                      <td>0%</td> <!-- Fixed value for the first row -->
                      <td>AUD <?php echo number_format($row1['price'], 2); ?></td>
                      <td>
                        <form action="payment.php" method="POST">
                          <input type="hidden" name="credits" value="<?php echo $row1['credits']; ?>">
                          <input type="hidden" name="price" value="<?php echo $row1['price']; ?>">
                          <input type="hidden" name="save" value="0">
                          <button type="submit" class="btn btn-primary btn-sm lh-sm">Buy Now</button>
                        </form>
                      </td>
                    </tr>

                    <?php
										while ($row = $result->fetch_assoc()) {
										?>
                    <tr>
                      <td><?php echo $row['credits']; ?></td>
                      <td>
                        <?php
													$original_total = $row1['price'] * $row['credits'];
													$you_save = (($original_total - $row['price']) / $original_total) * 100;
													echo round($you_save, 2) . '%';
													?>
                      </td>
                      <td>AUD <?php echo number_format($row['price'], 2); ?></td>
                      <td>
                        <form action="payment.php" method="POST">
                          <input type="hidden" name="credits" value="<?php echo $row['credits']; ?>">
                          <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                          <input type="hidden" name="save" value="<?php echo round($you_save, 2); ?>">
                          <button type="submit" class="btn btn-primary btn-sm lh-sm">Buy Now</button>
                        </form>
                      </td>
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