<?php session_start(); ?>
<!doctype html>
<html lang="en">
<?php $title = 'Add New Credits'; ?>
<?php $page_title = 'Add New Credits'; ?>
<?php include 'partials/head.php'; ?>
<?php
include '../config/dbconn.php';

// Fetch brands from the database
$brand_query = "SELECT * FROM brands";
$brand_query_run = mysqli_query($con, $brand_query);

if (mysqli_num_rows($brand_query_run) > 0) {
  while ($row = mysqli_fetch_assoc($brand_query_run)) {
    $brands[] = $row;
  }
}
?>

<style>
  .bg-w-light {
    background-color: #f39c1219;
  }
</style>

<body class="geex-dashboard">
  <main class="geex-main-content">
    <?php include 'partials/sidebar.php'; ?>
    <?php include 'partials/customizer.php'; ?>
    <div class="geex-content">
      <?php include 'partials/header.php'; ?>

      <div class="geex-content__add-credits">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <?php
            if (isset($_SESSION['message'])) {
              $message = $_SESSION['message'];
              $messageType = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'warning';

            ?>
              <div class="col-12">
                <center class="mb-3">
                  <div style="max-width: 400px;"
                    class="text-center alert alert-<?= $messageType; ?> alert-dismissable fade show" role="alert">
                    <strong>Hey!</strong> <?= $message; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                </center>
              </div>
            <?php
              unset($_SESSION['message']);
              unset($_SESSION['message_type']);
            }
            ?>
            <!-- Add brand -->
            <div class="col-md-6">
              <form class="white-bg shadow p-3" action="add_car_code.php" method="POST" style="border-radius: 24px;">
                <div class="row justify-content-center">
                  <h2 class="mb-3">Add brand Name</h2>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper input-icon">
                        <input type="text" name="brand" placeholder="Brand Name" class="form-control" required
                          id="geex-input1">
                        <i class="uil uil-car"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <button class="geex-btn geex-btn--primary-transparent w-100 justify-content-center" type="submit"
                      name="add_brand"><i class="uil-plus"></i> Add Brand</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- Add model -->
            <div class="col-md-6">
              <form class="white-bg shadow p-3" action="add_car_code.php" method="POST" style="border-radius: 24px;">
                <div class="row justify-content-center">
                  <h2 class="mb-3">Add Model</h2>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="brand_id" class="form-control form-select" id="" required>
                          <option value="" selected disabled>Select Brand</option>
                          <?php
                          foreach ($brands as $brand) {
                            echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <input type="text" name="model" placeholder="Enter Model Name" class="form-control" required
                          id="geex-input2">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <button class="geex-btn geex-btn--primary-transparent w-100 justify-content-center" type="submit"
                      name="add_model"><i class="uil-plus"></i> Add Model</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- Add Generation -->
            <div class="col-md-6">
              <form class="white-bg shadow p-3" action="add_car_code.php" method="POST" style="border-radius: 24px;">
                <div class="row justify-content-center">
                  <h2 class="mb-3">Add Generation</h2>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="brand_id" class="form-control form-select brand-select" id="brand-select-gen"
                          required>
                          <option value="" selected disabled>Select Brand</option>
                          <?php
                          foreach ($brands as $brand) {
                            echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="model_id" class="form-control form-select model-select" id="model-select-gen"
                          required>
                          <option value="" selected disabled>Select Model</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <input type="text" name="generation" placeholder="Enter Generation" class="form-control"
                          required>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <button class="geex-btn geex-btn--primary-transparent w-100 px-2" type="submit"
                      name="add_generation">
                      <i class="uil-plus"></i> Add Generation
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <!-- Add Engine -->
            <div class="col-md-6 mt-5">
              <form class="white-bg shadow p-3" action="add_car_code.php" method="POST" style="border-radius: 24px;">
                <div class="row justify-content-center">
                  <h2 class="mb-3">Add Engine</h2>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="brand_id" class="form-control form-select brand-select" id="brand-select-eng"
                          required>
                          <option value="" selected disabled>Select Brand</option>
                          <?php
                          foreach ($brands as $brand) {
                            echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="model_id" class="form-control form-select model-select" id="model-select-eng"
                          required>
                          <option value="" selected disabled>Select Model</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="generation_id" class="form-control form-select generation-select"
                          id="generation-select-eng" required>
                          <option value="" selected disabled>Select Generation</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <input type="text" name="engine_name" placeholder="Enter Engine Name" class="form-control"
                          required>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <button class="geex-btn geex-btn--primary-transparent w-100" type="submit" name="add_engine">
                      <i class="uil-plus"></i> Add Engine
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <!-- Add ECU -->
            <div class="col-md-6">
              <form class="white-bg shadow p-3" action="add_car_code.php" method="POST" style="border-radius: 24px;">
                <div class="row justify-content-center">
                  <h2 class="mb-3">Add ECU</h2>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="brand_id" class="form-control form-select brand-select" id="brand-select-ecu"
                          required>
                          <option value="" selected disabled>Select Brand</option>
                          <?php
                          foreach ($brands as $brand) {
                            echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="model_id" class="form-control form-select model-select" id="model-select-ecu"
                          required>
                          <option value="" selected disabled>Select Model</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="generation_id" class="form-control form-select generation-select"
                          id="generation-select-ecu" required>
                          <option value="" selected disabled>Select Generation</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="engine_id" class="form-control form-select engine-select" id="engine-select-ecu"
                          required>
                          <option value="" selected disabled>Select engine</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <input type="text" name="ecu_name" placeholder="Enter ECU Name" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <button class="geex-btn geex-btn--primary-transparent w-100 justify-content-center px-2"
                      type="submit" name="add_ecu">
                      <i class="uil-plus"></i> Add ECU
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <!-- Add Method -->
            <div class="col-md-6">
              <form class="white-bg shadow p-3" action="add_car_code.php" method="POST" style="border-radius: 24px;">
                <div class="row justify-content-center">
                  <h2 class="mb-3">Add Method</h2>
                  <div class="col-12 col-md-6">
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <input type="text" name="method_name" placeholder="Enter Method" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <button class="geex-btn geex-btn--primary-transparent w-100 justify-content-center px-2"
                      type="submit" name="add_method">
                      <i class="uil-plus"></i> Add Method
                    </button>
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
  <script>
    $(document).ready(function() {
      // Fetch models based on selected brand for both forms
      $('.brand-select').change(function() {
        var brand_id = $(this).val(); // Get the selected brand ID
        var modelSelect = $(this).closest('form').find(
          '.model-select'); // Get the corresponding model select element

        $.ajax({
          url: 'get_car_data.php', // PHP file to fetch models
          type: 'POST',
          data: {
            brand_id: brand_id
          },
          success: function(response) {
            var models = JSON.parse(response); // Assuming JSON response
            modelSelect.empty(); // Clear the previous options

            if (models.length > 0) {
              modelSelect.append('<option value="" disabled selected>Select Model</option>');
              $.each(models, function(index, model) {
                modelSelect.append('<option value="' + model.model_id + '">' + model.model_name +
                  '</option>');
              });
            } else {
              modelSelect.append('<option value="" disabled selected>No models found</option>');
            }
          }
        });
      });
      $('.model-select').change(function() {
        var model_id = $(this).val(); // Get the selected Model ID
        var genSelect = $(this).closest('form').find(
          '.generation-select'); // Get the corresponding generation select element

        $.ajax({
          url: 'get_car_data.php', // PHP file to fetch models
          type: 'POST',
          data: {
            model_id: model_id
          },
          success: function(response) {
            var generations = JSON.parse(response); // Assuming JSON response
            genSelect.empty(); // Clear the previous options

            if (generations.length > 0) {
              genSelect.append('<option value="" disabled selected>Select Generation</option>');
              $.each(generations, function(index, generation) {
                genSelect.append('<option value="' + generation.generation_id + '">' + generation
                  .generation_name +
                  '</option>');
              });
            } else {
              genSelect.append('<option value="" disabled selected>No Generation found</option>');
            }
          }
        });
      });
      $('.generation-select').change(function() {
        var generation_id = $(this).val(); // Get the selected generation ID
        var engSelect = $(this).closest('form').find(
          '.engine-select'); // Get the corresponding generation select element

        $.ajax({
          url: 'get_car_data.php', // PHP file to fetch generations
          type: 'POST',
          data: {
            generation_id: generation_id
          },
          success: function(response) {
            var engines = JSON.parse(response); // Assuming JSON response
            engSelect.empty(); // Clear the previous options

            if (engines.length > 0) {
              engSelect.append('<option value="" disabled selected>Select engine</option>');
              $.each(engines, function(index, engine) {
                engSelect.append('<option value="' + engine.engine_id + '">' + engine
                  .engine_name +
                  '</option>');
              });
            } else {
              engSelect.append('<option value="" disabled selected>No engine found</option>');
            }
          }
        });
      });
    });
  </script>
</body>

</html>
