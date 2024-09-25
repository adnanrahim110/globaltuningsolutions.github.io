<footer>
  <div class="container">
    <div class="row ft-mid">
      <div class="col-lg-6">
        <div class="ft-logo">
          <a href="index.html">
            <h3>Global Tuning Solutions</h3>
          </a>
        </div>
        <div class="row">
          <div class="col-lg-10">
            <p class="ft-text pe-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut
              aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="ft-links">
          <ul>
            <h5>Quick Links</h5>
            <li>
              <a href="search-ECU-info">Search ECU Info</a>
            </li>
            <li>
              <a href="original-files">Original Files</a>
            </li>
            <li>
              <a href="damos-files">Damos Files</a>
            </li>
            <li>
              <a href="shop">Shop</a>
            </li>
            <li>
              <a href="contact">Contact Us</a>
            </li>
            <li>
              <a href="about">About Us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="ft-links">
          <ul>
            <h5>Dashboard</h5>
            <li>
              <a href="login">Sign In</a>
            </li>
            <li>
              <a href="register">Create New User</a>
            </li>
            <li>
              <a href="upload-files">Upload Files</a>
            </li>
            </li>
            <li>
              <a href="buy-credits">Get Credits</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="ft-bottom">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-4">
          <div class="ft-terms">
            <ul>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <p>All Rights Reserved &copy; FIle Tuning Services - 2024</p>
        </div>
        <div class="col-md-4">
          <div class="ft-mark">
            <p>Designed By <a href="#" class="text-uppercase">Living &nbsp;code</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- <div class="admin-panel_btn stt_1">
    <a href="admin-panel.php" class="btn btn-warning"><i class="fa-regular fa-user me-2" aria-hidden="true"></i> Admin Panel</a>
  </div> -->
<div class="progress-wrap d-flex stt_2" id="progress-scroll">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
  Scroll To Top
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="assets/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
  integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
  crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
  integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
  crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="assets/js/gsap.js"></script>
<script src="assets/js/main.js"></script>

<!-- Alertify JS -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
<?php if (isset($_SESSION['message'])): ?>
alertify.set('notifier', 'position', 'bottom-right');
<?php if ($_SESSION['message_type'] === 'success'): ?>
alertify.success('<?= $_SESSION['message']; ?>');
<?php elseif ($_SESSION['message_type'] === 'danger'): ?>
alertify.error('<?= $_SESSION['message']; ?>');
<?php else: ?>
alertify.message('<?= $_SESSION['message']; ?>');
<?php endif; ?>
<?php
    // Unset the session message after displaying it
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
    ?>
<?php endif; ?>
</script>
</body>

</html>