
<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'index' ?>
<?php $page_title = 'Dashboard' ?>

<?php include 'partials/head.php' ?>

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
							<div class="geex-content__summary__count__single primary-bg">
								<div class="geex-content__summary__count__single__content">
									<h4 class="geex-content__summary__count__single__title">Buy more credits</h4>
									<p class="geex-content__summary__count__single__subtitle">
										This credits are used for file services to modify your car's files. You can buy
										credits using PayPal which is very safe!
									</p>
								</div>
								<button
									class="geex-content__invoice__chat__btn geex-btn geex-btn align-self-end">
									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512"
										fill="none">
										<path
											d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2c0 0 0 0 0 0s0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5l0 35.4c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336l0-35.4c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4l0 3.4 0 5.7 0 26.3zm32 0l0-32 0-25.9c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5l0 35.4c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5l0 35.4c0 44.2-86 80-192 80S0 476.2 0 432l0-35.4c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"
											/>
									</svg>
									Buy Credits
								</button>
							</div>
							<div class="geex-content__summary__count__single primary-bg">
								<div class="geex-content__summary__count__single__content">
									<h4 class="geex-content__summary__count__single__title">Get your files modified</h4>
									<p class="geex-content__summary__count__single__subtitle">
										Upload your car's original files to let Dieselfiles modify them.
									</p>
								</div>
								<div class="row w-100">
									<div class="col-md-6 ps-0">
										<button class="geex-content__invoice__chat__btn geex-btn geex-btn">
											<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
												viewBox="0 0 640 512" fill="none">
												<path
													d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128l-368 0zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39L344 184c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 134.1-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z"
													/>
											</svg>
											Downloads
										</button>
									</div>
									<div class="col-md-6 pe-0">
										<button class="geex-content__invoice__chat__btn geex-btn geex-btn">
											<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
												viewBox="0 0 576 512" fill="none">
												<path
													d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 47-92.8 37.1c-21.3 8.5-35.2 29.1-35.2 52c0 56.6 18.9 148 94.2 208.3c-9 4.8-19.3 7.6-30.2 7.6L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zm39.1 97.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8l0 187.8c68.2-33 91.5-99 95.4-149.7z"
													/>
											</svg>
											File Service
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="geex-content__invoice">
						<div class="geex-content__invoice__chat w-100">
							<div class="geex-content__invoice__chat__wrapper">
								<div class="p-5 white-bg" style="border-radius: 24px;">
									<table class="table table-borderless">
										<thead>
											<tr>
												<td>Make/Model</td>
												<td>Engine</td>
												<td>Type</td>
												<td>File</td>
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