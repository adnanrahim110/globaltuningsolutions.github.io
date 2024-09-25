<!doctype html>
<html lang="en" dir="ltr">
<?php
$title = 'Payment';
$page_title = 'Payment';
include 'partials/head.php';
?>
<?php
// Check if data was posted from buy-credits.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $credits = htmlspecialchars($_POST['credits']);
  $price = htmlspecialchars($_POST['price']);

  $payment_fees = number_format($price * 0.03, 2);

  // Calculate grand total
  $grand_total = number_format($price + $payment_fees, 2);
} else {
  // If no data was posted, redirect back to the buy-credits page
  header('Location: buy-credits.php');
  exit();
}
$user_id = $_SESSION['auth_user']['id'];
$user_email = $_SESSION['auth_user']['email'];
?>
<link rel="stylesheet" href="resources/css/mycss.css">

<style>
th,
td {
  font-size: 12px;
}

td h3 {
  color: #fff;
}

.geex-content__form__single__box {
  flex-direction: column;
  gap: 0;
}

.geex-content__form__single__box small {
  margin-top: 10px;
}
</style>

<body class="geex-dashboard">

  <main class="geex-main-content">

    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/customizer.php'; ?>

    <div class="geex-content">
      <?php include 'partials/header.php'; ?>

      <div class="geex-content__pricing">
        <div class="geex-content__pricing__wrapper">
          <div class="row justify-content-center">
            <div class="col-12">
              <?php
              if (isset($_SESSION['message'])) {
                // Get message and message type
                $message = $_SESSION['message'];
                $messageType = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'warning'; // Default to 'warning'

              ?>
              <center>
                <div style="max-width: 400px;"
                  class="text-center alert alert-<?= $messageType; ?> alert-dismissable fade show" role="alert">
                  <strong>Hey!</strong> <?= $message; ?>.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </center>
              <?php
                // Unset the session variables to avoid displaying the message again
                unset($_SESSION['message']);
                unset($_SESSION['message_type']);
              }
              ?>
            </div>
            <div class="col-12 col-lg-11 white-bg shadow p-5" style="border-radius: 24px;">
              <div class="row">
                <div class="col-12 mb-40">
                  <h1 class="mb-3">Order Summary</h1>
                  <table class="table table-responsive table-bordered table-striped table-hover text-center">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price (AUD)</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total (AUD)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Credits</td>
                        <td>AUD <?php echo number_format($price, 2); ?></td>
                        <td><?php echo $credits; ?></td>
                        <td>AUD <?php echo number_format($price, 2); ?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>VAT</td>
                        <td>AUD 0.00</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Payment Fees</td>
                        <td>AUD <?php echo number_format($payment_fees, 2); ?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Grand Total</td>
                        <td>AUD <?php echo number_format($grand_total, 2); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-12">
                  <div class="geex-content__pricing__header">
                    <h1 class="mb-2">Order Details</h1>
                    <form id="payment-form" method="POST">
                      <div class="row align-items-start">
                        <div class="col-12 col-lg-6">
                          <div class="geex-content__form__single__box mb-20">
                            <div class="input-icon">
                              <input type="text" class="form-control" name="company_name" placeholder="Company Name"
                                id="company_name" required>
                              <i class="uil uil-building text-primary"></i>
                            </div>
                            <small class="text-danger" id="error-company_name"></small>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="geex-content__form__single__box mb-20">
                            <div class="input-icon">
                              <input type="email" class="form-control" name="user_email" id="user_email"
                                value="<?= $user_email ?>" required>
                              <i class="uil uil-envelope text-primary"></i>
                            </div>
                            <small class="text-danger" id="error-user_email"></small>
                          </div>
                        </div>
                        <div class="col-12 col-lg-12">
                          <div class="geex-content__form__single__box mb-20">
                            <div class="input-icon">
                              <input type="text" class="form-control" name="address" id="address"
                                placeholder="Your Address" required>
                              <i class="uil uil-map-pin text-primary"></i>
                            </div>
                            <small class="text-danger" id="error-address"></small>
                          </div>
                        </div>
                        <div class="col-12 col-lg-4">
                          <div class="geex-content__form__single__box mb-20">
                            <div class="input-icon">
                              <input type="text" class="form-control" name="zip_code" id="zip_code"
                                placeholder="Zip Code" required>
                              <i class="uil uil-map text-primary"></i>
                            </div>
                            <small class="text-danger" id="error-zip_code"></small>
                          </div>
                        </div>
                        <div class="col-12 col-lg-4">
                          <div class="geex-content__form__single__box mb-20">
                            <div class="input-icon">
                              <input type="text" class="form-control" name="city" id="city" placeholder="Your City"
                                required>
                              <i class="uil uil-map-marker text-primary"></i>
                            </div>
                            <small class="text-danger" id="error-city"></small>
                          </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-12 col-lg-4">
                          <button type="button" class="geex-btn geex-btn--primary-transparent w-100 mt-0"
                            id="submit-payment-btn">Buy
                            Now</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
                <!-- Bootstrap Modal -->
                <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="paymentModalLabel">Confirm Payment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <table class="table table-bordered table-hover text-center">
                          <thead class="table-primary">
                            <tr>
                              <td colspan="6" class="text-center bg-dark">
                                <h3>Order Summary</h3>
                              </td>
                            </tr>
                            <tr>
                              <th>Product</th>
                              <th>Price (AUD)</th>
                              <th>Quantity</th>
                              <th>VAT</th>
                              <th>Payment Fees</th>
                              <th>Total (AUD)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td id="modal-credits"></td>
                              <td id="modal-price"></td>
                              <td id="modal-quantity"></td>
                              <td>AUD 0.00</td>
                              <td id="modal-payment_fees"></td>
                              <td id="modal-grand_total"></td>
                            </tr>
                          </tbody>
                          <thead class="table-warning">
                            <tr>
                              <td colspan="6" class="text-center bg-dark">
                                <h3>Your Details</h3>
                              </td>
                            </tr>
                            <tr>
                              <th>Your Name</th>
                              <th>Your Email</th>
                              <th>Company Name</th>
                              <th>Your Address</th>
                              <th>Your City</th>
                              <th>Your Zip Code</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td id="modal-name"></td>
                              <td id="modal-company"></td>
                              <td id="modal-email"></td>
                              <td id="modal-address"></td>
                              <td id="modal-city"></td>
                              <td id="modal-zipcode"></td>
                            </tr>
                          </tbody>
                        </table>

                        <!-- PayPal Button -->
                        <div class="row justify-content-center">
                          <div class="col-12 col-lg-6">
                            <div id="paypal-button-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- PAYPAL CHECKOUT -->
  <script
    src="https://www.paypal.com/sdk/js?client-id=Aeqf1LMf6azHlWCF9fEPXQL2zW6fParwXcGv6oSwrmvnN-OgpMjj2n_Fq_PCqiPQxevIdsV0CTDwWOJV&currency=AUD&components=buttons&enable-funding=card&disable-funding=paylater,venmo"
    data-sdk-integration-source="developer-studio"></script>
  <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $grand_total; ?>' // Dynamically populate price
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(orderData) {
        const transaction = orderData.purchase_units[0].payments.captures[0];

        // Send a POST request to assign credits
        fetch('verify-payment.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              transaction_id: transaction.id,
              credits: '<?php echo $credits; ?>',
              price: '<?php echo $price; ?>',
              user_id: document.getElementById('user_id').value
            })
          }).then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {
            if (data.success) {
              // Redirect to success page with thank you message
              window.location.href = 'thankyou.php?message=' + encodeURIComponent(data.message);
            } else {
              alert('Error: ' + data.message);
            }
          }).catch(error => {
            console.error('Error:', error);
            alert('An error occurred while processing the payment. Please try again.');
          });
      });
    },
    onError: function(err) {
      console.error('Paypal error:', err);
      alert('An error occurred while processing the payment. Please try again or contact support.');
    }
  }).render('#paypal-button-container');
  </script>
  <!-- PAYPAL CHECKOUT -->

  <?php include 'partials/script.php'; ?>

  <script>
  $(document).ready(function() {
    $('#submit-payment-btn').on('click', function() {
      console.log('submit-payment-btn clicked');
      let isValid = true;

      // Function to safely get input value and check if it's undefined
      function getInputValue(selector) {
        const element = $(selector);
        return element.length ? element.val().trim() :
          ''; // Safely return trimmed value or empty string if not found
      }

      // Validate Company Name
      const companyName = getInputValue('#company_name');
      if (companyName === '') {
        console.log('Company name is required');
        $('#error-company_name').text('*Company name is required');
        isValid = false;
      } else {
        $('#error-company_name').text('');
      }

      // Validate Email
      const userEmail = getInputValue('#user_email');
      if (userEmail === '') {
        $('#error-user_email').text('*Email is required');
        isValid = false;
      } else {
        $('#error-user_email').text('');
      }

      // Validate Address
      const address = getInputValue('#address');
      if (address === '') {
        $('#error-address').text('*Address is required');
        isValid = false;
      } else {
        $('#error-address').text('');
      }

      // Validate Zip Code
      const zipCode = getInputValue('#zip_code');
      if (zipCode === '') {
        $('#error-zip_code').text('*Zip Code is required');
        isValid = false;
      } else {
        $('#error-zip_code').text('');
      }

      // Validate City
      const city = getInputValue('#city');
      if (city === '') {
        $('#error-city').text('*City is required');
        isValid = false;
      } else {
        $('#error-city').text('');
      }

      // If the form is valid, populate the modal with the form data
      if (isValid) {
        console.log('Form is valid');
        const credits = "<?php echo $credits; ?>";
        const name = "<?php echo $_SESSION['auth_user']['name']; ?>";
        const price = "<?php echo number_format($price, 2); ?>";
        const paymentFees = "<?php echo number_format($payment_fees, 2); ?>";
        const grandTotal = "<?php echo number_format($grand_total, 2); ?>";

        // Populate the modal with form data
        $('#modal-name').text(name);
        $('#modal-payment_fees').text(paymentFees);
        $('#modal-grand_total').text(grandTotal);
        $('#modal-credits').text(credits + ' Credits');
        $('#modal-price').text('AUD ' + price);
        $('#modal-company').text(companyName);
        $('#modal-email').text(userEmail);
        $('#modal-address').text(address);
        $('#modal-city').text(city);
        $('#modal-zipcode').text(zipCode);

        // Show the modal
        const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
        paymentModal.show();
      }
    });
  });
  </script>
</body>

</html>c