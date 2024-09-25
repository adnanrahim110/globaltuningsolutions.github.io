<div class="geex-content__header">
	<div class="geex-content__header__content">
		<h2 class="geex-content__header__title"><?= $page_title ?></h2>
		<p class="geex-content__header__subtitle">Welcome back
			<strong style="color: #48b2c2;"><?= $_SESSION['auth_user']['name'] ?></strong>
		</p>
	</div>

	<div class="geex-content__header__action">
		<div class="geex-content__header__customizer">
			<button class="geex-btn geex-btn__toggle-sidebar">
				<i class="uil uil-align-center-alt"></i>
			</button>
			<button class="geex-btn geex-btn__customizer">
				<i class="uil uil-pen"></i>
				<span>Customizer</span>
			</button>
		</div>
		<div class="geex-content__header__action__wrap">
			<ul class="geex-content__header__quickaction">
				<li class="geex-content__header__quickaction__item">
					<p>
						<span>Your Credit Balance:&nbsp;</span>
						<strong>0</strong>
						<svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="0 0 17 24">
							<g fill="none" fill-rule="evenodd">
								<path stroke="#345469" stroke-width="2" d="M16.078 5.922a8.596 8.596 0 1 0 0 12.156">
								</path>
								<path fill="#345469" d="M6 0h2v4H6zM11 0h2v4h-2zM6 20h2v4H6zM11 20h2v4h-2z"></path>
							</g>
						</svg>
					</p>
				</li>
				<li class="geex-content__header__quickaction__item">
					<a href="#" class="geex-content__header__quickaction__link">
						<img class="user-img"
							src="<?= htmlspecialchars(!empty($_SESSION['auth_user']['profile_pic']) ? $_SESSION['auth_user']['profile_pic'] : 'resources/img/avatar/user.svg') ?>"
							alt="<?= !empty($_SESSION['auth_user']['name']) ? $_SESSION['auth_user']['name'] : 'user'; ?>"
							title="<?= !empty($_SESSION['auth_user']['name']) ? $_SESSION['auth_user']['name'] : 'user'; ?>" />
					</a>
					<div class="geex-content__header__popup geex-content__header__popup--author">
						<div class="geex-content__header__popup__header">
							<div class="geex-content__header__popup__header__img">
								<img
									src="<?= !empty($_SESSION['auth_user']['profile_pic']) ? $_SESSION['auth_user']['profile_pic'] : 'resources/img/avatar/user.svg'; ?>"
									alt="<?= !empty($_SESSION['auth_user']['name']) ? $_SESSION['auth_user']['name'] : 'user'; ?>"
									title="<?= !empty($_SESSION['auth_user']['name']) ? $_SESSION['auth_user']['name'] : 'user'; ?>"
									width="54px" height="54px" style="object-fit: contain;" />
							</div>
							<div class="geex-content__header__popup__header__content">
								<h3 class="geex-content__header__popup__header__title"><?= $_SESSION['auth_user']['name'] ?></h3>
								<span class="geex-content__header__popup__header__subtitle">
									Username: <?= $_SESSION['auth_user']['username'] ?>
								</span>
							</div>
						</div>
						<div class="geex-content__header__popup__content">
							<ul class="geex-content__header__popup__items">
								<li class="geex-content__header__popup__item">
									<a class="geex-content__header__popup__link" href="#">
										<i class="uil uil-envelope"></i>
										<?= $_SESSION['auth_user']['email'] ?>
									</a>
								</li>
								<li class="geex-content__header__popup__item">
									<a class="geex-content__header__popup__link" href="#">
										<i class="uil uil-phone"></i>
										<?= $_SESSION['auth_user']['phone'] ?>
									</a>
								</li>
								<li class="geex-content__header__popup__item">
									<a class="geex-content__header__popup__link" href="#">
										<i class="uil uil-globe"></i>
										<?= !empty($_SESSION['auth_user']['country']) ? $_SESSION['auth_user']['country'] : '<em>Not Entered</em>'; ?>
									</a>
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-12 col-md-7">
								<div class="geex-content__header__popup__footer me-md-0">
									<a href="edit-profile" class="geex-content__header__popup__footer__link">
										<i class="uil uil-user-circle"></i>
										Edit Profile
									</a>
								</div>
							</div>
							<style>
								.geex-content__header__popup__footer.logout {
									background-color: #e74c3c;
								}

								.geex-content__header__popup__footer.logout .geex-content__header__popup__footer__link,
								.geex-content__header__popup__footer.logout .geex-content__header__popup__footer__link:hover {
									color: #fff !important;
								}

								.geex-content__header__popup__footer.logout:hover {
									background-color: #c0392b;
								}
							</style>
							<div class="col-12 col-md-5">
								<div class="geex-content__header__popup__footer ms-md-0 logout">
									<a href="../logout" class="geex-content__header__popup__footer__link">
										<i class="uil uil-arrow-up-left"></i>Logout
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
