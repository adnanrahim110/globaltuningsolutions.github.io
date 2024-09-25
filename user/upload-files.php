<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'File Service' ?>
<?php $page_title = 'File Service' ?>

<?php include 'partials/head.php' ?>
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
// Fetch methods from the database
$methods_query = "SELECT * FROM read_method";
$methods_query_run = mysqli_query($con, $methods_query);

if (mysqli_num_rows($methods_query_run) > 0) {
  while ($method_row = mysqli_fetch_assoc($methods_query_run)) {
    $methods[] = $method_row;
  }
}
?>

<style>
.geex-content__summary__count__single__title {
  line-height: 28px;
  font-size: 20px;
  margin-bottom: 20px;
}

.geex-content__summary__count__single__subtitle {
  line-height: 15px;
}

.geex-content__form__single__box select.sm_select {
  position: absolute;
  top: 50%;
  right: 0px;
  min-width: 50px;
  width: 60px;
  height: 100%;
  padding-inline: 10px;
  color: #000;
  background-color: #48b2c266;
  font-size: 12px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-left: 0;
  z-index: 9;
  transform: translateY(-50%);
}
</style>

<body class="geex-dashboard demo-invoice">
  <main class="geex-main-content">
    <?php include 'partials/sidebar.php' ?>
    <?php include 'partials/customizer.php' ?>
    <div class="geex-content">
      <?php include 'partials/header.php' ?>
      <div class="geex-content__wrapper">
        <div class="geex-content__section-wrapper">
          <div class="geex-content__summary">
            <div class="geex-content__summary__count">
              <div class="geex-content__summary__count__single success-bg">
                <div class="geex-content__summary__count__single__content">
                  <h4 class="geex-content__summary__count__single__title">Welcome to our file service
                  </h4>
                  <p class="geex-content__summary__count__single__subtitle">
                    Use the form below to submit your file for modification. We will work on your
                    file as soon as you upload it to our system. Our team will do the best job to
                    satisfy you.
                  </p>
                </div>
              </div>
              <div class="geex-content__summary__count__single success-bg">
                <div class="row">
                  <div class="col-lg-10">
                    <div class="geex-content__summary__count__single__content">
                      <h4 class="geex-content__summary__count__single__title">
                        Estimated delivery time for your files after upload is the next working
                        day.
                      </h4>
                      <p class="geex-content__summary__count__single__subtitle">
                        Upload your car's original files to let Dieselfiles modify them.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="geex-content__invoice">
            <div class="geex-content__invoice__chat">
              <div class="geex-content__invoice__chat__wrapper">
                <div class="geex-content__invoice__chat__content">
                  <form action="upload_file-next_step" method="post" enctype="multipart/form-data" class="onpy-3"
                    id="firstForm">
                    <?php
                    if (isset($_SESSION['message'])) {
                      $message = $_SESSION['message'];
                      $messageType = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'warning';

                    ?>
                    <center class="mb-3">
                      <div style="max-width: 100%;"
                        class="text-center alert alert-<?= $messageType; ?> alert-dismissable fade show" role="alert">
                        <?= $message; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    </center>
                    <?php
                      unset($_SESSION['message']);
                      unset($_SESSION['message_type']);
                    }
                    ?>
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="brand_id" id="brand_id" class="form-select brand-select" required>
                          <option value="" disabled selected class="form-control">
                            Select Make
                          </option>
                          <?php
                          foreach ($brands as $brand) {
                            echo '<option value="' . $brand['id'] . '">' . $brand['name'] . '</option>';
                          }
                          ?>
                        </select>
                        <input type="hidden" name="brand_name" id="brand_name" value="<?php echo $brand['name']; ?>">
                      </div>
                      <div class="input-wrapper">
                        <select name="model_id" id="model_id" class="form-select model-select" disabled required>
                          <option value="" disabled selected class="form-control">
                            Select Model
                          </option>
                        </select>
                      </div>
                      <div class="input-wrapper">
                        <select name="generation_id" id="generation_id" class="form-select generation-select" disabled
                          required>
                          <option value="" disabled selected class="form-control">
                            Select a Generation
                          </option>
                        </select>
                      </div>
                      <div class="input-wrapper">
                        <select name="engine_id" id="engine_id" class="form-select engine-select" disabled required>
                          <option value="" disabled selected class="form-control">
                            Select an Engine
                          </option>
                        </select>
                      </div>
                      <div class="input-wrapper">
                        <select name="ecu_id" id="ecu_id" class="form-select ecu-select" disabled>
                          <option value="" disabled selected class="form-control">
                            Select an ECU Type
                          </option>
                        </select>
                      </div>
                      <div class="input-icon">
                        <input name="power" placeholder="Power" class="form-control" id="geex-input1">
                        <select name="power_metric" id="Power_metric" class="position-absolute sm_select">
                          <option value="kw" selected>kw</option>
                          <option value="hp">hp</option>
                        </select>
                      </div>
                      <div class="input-wrapper">
                        <select name="year" id="year" class="form-select year-select" required>
                          <option value="null" disabled selected>Select a Year</option>
                          <option value="2024">2024</option>
                          <option value="2023">2023</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="1996">1996</option>
                          <option value="1995">1995</option>
                        </select>
                      </div>
                      <div class="input-wrapper">
                        <select name="gearbox" id="gearbox" class="form-select gearbox-select" required>
                          <option value="" disabled selected class="form-control">
                            Select a Gearbox
                          </option>
                          <option value="unkown">Unkown</option>
                          <option value="mechanic">Mechanic</option>
                          <option value="automatic">Automatic</option>
                        </select>
                      </div>
                      <div class="input-icon">
                        <input name="hardware_no" placeholder="HW Number" class="form-control" id="geex-input1">
                      </div>
                      <div class="input-icon">
                        <input name="software_no" placeholder="SW Number" class="form-control" id="geex-input1">
                      </div>
                      <div class="input-wrapper">
                        <select name="method_id" id="method_id" class="form-select method-select">
                          <option value="" disabled selected class="form-control">
                            Select a Method
                          </option>
                          <?php
                          foreach ($methods as $method) {
                            echo '<option value="' . $method['id'] . '">' . $method['method_name'] . '</option>';
                          }
                          ?>
                        </select>
                      </div>
                      <div class="input-wrapper">
                        <button type="submit" name="next_step_btn" id="nextStep"
                          class="geex-btn geex-btn--primary-transparent w-100 text-center">
                          <i class="uil-arrow-from-right"></i> Next Step
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

  <?php include 'partials/script.php' ?>

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
                '</option>'
              );
            });
            modelSelect.removeAttr('disabled');
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
                .generation_name + '</option>');
            });
            genSelect.removeAttr('disabled');
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
            engSelect.removeAttr('disabled');
          } else {
            engSelect.append('<option value="" disabled selected>No engine found</option>');
          }
        }
      });
    });
    $('.engine-select').change(function() {
      var engine_id = $(this).val(); // Get the selected engine ID
      var ecuSelect = $(this).closest('form').find(
        '.ecu-select'); // Get the corresponding engine select element

      $.ajax({
        url: 'get_car_data.php', // PHP file to fetch ECUs
        type: 'POST',
        data: {
          engine_id: engine_id
        },
        success: function(response) {
          var ECUs = JSON.parse(response); // Assuming JSON response
          ecuSelect.empty(); // Clear the previous options

          if (ECUs.length > 0) {
            ecuSelect.append('<option value="" disabled selected>Select ECU</option>');
            $.each(ECUs, function(index, ecu) {
              ecuSelect.append('<option value="' + ecu.ecu_id + '">' + ecu
                .ecu_name + '</option>');
            });
            ecuSelect.removeAttr('disabled');
          } else {
            engSelect.append('<option value="" disabled selected>No ECU found</option>');
          }
        }
      });
    });
  });
  </script>

</body>

</html>