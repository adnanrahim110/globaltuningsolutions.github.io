<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'File Service' ?>
<?php $page_title = 'File Service' ?>

<?php include 'partials/head.php' ?>
<?php

if (isset($_POST['next_step_btn'])) {
  $brand_id = $_POST['brand_id'];
  $model_id = $_POST['model_id'];
  $generation_id = $_POST['generation_id'];
  $engine_id = $_POST['engine_id'];
  $ecu_id = $_POST['ecu_id'];
  $power = $_POST['power'];
  $power_metric = $_POST['power_metric'];
  $year = $_POST['year'];
  $gearbox = $_POST['gearbox'];
  $hardware_no = $_POST['hardware_no'];
  $software_no = $_POST['software_no'];
  $method_id = $_POST['method_id'];

  if (empty($brand_id) || empty($model_id) || empty($generation_id) || empty($engine_id) || empty($ecu_id) || empty($power) || empty($power_metric) || empty($year) || empty($gearbox) || empty($hardware_no) || empty($software_no) || empty($method_id)) {
    redirect("upload-files.php", "Please fill all the fields", "warning");
  } else {

    // Fetching names using IDs
    $brand_name = getNameById($con, 'brands', 'name', 'id', $brand_id);
    $model_name = getNameById($con, 'models', 'model_name', 'model_id', $model_id);
    $generation_name = getNameById($con, 'generations', 'generation_name', 'generation_id', $generation_id);
    $engine_name = getNameById($con, 'engines', 'engine_name', 'engine_id', $engine_id);
    $ecu_name = getNameById($con, 'ecu', 'ecu_name', 'ecu_id', $ecu_id);
    $method_name = getNameById($con, 'read_method', 'method_name', 'id', $method_id);
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
</style>

<body class="geex-dashboard demo-invoice">
  <main class="geex-main-content">
    <?php include 'partials/sidebar.php' ?>
    <?php include 'partials/customizer.php' ?>
    <div class="geex-content">
      <?php include 'partials/header.php' ?>
      <div class="geex-content__wrapper">
        <div class="geex-content__section-wrapper">
          <div class="geex-content__invoice">
            <div class="geex-content__invoice__chat">
              <div class="geex-content__invoice__chat__wrapper">
                <div class="geex-content__invoice__chat__content">
                  <form action="save_file_info.php" method="post" enctype="multipart/form-data" class="py-3"
                    id="nextForm">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['auth_user']['id']; ?>">
                    <input type="hidden" name="brand_name" value="<?= $brand_name ?>">
                    <input type="hidden" name="model_name" value="<?= $model_name ?>">
                    <input type="hidden" name="generation_name" value="<?= $generation_name ?>">
                    <input type="hidden" name="engine_name" value="<?= $engine_name ?>">
                    <input type="hidden" name="ecu_name" value="<?= $ecu_name ?>">
                    <input type="hidden" name="power" value="<?= $power ?>">
                    <input type="hidden" name="power_metric" value="<?= $power_metric ?>">
                    <input type="hidden" name="year" value="<?= $year ?>">
                    <input type="hidden" name="gearbox" value="<?= $gearbox ?>">
                    <input type="hidden" name="hardware_no" value="<?= $hardware_no ?>">
                    <input type="hidden" name="software_no" value="<?= $software_no ?>">
                    <input type="hidden" name="method_name" value="<?= $method_name ?>">
                    <div class="geex-content__form__single__box mb-20 gap-1">
                      <div class="input-icon w-100">
                        <input type="file" name="original_file" class="form-control" id="geex-input1" required
                          accept=".fls, .epr, .mpc, .bin, .ori, .zip, .rar">
                        <i class="uil uil-file-alt text-primary"></i>
                      </div>
                      <small class="text-warning w-100 ps-3">
                        *Use only <b>.fls, .epr, .mpc, .bin, .ori, .zip</b> or <b>.rar</b> file to modify
                      </small>
                    </div>
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-wrapper">
                        <select name="tuning_type" id="tuning_type" class="form-select type-select">
                          <option value="" disabled selected>Select a Tuning Type</option>
                          <option value="car_stage1">Car tuning (Stage 1) (50 credits)</option>
                          <option value="car_stage2">Car tuning (Stage 2) (75 credits)</option>
                          <option value="car_additional">Only additional car tuning options (0 credits)</option>
                          <option value="truck_stage1" disabled="">Truck/Agriculture tuning (150 credits)</option>
                          <option value="back_to_stock">Back to original software (25 credits)</option>
                        </select>
                      </div>
                      <div class="input-icon">
                        <input type="email" name="email" placeholder="Email" class="form-control" id="geex-input1">
                        <i class="uil uil-envelope"></i>
                      </div>
                      <div class="input-wrapper">
                        <select name="time_frame" id="time_frame" class="form-select time-select">
                          <option value="" disabled selected>Select a required time frame</option>
                          <option value="asap">Client is waiting ASAP</option>
                          <option value="2-3">Between 2-3 hours</option>
                          <option value="5-6">Between 5-6 hours</option>
                          <option value="next_day">Next business day</option>
                        </select>
                      </div>
                      <div class="input-wrapper">
                        <select name="is_on_dyno" id="is_on_dyno" class="form-select dyno-select">
                          <option value="" disabled selected>Select if the car in on Dyno</option>
                          <option value="No">No</option>
                          <option value="Yes">Yes</option>
                        </select>
                      </div>
                    </div>
                    <div class="geex-content__form__single__box mb-20">
                      <div class="input-icon w-100">
                        <textarea name="comment" id="comment" placeholder="Comment" rows="5"
                          class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="row justify-content-between">
                      <div class="col-6 col-md-4 col-lg-3">
                        <div class="input-wrapper">
                          <a href="upload-files.php" class="geex-btn geex-btn--dark-transparent">
                            <i class="uil-arrow-from-right"></i> Previous Step
                          </a>
                        </div>
                      </div>
                      <div class="col-6 col-md-4 col-lg-3">
                        <div class="input-wrapper">
                          <button type="submit" name="upload_file_btn" class="geex-btn geex-btn--primary w-100">
                            <i class="uil-arrow-from-right"></i> Submit
                          </button>
                        </div>
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

</body>

</html>
