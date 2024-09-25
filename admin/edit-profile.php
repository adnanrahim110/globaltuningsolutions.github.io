<!doctype html>
<html lang="en" dir="ltr">
<?php $title = 'Edit Profile'; ?>
<?php $page_title = 'Edit Profile'; ?>
<?php include 'partials/head.php'; ?>
<?php
include '../config/dbconn.php';

// Ensure the user is logged in
if (!isset($_SESSION['auth_user'])) {
  header('Location: login.php');
  exit;
}

// Retrieve user information from session
$auth_user = $_SESSION['auth_user'];
$email = $auth_user['email'];

// Fetch user details based on email
$query = "SELECT * FROM users WHERE email = ?";
$stmt = $con->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Set default values if any column is empty
$default_profile_pic = 'resources/img/avatar/user.svg';
$profile_pic = !empty($user['profile_pic']) ? $user['profile_pic'] : $default_profile_pic;
$fname = !empty($user['fname']) ? htmlspecialchars($user['fname']) : 'First Name';
$lname = !empty($user['lname']) ? htmlspecialchars($user['lname']) : 'Last Name';
$username = !empty($user['username']) ? htmlspecialchars($user['username']) : 'Username';
$phone = !empty($user['phone']) ? htmlspecialchars($user['phone']) : '';
$country = !empty($user['country']) ? htmlspecialchars($user['country']) : '';
$city = !empty($user['city']) ? htmlspecialchars($user['city']) : '';
$postcode = !empty($user['postcode']) ? htmlspecialchars($user['postcode']) : '';
$street = !empty($user['street']) ? htmlspecialchars($user['street']) : '';

// Fetch countries for the dropdown
$query_countries = "SELECT * FROM tblcountries ORDER BY id ASC";
$countries_result = $con->query($query_countries);
$countries = [];
if ($countries_result->num_rows > 0) {
  while ($row = $countries_result->fetch_assoc()) {
    $countries[] = $row;
  }
}

// Handle session messages
$message = '';
if (isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
  unset($_SESSION['message']);
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" />

<link rel="stylesheet" href="resources/css/mycss.css">

<body class="geex-dashboard demo-invoice">
  <main class="geex-main-content">
    <?php include 'partials/sidebar.php' ?>
    <?php include 'partials/customizer.php'; ?>
    <div class="geex-content">
      <?php include 'partials/header.php'; ?>
      <div class="geex-content__wrapper">
        <div class="geex-content__section-wrapper">
          <div class="geex-content__summary">
            <div class="row w-100">
              <div class="col-md-5">
                <div class="profile_d profile-details">
                  <?php if ($message): ?>
                    <div class="alert alert-info">
                      <?= htmlspecialchars($message); ?>
                    </div>
                  <?php endif; ?>
                  <div class="row justify-content-between align-items-center pr-dt">
                    <div class="col-12 col-md-4 mb-3">
                      <img src="<?= htmlspecialchars($profile_pic); ?>" alt="Profile Pic"
                        class="img-thumbnail profile_pic">
                    </div>
                    <div class="col-12 col-md-8 text-center">
                      <h3><?= $fname . ' ' . $lname; ?></h3>
                      <h5 class="mt-1 pr-un"><span>Username:</span> <?= $username; ?></h5>
                    </div>
                    <div class="col-12">
                      <h5><span>Email:</span> <?= htmlspecialchars($email); ?></h5>
                    </div>
                    <div class="col-12">
                      <h5><span>Phone:</span> <?= $phone; ?></h5>
                    </div>
                    <div class="col-12">
                      <h5><span>Country:</span> <?= $country; ?></h5>
                    </div>
                    <div class="col-12">
                      <h5><span>City:</span> <?= $city; ?></h5>
                    </div>
                    <div class="col-12">
                      <h5><span>Postcode:</span> <?= $postcode; ?></h5>
                    </div>
                    <div class="col-12">
                      <h5><span>Address:</span> <?= $street; ?></h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="profile_d profile-form">
                  <div class="profile_btns">
                    <button id="profileBtn" class="btn btn-left btn-primary">Profile</button>
                    <button id="passwordBtn" class="btn">Password</button>
                  </div>
                  <!-- Profile Form -->
                  <form action="code.php" method="post" id="edit_profile-form" enctype="multipart/form-data">
                    <div class="row w-100 justify-content-center">
                      <!-- First Name -->
                      <div class="col-12 col-md-6">
                        <div class="geex-content__form__single__box">
                          <div class="input-icon">
                            <i class="uil uil-user"></i>
                            <input type="text" name="fname" value="<?= $fname; ?>" placeholder="First Name"
                              class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <!-- Last Name -->
                      <div class="col-12 col-md-6">
                        <div class="geex-content__form__single__box">
                          <div class="input-icon">
                            <i class="uil uil-user"></i>
                            <input type="text" name="lname" value="<?= $lname; ?>" placeholder="Last Name"
                              class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <!-- Username -->
                      <div class="col-12 col-md-6">
                        <div class="geex-content__form__single__box gap-1">
                          <div class="input-icon">
                            <i class="uil uil-user-circle"></i>
                            <input type="text" id="username" name="username" value="<?= $user['username']; ?>"
                              placeholder="Username" class="form-control" required>
                            <small id="username_status" class="text-center w-100"></small>
                          </div>
                        </div>
                      </div>
                      <!-- Email (Disabled) -->
                      <div class="col-12 col-md-6">
                        <div class="geex-content__form__single__box">
                          <div class="input-icon">
                            <i class="uil uil-envelope"></i>
                            <input type="email" name="email" value="<?= htmlspecialchars($email); ?>"
                              class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <!-- Profile Picture -->
                      <div class="col-12 col-md-12">
                        <div class="geex-content__form__single__box gap-1">
                          <?php if (!empty($user['profile_pic'])): ?>
                            <img src="<?= $user['profile_pic']; ?>" alt="Profile Picture" width="50px" height="50px"
                              style="object-fit: contain; ">
                          <?php endif; ?>
                          <div class="input-icon phone_no">
                            <i class="uil uil-user-square"></i>
                            <input type="file" name="profile_pic" class="form-control">
                          </div>
                        </div>
                      </div>
                      <!-- Phone -->
                      <div class="col-12 col-md-12">
                        <div class="geex-content__form__single__box">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="custom-dropdown">
                                <div class="selected-option" id="selectedCountry">
                                  <span class="flag-icon flag-icon-<?= strtolower($user['iso2']); ?>"></span>
                                  <span class="country-code"><?= $user['numcode']; ?></span>
                                </div>
                                <div class="options" id="countryOptions">
                                  <?php foreach ($countries as $country): ?>
                                    <div class="option" data-value="<?= $country['numcode']; ?>"
                                      data-country="<?= $country['short_name']; ?>" data-iso2="<?= $country['iso2']; ?>">
                                      <span class="flag-icon flag-icon-<?= strtolower($country['iso2']); ?>"></span>
                                      <span class="country-name"><?= $country['short_name']; ?></span>
                                      <span class="country-code"><?= $country['numcode']; ?></span>
                                    </div>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                            </div>
                            <div class="input-icon">
                              <i class="uil uil-phone"></i>
                              <input type="tel" name="phone" value="<?= $user['phone']; ?>" placeholder="Phone Number"
                                class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Postal Code -->
                      <div class="col-12 col-md-6">
                        <div class="geex-content__form__single__box">
                          <div class="input-icon">
                            <i class="uil uil-map"></i>
                            <input type="text" name="postcode" value="<?= $postcode; ?>" placeholder="Postal Code"
                              class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <!-- City -->
                      <div class="col-12 col-md-6">
                        <div class="geex-content__form__single__box">
                          <div class="input-icon">
                            <i class="uil uil-map-marker"></i>
                            <input type="text" name="city" value="<?= $city; ?>" placeholder="City" class="form-control"
                              required>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-12">
                        <div class="geex-content__form__single__box">
                          <div class="input-icon">
                            <i class="uil uil-globe"></i>
                            <input type="text" id="country_name" name="country" value="<?= $user['country']; ?>"
                              class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <!-- Street -->
                      <div class="col-12">
                        <div class="geex-content__form__single__box">
                          <div class="input-icon">
                            <i class="uil uil-map-pin"></i>
                            <textarea name="street" class="form-control" rows="5" placeholder="Address"
                              required><?= $street; ?></textarea>
                          </div>
                        </div>
                      </div>
                      <!-- Save Button -->
                      <div class="col-12 col-md-8">
                        <button type="submit" class="geex-content__authentication__form-submit btn btn-success"
                          name="update_profile_btn">
                          <i class="uil uil-bookmark"></i>
                          Save Changes
                        </button>
                      </div>
                    </div>
                  </form>

                  <!-- Change Password Form -->
                  <form action="code.php" method="post" id="change_pass-form" style="display: none;">
                    <div class="row w-100 justify-content-center">
                      <div class="col-12">
                        <div class="geex-content__form__single__box">
                          <input type="password" name="new_pass" placeholder="New Password" class="form-control"
                            required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="geex-content__form__single__box">
                          <input type="password" name="confirm_pass" placeholder="Confirm Password" class="form-control"
                            required>
                        </div>
                      </div>
                      <div class="col-12 col-md-8">
                        <button type="submit" class="geex-content__authentication__form-submit btn btn-warning"
                          name="change_pass_btn">
                          Change Password
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const dropdown = document.querySelector('.custom-dropdown');
      const selected = dropdown.querySelector('.selected-option');
      const options = dropdown.querySelector('.options');
      const countryNameInput = document.getElementById('country_name');

      // Set initial selected value
      const initialCountry = "<?= $user['country']; ?>";
      const initialOption = options.querySelector(`[data-country="${initialCountry}"]`);
      if (initialOption) {
        selected.innerHTML = `
      <span class="flag-icon ${initialOption.querySelector('.flag-icon').className}"></span>
      <span class="country-code">${initialOption.querySelector('.country-code').textContent}</span>
    `;
      }

      selected.addEventListener('click', function() {
        options.style.display = options.style.display === 'block' ? 'none' : 'block';
      });

      options.addEventListener('click', function(e) {
        const option = e.target.closest('.option');
        if (option) {
          const selectedCountryName = option.getAttribute('data-country');
          const selectedIso2 = option.getAttribute('data-iso2');
          selected.innerHTML = `
        <span class="flag-icon flag-icon-${selectedIso2.toLowerCase()}"></span>
        <span class="country-code">${option.querySelector('.country-code').textContent}</span>
      `;
          countryNameInput.value = selectedCountryName;
          options.style.display = 'none';
        }
      });

      document.addEventListener('click', function(e) {
        if (!dropdown.contains(e.target)) {
          options.style.display = 'none';
        }
      });
    });
  </script>
  <!-- Username checking -->
  <script>
    document.getElementById('username').addEventListener('input', function() {
      var username = this.value;

      // Debugging: Check if username is captured correctly
      console.log("Username input:", username);

      // AJAX request to check if username exists
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'check_username.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = xhr.responseText.trim(); // Trim whitespace and newlines

          // Debugging: Check the raw response from server
          console.log("Raw response from server:", response);

          // Check the response and set the color accordingly
          if (response === 'Username is available.') {
            document.getElementById('username_status').textContent = response;
            document.getElementById('username_status').style.color = 'green'; // Available, set text color to green
          } else if (response === 'Username is already taken.') {
            document.getElementById('username_status').textContent = response;
            document.getElementById('username_status').style.color = 'red'; // Not available, set text color to red
          } else {
            document.getElementById('username_status').textContent = "Invalid response.";
            document.getElementById('username_status').style.color =
              'orange'; // Invalid response, set text color to orange
          }
        }
      };
      xhr.send('username=' + encodeURIComponent(username));
    });
  </script>
  <!-- Fetch Country Name -->
  <script>
    function updateCountryName() {
      const selectedCountry = document.querySelector('#countryCode option:checked').getAttribute('data-country');
      document.getElementById('country_name').value = selectedCountry;
    }

    // Call updateCountryName on page load to ensure it's populated with the correct value initially
    document.addEventListener('DOMContentLoaded', updateCountryName);
  </script>
  <!-- Script to toggle forms -->
  <script>
    document.getElementById("profileBtn").addEventListener("click", function() {
      document.getElementById("edit_profile-form").style.display = "block";
      document.getElementById("change_pass-form").style.display = "none";
    });
    document.getElementById("passwordBtn").addEventListener("click", function() {
      document.getElementById("edit_profile-form").style.display = "none";
      document.getElementById("change_pass-form").style.display = "block";
    });
  </script>

  <?php include 'partials/script.php' ?>
</body>

</html>
