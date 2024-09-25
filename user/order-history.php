<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'Order History' ?>
<?php $page_title = 'Order History' ?>

<?php include 'partials/head.php' ?>

<body class="geex-dashboard demo-invoice">
  <main class="geex-main-content">
    <?php include 'partials/sidebar.php' ?>
    <?php include 'partials/customizer.php' ?>
    <div class="geex-content">
      <?php include 'partials/header.php' ?>
      <div class="geex-content__wrapper">
        <div class="geex-content__section-wrapper">
          <div class="geex-content__pricing__wrapper">
            <div class="row">
              <div class="col-lg-4 mb-40">
                <div class="geex-content__pricing__single">
                  <div class="geex-content__pricing__header">
                    <span class="geex-content__pricing__badge">For One Project</span>
                    <div class="geex-content__pricing__tag">
                      <span class="geex-content__pricing__currency">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="24" viewBox="0 0 17 24">
                          <g fill="none" fill-rule="evenodd">
                            <path stroke="#345469" stroke-width="2" d="M16.078 5.922a8.596 8.596 0 1 0 0 12.156"></path>
                            <path fill="#345469" d="M6 0h2v4H6zM11 0h2v4h-2zM6 20h2v4H6zM11 20h2v4h-2z"></path>
                          </g>
                        </svg>
                      </span>
                      <span class="geex-content__pricing__amount">&nbsp;50</span>
                      <span class="geex-content__pricing__period">AU$50.00 per file</span>
                    </div>
                  </div>
                  <div class="geex-content__pricing__body">
                    <div class="geex-content__pricing__btn-part">
                      <a class="geex-content__pricing__btn" href="">Buy Credits</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-40">
                <div class="geex-content__pricing__single active">
                  <div class="geex-content__pricing__header">
                    <span class="geex-content__pricing__badge">Most Popular</span>
                    <div class="geex-content__pricing__tag">
                      <span class="geex-content__pricing__currency">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="24" viewBox="0 0 17 24">
                          <g fill="none" fill-rule="evenodd">
                            <path stroke="#345469" stroke-width="2" d="M16.078 5.922a8.596 8.596 0 1 0 0 12.156"></path>
                            <path fill="#345469" d="M6 0h2v4H6zM11 0h2v4h-2zM6 20h2v4H6zM11 20h2v4h-2z"></path>
                          </g>
                        </svg>
                      </span>
                      <span class="geex-content__pricing__amount">&nbsp;250</span>
                      <span class="geex-content__pricing__period">AU$40.00 per file</span>
                    </div>
                  </div>
                  <div class="geex-content__pricing__body">
                    <div class="geex-content__pricing__btn-part">
                      <a class="geex-content__pricing__btn" href="">Buy Credits</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-40">
                <div class="geex-content__pricing__single">
                  <div class="geex-content__pricing__header">
                    <span class="geex-content__pricing__badge">Master Package</span>
                    <div class="geex-content__pricing__tag">
                      <span class="geex-content__pricing__currency">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="24" viewBox="0 0 17 24">
                          <g fill="none" fill-rule="evenodd">
                            <path stroke="#345469" stroke-width="2" d="M16.078 5.922a8.596 8.596 0 1 0 0 12.156"></path>
                            <path fill="#345469" d="M6 0h2v4H6zM11 0h2v4h-2zM6 20h2v4H6zM11 20h2v4h-2z"></path>
                          </g>
                        </svg>
                      </span>
                      <span class="geex-content__pricing__amount">&nbsp;1000</span>
                      <span class="geex-content__pricing__period">AU$40.00 per file</span>
                    </div>
                  </div>
                  <div class="geex-content__pricing__body">
                    <div class="geex-content__pricing__btn-part">
                      <a class="geex-content__pricing__btn" href="">Buy Credits</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="geex-content__invoice">
            <div class="geex-content__invoice__chat">
              <div class="geex-content__invoice__chat__wrapper">
                <div class="p-5 white-bg" style="border-radius: 24px;">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <td>Id</td>
                        <td>Type</td>
                        <td>Method</td>
                        <td>Status</td>
                        <td>Credits</td>
                        <td>Price</td>
                        <td>Date</td>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <div class="alert alert-secondary text-center">
                    No Items Found
                  </div>
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
