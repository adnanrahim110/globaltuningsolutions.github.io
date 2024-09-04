<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'Customer Files' ?>
<?php $page_title = 'Customer Files' ?>

<?php include 'partials/head.php' ?>

<body class="geex-dashboard demo-invoice">
	<main class="geex-main-content">
		<?php include 'partials/sidebar.php' ?>
		<?php include 'partials/customizer.php' ?>
		<div class="geex-content">
			<?php include 'partials/header.php' ?>
			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<div class="geex-content__invoice">
						<div class="geex-content__invoice__chat w-100">
							<div class="geex-content__invoice__chat__wrapper">
								<div class="p-5 white-bg" style="border-radius: 24px;">
									<table class="table table-borderless">
										<thead>
											<tr>
												<td>Customer Name</td>
												<td>File Details</td>
												<td></td>
												<td></td>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
									<div class="alert alert-secondary text-center">
										No File Found
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