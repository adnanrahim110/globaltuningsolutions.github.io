<!doctype html>
<html lang="en" dir="ltr">

<?php $title = "Customer's Credits" ?>
<?php $page_title = "Customer's Credits" ?>

<?php include 'partials/head.php' ?>
<?php include '../config/dbconn.php'; ?>

<body class="geex-dashboard demo-invoice">
  <main class="geex-main-content">
    <?php include 'partials/sidebar.php' ?>
    <?php include 'partials/customizer.php' ?>
    <div class="geex-content">
      <?php include 'partials/header.php' ?>
      <div class="geex-content__wrapper">
        <div class="geex-content__section-wrapper">
          <div class="geex-content__invoice">
            <div class="geex-content__invoice__chat w-100">
              <div class="geex-content__invoice__chat__wrapper">
                <div class="p-5 white-bg" style="border-radius: 24px;">
                  <table class="table table-bordered table-hover text-center table-striped">
                    <thead class="table-dark">
                      <tr>
                        <td>Name</td>
                        <td>Contact Details</td>
                        <td>Credits</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Fetch all users with role_as = 0 (customers)
                      $query = "SELECT * FROM users WHERE role_as = 0";
                      $result = mysqli_query($con, $query);

                      if (mysqli_num_rows($result) > 0) {
                        // Loop through all customers and display them in the table
                        while ($user = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr>
                            <td><?= $user['fname'] . " " . $user['lname']; ?></td>
                            <td class="">
                              <span><?= $user['email']; ?></span>
                            </td>
                            <td>0</td>
                            <td>
                              <a href="edit-credits.php?id=<?= $user['id']; ?>" class="btn-sm btn-warning">Edit</a>
                              <a href="delete-user.php?id=<?= $user['id']; ?>" class="btn-sm btn-danger">Delete</a>
                            </td>
                          </tr>
                        <?php
                        }
                      } else {
                        ?>
                        <tr>
                          <td colspan="5">
                            <div class="alert alert-secondary text-center">
                              No Customer Found
                            </div>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include 'partials/script.php' ?>
</body>

</html>
