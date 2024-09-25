<?php
$title = "Shop";
include "includes/head.php";
?>
<style>
  @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700|Space+Mono:400,700&display=swap");

  main {
    height: 100vh;
    padding-top: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.8) 100%), url('assets/images/coming-soon.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  h1 {
    font-size: 7.7vw;
    font-weight: 900;
    padding-inline: 10px;
  }

  main p {
    font-family: "Space Mono", sans-serif;
    font-size: 20px;
    color: rgba(255, 255, 255, 0.7);
    line-height: 40px;
  }
</style>

<body>
  <?php include "includes/navbar.php"; ?>
  <main class="main">
    <div class="main-wrapper">
      <div class="hero-area">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-12 text-center text-lg-start col-lg-8">
              <div class="heading">
                <h1 class="text-white mb-5 mb-lg-0">We Are <br> Coming Soon</h1>
              </div>
            </div>
            <div class="col-12 col-md-12 text-center text-lg-start col-lg-4">
              <p class="">We're strong believers that the best solutions come from
                gathering new insights and pushing conventional boundaries.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include "includes/footer.php"; ?>

