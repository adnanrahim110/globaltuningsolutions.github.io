<?php
$title = "Home";
 include "includes/head.php"; 
 ?>

<body>
  <?php include "includes/navbar.php"; ?>
  <main>
    <section class="hero-sec">
      <div class="video-wrap">
        <video autoplay loop muted class="custom-video">
          <source src="assets/video/hero-bg.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="hero-caption">
        <div class="container-fluid h-100 w-100">
          <div class="row align-items-center h-100 w-100">
            <div class="col-lg-6">
              <div class="hero-text">
                <h1>Global Tuning Solutions</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore
                  magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo
                  consequat.
                </p>
                <a href="#" class="main-btn btn">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="cta-sec">
      <div class="cta_1">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-10 text-center">
              <h1 class="sec-heading">We offer 24-7 chip tuning files and full support.</h1>
              <p class="sec-head-text">SEE WHAT WE CAN DO FOR YOUR CAR</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <form action="" class="cta-form">
                <div class="row">
                  <div class="col-lg-3">
                    <select name="" id="" class="form-select">
                      <option class="form-control" selected disabled>Choose a Make</option>
                      <option class="form-control" value="Acura">Acura</option>
                      <option class="form-control" value="Audi">Audi</option>
                      <option class="form-control" value="BMW">BMW</option>
                      <option class="form-control" value="Buick">Buick</option>
                      <option class="form-control" value="Cadillac">Cadillac</option>
                      <option class="form-control" value="Chevrolet">Chevrolet</option>
                      <option class="form-control" value="Chrysler">Chrysler</option>
                      <option class="form-control" value="Dodge">Dodge</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <select name="" id="" class="form-select">
                      <option disabled selected>Choose a Model</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <select name="" id="" class="form-select">
                      <option disabled selected>Choose an Engine</option>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <button type="submit" class="main-btn btn">Get Started</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="access_btn-sec">
      <div class="container">
        <div class="access-grid">
          <a href="register.php" class="access-item">
            <div class="acc_item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="75" height="82" viewBox="0 0 75 82">
                <g fill-rule="evenodd">
                  <path d="M61.929 67.745v-6.948h-2v6.948H52.98v2h6.948v6.948h2v-6.948h6.948v-2z"></path>
                  <path
                    d="M60.929 79.904c-6.153 0-11.16-5.006-11.16-11.159 0-6.153 5.007-11.159 11.16-11.159 6.153 0 11.159 5.006 11.159 11.16 0 6.152-5.006 11.158-11.16 11.158m-45.9-58.06C15.028 10.902 23.93 2 34.873 2s19.845 8.902 19.845 19.844c0 10.943-8.902 19.845-19.845 19.845s-19.845-8.902-19.845-19.845m48.54 34.008A35.434 35.434 0 0 0 42.263 42.4c8.419-3.036 14.455-11.103 14.455-20.556C56.718 9.8 46.918 0 34.873 0 22.827 0 13.028 9.8 13.028 21.844c0 9.566 6.183 17.71 14.76 20.66C11.92 45.96 0 60.108 0 76.995h2C2 58.631 16.942 43.69 35.307 43.69c9.85 0 19.202 4.413 25.503 11.903-7.201.065-13.04 5.937-13.04 13.153 0 7.256 5.903 13.16 13.159 13.16 7.256 0 13.159-5.904 13.159-13.16 0-6.352-4.525-11.668-10.52-12.893">
                  </path>
                </g>
              </svg>
            </div>
            <h5 class="acc_item-title">Create Free Acount</h5>
            <p>
              Only registered users have access to our services and tuning files.
            </p>
          </a>
          <a href="user/buy-credits.php" class="access-item">
            <div class="acc_item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 82 82">
                <g fill-rule="evenodd">
                  <path
                    d="M54.333 80c-14.152 0-25.666-11.515-25.666-25.667 0-14.152 11.514-25.666 25.666-25.666C68.485 28.667 80 40.181 80 54.333 80 68.485 68.485 80 54.333 80M2 27.667C2 13.515 13.515 2 27.667 2c13.826 0 25.127 10.991 25.641 24.693-14.44.529-26.086 12.175-26.615 26.615C12.991 52.794 2 41.493 2 27.667m53.308-.975C54.792 11.887 42.595 0 27.667 0 12.411 0 0 12.411 0 27.667c0 14.928 11.887 27.125 26.692 27.641C27.208 70.113 39.405 82 54.333 82 69.589 82 82 69.589 82 54.333c0-14.928-11.887-27.125-26.692-27.641">
                  </path>
                  <path
                    d="M62.517 47.337l1.414-1.414a12.649 12.649 0 0 0-5.397-3.205v-4.09h-2v3.685a12.817 12.817 0 0 0-4.4.207v-3.892h-2v4.502a12.671 12.671 0 0 0-4.211 2.793c-4.965 4.965-4.965 13.043 0 18.008a12.686 12.686 0 0 0 4.21 2.793v4.375h2v-3.765c.92.205 1.856.32 2.794.32.537 0 1.073-.046 1.607-.113v3.558h2v-3.963a12.659 12.659 0 0 0 5.397-3.205l-1.414-1.414c-4.186 4.185-10.994 4.185-15.18 0-4.184-4.186-4.184-10.994 0-15.18 4.186-4.186 10.994-4.186 15.18 0">
                  </path>
                </g>
              </svg>
            </div>
            <h5 class="acc_item-title">Get credits</h5>
            <p>
              Buy credits safely with Paypal. With credits you can get our services and tuning files.
            </p>
          </a>
          <a href="user/upload-files.php" class="access-item">
            <div class="acc_item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="73" viewBox="0 0 100 73">
                <g fill-rule="evenodd">
                  <path d="M34.265 49.52l1.47 1.354L49 36.464v36.015h2V36.463l13.265 14.411 1.47-1.354L50 32.424z">
                  </path>
                  <path
                    d="M78.5 15.9c-2.586 0-5.088.455-7.468 1.34C65.653 3.375 50.854-2.128 40.159.735 30.104 3.429 24.521 12.71 23.137 21.358A19.107 19.107 0 0 0 19 20.9c-10.477 0-19 8.523-19 19s8.523 19 19 19h8.757v-2H19c-9.374 0-17-7.626-17-17 0-9.374 7.626-17 17-17 1.313 0 2.619.151 3.884.447l.006.001.033.007.001-.004 1.952.169c.733-8.469 5.904-18.202 15.801-20.853C50.542.023 64.23 5.142 69.19 18.015l-.001.001.015.029c.008.021.018.039.025.059l.003-.001.825 1.714A19.317 19.317 0 0 1 78.5 17.9c10.752 0 19.5 8.748 19.5 19.5s-8.748 19.5-19.5 19.5h-5.686v2H78.5c11.855 0 21.5-9.645 21.5-21.5s-9.645-21.5-21.5-21.5">
                  </path>
                </g>
              </svg>
            </div>
            <h5 class="acc_item-title">Upload Files</h5>
            <p>
              You can upload your tuning file straight to our server. Safe and easy.
            </p>
          </a>
          <a href="user/download-files.php" class="access-item">
            <div class="acc_item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="82" height="82"
                viewBox="0 0 82 82">
                <defs>
                  <path id="a" d="M82 0v82H0V0z"></path>
                </defs>
                <g fill="none" fill-rule="evenodd">
                  <g>
                    <mask id="b" fill="#fff">
                      <use xlink:href="#a"></use>
                    </mask>
                    <path
                      d="M61.353 74.252l-2.447-4.239-1.733 1 2.451 4.244A38.736 38.736 0 0 1 42 79.974v-4.9h-2v4.9a38.736 38.736 0 0 1-17.624-4.717l2.45-4.244-1.733-1-2.447 4.24a39.298 39.298 0 0 1-12.899-12.9l4.24-2.447-1-1.733-4.245 2.451A38.736 38.736 0 0 1 2.025 42h4.9v-2h-4.9a38.736 38.736 0 0 1 4.717-17.624l4.244 2.45 1-1.733-4.239-2.447a39.308 39.308 0 0 1 12.9-12.899l2.446 4.24 1.733-1-2.45-4.245A38.748 38.748 0 0 1 40 2.025v4.9h2v-4.9a38.748 38.748 0 0 1 17.624 4.717l-2.45 4.244 1.732 1 2.447-4.239a39.298 39.298 0 0 1 12.9 12.9l-4.24 2.446 1 1.733 4.244-2.45A38.736 38.736 0 0 1 79.974 40h-4.9v2h4.9a38.736 38.736 0 0 1-4.717 17.624l-4.244-2.45-1 1.732 4.24 2.447a39.289 39.289 0 0 1-12.9 12.9M41 0C18.392 0 0 18.392 0 41c0 22.607 18.392 41 41 41 22.607 0 41-18.393 41-41C82 18.392 63.607 0 41 0"
                      mask="url(#b)"></path>
                  </g>
                  <path d="M42 15.15h-2v25.485L49.75 57l1.719-1.024L42 40.085z"></path>
                </g>
              </svg>
            </div>
            <h5 class="acc_item-title">Download your file</h5>
            <p>
              We will start working on your file as soon as we get it. It will be ready in less than an hour.
            </p>
          </a>
        </div>
      </div>
    </section>
    <?php include "includes/why_us.php" ?>
    <?php include "includes/recent_transfer.php" ?>
    <section class="rp-sec">
      <div class="container">
        <div class="rp-gallery">
          <div class="rp-gallery_item">
            <h1 class="sec-heading"><span>Recent</span> Photos</h1>
          </div>
          <div class="rp-gallery_item">
            <img src="assets/images/car4.jpg" alt="">
          </div>
          <div class="rp-gallery_item">
            <img src="assets/images/car2.jpg" alt="">
          </div>
          <div class="rp-gallery_item">
            <img src="assets/images/car3.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <?php include "includes/services_sec.php" ?>
    <?php include "includes/contact_form.php"; ?>
  </main>
  <?php include "includes/footer.php"; ?>