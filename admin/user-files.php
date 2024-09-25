<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'Customer Files'; ?>
<?php $page_title = 'Customer Files'; ?>

<?php include 'partials/head.php'; ?>
<?php
include '../config/dbconn.php';

// Update the query to retrieve names from related tables instead of just IDs
$query = "
    SELECT
        fs.*,
        u.username AS customer_name
    FROM file_service fs
    JOIN users u ON fs.user_id = u.id
";
$result = mysqli_query($con, $query);
if (!$result) {
	die("Query failed: " . mysqli_error($con));
}

// Handle form submission to update file details
if (isset($_POST['update_file'])) {
	$file_service_id = $_POST['file_service_id'];
	$brand_name = $_POST['brand_name'];
	$model_name = $_POST['model_name'];
	$generation_name = $_POST['generation_name'];
	$engine_name = $_POST['engine_name'];
	$ecu_name = $_POST['ecu_name'];
	$method_name = $_POST['method_name'];
	$power = $_POST['power'];
	$power_metric = $_POST['power_metric'];
	$gearbox = $_POST['gearbox'];
	$year = $_POST['year'];
	$hardware_no = $_POST['hardware_no'];
	$software_no = $_POST['software_no'];
	$updated_file = $_FILES['updated_file']['name'];

	if (empty($brand_name) || empty($model_name) || empty($generation_name) || empty($engine_name) || empty($ecu_name) || empty($method_name) || empty($power) || empty($power_metric) || empty($gearbox) || empty($engine_name) || empty($year) || empty($hardware_no) || empty($software_no) || empty($updated_file)) {
		redirect('user-files', 'Please fill all fields', "danger");
	} else {
		if ($updated_file) {
			$target_dir = "uploads/updated_service_files/";
			$target_file = $target_dir . basename($updated_file);

			if (move_uploaded_file($_FILES['updated_file']['tmp_name'], $target_file)) {
				// Update the file details in the database
				$update_query = "UPDATE file_service SET brand_name = '$brand_name',
            model_name = '$model_name',
            generation_name = '$generation_name',
            engine_name = '$engine_name',
            ecu_name = '$ecu_name',
            method_name = '$method_name',
            power = '$power',
            power_metric = '$power_metric',
            gearbox = '$gearbox',
            year = '$year',
            hardware_no = '$hardware_no',
            software_no = '$software_no'
        WHERE id = '$file_service_id'";
				$update_query_run = mysqli_query($con, $update_query);
				if ($update_query_run) {
					redirect("user-files", "Service FIle updated successfully", "success");
				} else {
					redirect("user-files", "Failed to update the Service File", "danger");
				}
			} else {
				redirect("user-files", "File upload failed.", "danger");
			}
		} else {
			redirect("user-files", "No file selected for upload.", "danger");
		}
	}
}
?>

<style>
	tr th {
		font-size: 12px;
		color: #11323795;
	}

	tr td {
		font-size: 14px;
		color: #616161;
	}

	.file_d {
		display: flex;
		flex-wrap: wrap;
		align-items: center;
		justify-content: space-between;
		max-width: 400px;
		gap: 5px;
		color: #616161;
		font-size: 13px;
	}

	.file_d span {
		font-weight: bold;
		color: #585858;
	}

	.file_d input {
		min-width: 50px;
		max-width: 130px;
		padding: 0 10px;
		font-size: 12px;
	}

	.btn-sm {
		font-size: 12px;
		padding: 6px 5px;
		line-height: 1;
	}

	.btn-sm.btn-primary {
		background-color: #48b2c2;
		border-color: #48b2c2;
		color: #fff;
	}

	.btn-sm.btn-primary:hover {
		background-color: #113237;
		border-color: #113237;
		color: #fff;
	}
</style>

<body class="geex-dashboard demo-invoice">
	<main class="geex-main-content">
		<?php include 'partials/sidebar.php'; ?>
		<?php include 'partials/customizer.php'; ?>
		<div class="geex-content">
			<?php include 'partials/header.php'; ?>
			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<div class="geex-content__invoice">
						<div class="geex-content__invoice__chat w-100">
							<div class="geex-content__invoice__chat__wrapper">
								<div class="p-5 white-bg" style="border-radius: 24px;">
									<table class="table table-bordered table-hover table-striped">
										<thead>
											<tr>
												<th>Client Name</th>
												<th>File Details</th>
												<th>Tuning Type</th>
												<th>Time</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if (mysqli_num_rows($result) > 0) {
												while ($row = mysqli_fetch_assoc($result)) {
											?>
													<tr>
														<form action="user-files.php" method="POST" enctype="multipart/form-data">
															<input type="hidden" name="file_service_id" value="<?= $row['id'] ?>">
															<td><?= $row['customer_name'] ?></td>
															<td>
																<div class="file_d">
																	<span>Brand:
																		<input type="text" name="brand_name" value="<?= $row['brand_name'] ?>">
																	</span>
																	<span>Model:
																		<input type="text" name="model_name" value="<?= $row['model_name'] ?>">
																	</span>
																	<span>Generation:
																		<input type="text" name="generation_name" value="<?= $row['generation_name'] ?>">
																	</span>
																	<span>Engine:
																		<input type="text" name="engine_name" value="<?= $row['engine_name'] ?>">
																	</span>
																	<span>ECU:
																		<input type="text" name="ecu_name" value="<?= $row['ecu_name'] ?>">
																	</span>
																	<span>Power:
																		<input type="text" name="power" value="<?= $row['power'] ?>" style="max-width: 80px;">
																		<input type="text" name="power_metric" value="<?= $row['power_metric'] ?>"
																			style="max-width: 30px;">
																	</span>
																	<span>Year:
																		<input type="text" name="year" value="<?= $row['year'] ?>" style="max-width: 65px;">
																	</span>
																	<span>Gearbox:
																		<input type="text" name="gearbox" value="<?= $row['gearbox'] ?>">
																	</span>
																	<span>Hardware No:
																		<input type="text" name="hardware_no" value="<?= $row['hardware_no'] ?>"
																			style="max-width: 70px;">
																	</span>
																	<span>Software No:
																		<input type="text" name="software_no" value="<?= $row['software_no'] ?>"
																			style="width:70px">
																	</span>
																	<span>Method:
																		<input type="text" name="method_name" value="<?= $row['method_name'] ?>"
																			style="width:100px">
																	</span>
																</div>
															</td>
															<td><?= $row['tuning_type'] ?></td>
															<td><?= $row['time_frame'] ?></td>

															<?php
															$file_path = $row['original_file'];
															?>

															<td>
																<div class="d-flex flex-column align-items-center" style="max-width: 100px;">
																	<?php if ($file_path) { ?>
																		<a href='../uploads/<?= $file_path ?>' download class="btn btn-sm btn-primary">
																			Download Files
																		</a>
																	<?php } else { ?>
																		<p>No file uploaded</p>
																	<?php } ?>
																	<br>
																	<!-- Upload file button -->
																	<div class="position-relative">
																		<span
																			class="position-absolute top-0 end-0 text-center z-3 btn btn-sm btn-warning w-100 h-100">
																			upload file
																		</span>
																		<input type="file" name="updated_file" class="w-100">
																	</div>
																	<br>
																	<button type="submit" name="update_file" class="btn btn-sm btn-success">
																		Save Changes</button>
																</div>
															</td>
														</form>
													</tr>
												<?php
												}
											} else {
												?>
												<tr>
													<td colspan='6' class='alert alert-secondary text-center'>No File Found</td>
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

	<?php include 'partials/script.php'; ?>
</body>

</html>
